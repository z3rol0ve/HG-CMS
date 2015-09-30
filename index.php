<?php
/*$mongo_client = new MongoClient("mongodb://localhost:27017");
$mongo_db = $mongo_client->selectDB("testing");
$mongo_db->authenticate("test","113003");
//$mongo_collection = $mongo_db->selectCollection("user");
//$mongo_collection->insert(array('groupname' => 'Administrator'));
//$usergroup = $mongo_db->usergroup->findOne(array('groupname' => 'Administrator'));
//$refToSong = $mongo_db->usergroup->createDBRef($usergroup);
//$mongo_db->user->update(array('username' => 'admin'), array('$push' => array('usergroup_id' => $refToSong)));
$dbs = $mongo_db->user->findOne();
//$address = MongoDBRef::get($dbs->db, $dbs['usergroup_id']);
//foreach ($dbs['usergroup_id'] as $songRef) {
    $song = $mongo_db->user->getDBRef(current($dbs['usergroup_id']));
    print_r($song);
//}
print_r($dbs);
*/
/*error_reporting( E_CORE_ERROR | E_CORE_WARNING | E_COMPILE_ERROR | E_ERROR | E_WARNING | E_PARSE | E_USER_ERROR | E_USER_WARNING | E_RECOVERABLE_ERROR );
$mongo_client = new MongoClient("mongodb://localhost:27017");
$mongo_db = $mongo_client->selectDB("testing");
$mongo_db->authenticate("test","113003");
$dbs = $mongo_db->user->findOne();
//var_dump(iterator_to_array($dbs));
$dbs['usergroup_id'] = $mongo_db->user->getDBRef(current($dbs['usergroup_id']));
print_r($dbs);*/
require_once('./hg-global.php');
//$per = new UserPermission();
//var_dump($per);
//var_dump($per->checkback('testing1'));
