<?php 
$post = App\App::getDb()->prepare('SELECT * from articles where id = ?', [$_GET['id']],'App\Table\Article',true);
?>
</var>
<h1><?= $post->title; ?></h1>
<p><?= $post->contenu; ?></p>
<p><a href="index.php?p=home">home</a></p>