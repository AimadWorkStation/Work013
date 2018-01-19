<?php 
namespace App;
//to escape the autoloader probleme we neet to get back class PDO to racin 
use \PDO;
/**
* database connextion v2.0
*/
class Database 
{
	private $db_name;
	private $db_user;
	private $db_pass;
	private $db_host;
	private $pdo;
	public function __construct($db_name,$db_user = 'root',$db_pass = '',$db_host = 'localhost')
	{
		$this->db_name = $db_name;
		$this->db_user = $db_user;
		$this->db_pass = $db_pass;
		$this->db_host = $db_host;
	}

	private function getPDO(){
		//to avoid opening many connection when one is enough
		if($this->pdo === null){
			$pdo = new PDO('mysql:host=localhost;dbname=Blog','root','');
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$this->pdo = $pdo;
		}
		return $pdo;
	}
	public function query($statement,$class_name){
		$req = $this->getPDO()->query($statement);
		$data = $req->fetchAll(PDO::FETCH_CLASS,$class_name);
		return $data;
	}
	public function prepare($statement,$attr,$class_name,$one=false){
		$req = $this->getPDO()->prepare($statement);
		$req->execute($attr);
		$req -> setFetchMode(PDO::FETCH_CLASS,$class_name);
		$data = ($one) ? $req->fetch() : $req->fetchAll();
		return $data;
	}
}