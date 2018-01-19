<?php 
namespace App\Table;

/**
* 
*/
class Article
{
	//magic function
	public function __get($key){
		//to not call the methode every time we need instance varible
		$method = 'get' .ucfirst($key);
		$this->$key = $this->$method();
		return $this->$key;
	}
	public function getUrl(){
		return 'index.php?p=article&id='. $this->id;
	}
	public function getExtrait(){
		$html = '<p>'. substr($this->contenu,0,100) .'...</p>';
		$html .= "<p><a href='";
		$html .= $this->getURL();
		$html .= "'>Read more</a></p>";  
		return $html;
	}
}