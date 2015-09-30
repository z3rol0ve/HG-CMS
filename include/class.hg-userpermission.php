<?php
class UserPermission{
	public $permission;
	private $user_id = 0;
	private $usergroup_id = 0;
	
	public function __construct($user_id = null) {
		global $mongo_db;
		if ($user_id !== null) $this->user_id  = $user_id;

		if (MongoId::isValid($this->user_id)===true){
			$user = $mongo_db->user->find(array('_id'=> new MongoId($this->user_id)))->limit(1)->next();
			if($user !== NULL && MongoDBRef::isRef($user['usergroup_id'])===true){
				$usergroup = $mongo_db->user->getDBRef($user['usergroup_id']);
				if($usergroup !== NULL){
					$this->permission = $usergroup['permission'];
					$this->usergroup_id = $usergroup;
				}
			}
		}
	}
	
	public function __destruct() {
		$this->permission = NULL;
		$user_id = 0;
	}
	
	public function checkfront($permission_name = ''){
		return $this->check($permission_name,'FrontEnd');
	}
	
	public function checkback($permission_name = ''){
		return $this->check($permission_name,'BackEnd');
	}
	
	public function check($permission_name = '', $type = 'FrontEnd'){
		global $mongo_db;
		if($this->permission[$type][$permission_name] === true) return true;
		else{
			$mongo_db->usergroup->update(array(),array(
			'$set' => array(
						'permission' => array(
											$type => array(
														$permission_name=>false
													)
											)
								)
			),array('multiple' => true));
			
			return false;
		}
	}
}
