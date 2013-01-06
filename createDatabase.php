<?php

$host = "localhost";
$userName = "root";
$userPass = "14021991";
$port = "3306";
$databaseName = "php_project";

$link = mysql_connect($host,$userName,$userPass);
	if (!$link) {
		die('Cound not connect database'.mysql_error());
	}


function createDatabase(){
	$sql = 'CREATE DATABASE '.$databaseName;
	if (mysql_query($sql,$link)) {
		echo "Done , create database\n";
	}
	else{
		echo 'Error creating database'.mysql_error();
	}

}

function createTable(){
	$sql = 'CREATE TABLE ....';
}

?>