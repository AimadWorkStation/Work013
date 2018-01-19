<?php 
use \App\Table\Category;
use \App\Table\Article;
$category = Category::find($_GET['id']);
$article = Article::LastByCategory($_GET['id']);
$categories = Category::getAll();
echo "<pre>";
var_dump($article);
echo "</pre>";