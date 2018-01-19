<?php 
namespace App\Table;
use App\App;
use App\Database;
/**
* 
*/
class Table
{
	protected static $table;

	private static function getTable(){
		if(static::$table === null){
			static::$table = strtolower(end(explode('\\',get_called_class())));
			
		}
		return static::$table;
	}

	public static function getAll(){ 
		return App::getDb()->query("Select * from ". static::getTable() ." ",get_called_class());
	}

	public static function find($id){
		return App::getDb()->prepare("Select * from ". static::getTable() ." where id = ?",[$id], get_called_class(), true);
	}



	//magic function
	public function __get($key){
		//to not call the methode every time we need instance varible
		$method = 'get' .ucfirst($key);
		$this->$key = $this->$method();
		return $this->$key;
	}

}