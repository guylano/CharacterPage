<?php 
include_once 'resources/includes/dbh.inc.php';

function getAllCharacters(){
	global $db;
    $data = $db->query("SELECT * FROM `characters` ORDER BY name;");
	return $data;
}