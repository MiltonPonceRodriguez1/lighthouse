<?php

class Database{
	public static function connect(){
		//$db = new mysqli('localhost', 'root', '', 'lighthouse');
		//$db->query("SET NAMES 'utf8'");
		//return $db;

		$DBhost = "localhost";
		$DBuser = "root";
		$DBpass = "";
		$DBname = "lighthouse";
		 
		try{
		  $DBcon = new PDO("mysql:host=$DBhost;dbname=$DBname",$DBuser,$DBpass);
		  $DBcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		  
		}catch(PDOException $ex){
		  
		  die($ex->getMessage());
		}

		return $DBcon;

	}


}

