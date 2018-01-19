<?php 
namespace App;
/**
* 
*/
class App
{
	//if changing the database we need to change also here so better to use constant variables
	const DB_NAME = 'Blog';
	const DB_USER = 'root';
	const DB_PASS = '';
	const DB_HOST = 'localhost';
	private static $database;	

	public static function getDb(){
		if(self::$database === null){
			self::$database =  new Database(self::DB_NAME,self::DB_USER,self::DB_PASS,self::DB_HOST);
		}
		return self::$database;
	}

}