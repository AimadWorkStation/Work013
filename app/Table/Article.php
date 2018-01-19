<?php 
namespace App\Table;
use App\App;

/**
* 
*/
class Article extends Table
{
	public static function getLast(){
		return App::getDb()->query('Select articles.id,title,contenu, category.titre as category from articles LEFT Join category on category_id = category.id',__CLASS__);
	}

	public function getUrl(){
		return 'index.php?p=article&id='. $this->id;
	}


	public static function LastByCategory($category_id){
		return App::getDb()->prepare('Select articles.id,title,contenu, category.titre as category from articles LEFT Join category on category_id = category.id where category_id = ?',[$category_id],__CLASS__);
	}


	public function getExtrait(){
		$html = '<p>'. substr($this->contenu,0,100) .'...</p>';
		$html .= "<p><a href='";
		$html .= $this->getURL();
		$html .= "'>Read more</a></p>";  
		return $html;
	}
}