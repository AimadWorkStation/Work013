
<?php
/**
 * to not work with function getURL and getExtrait we may have to work with magic function and undefined variables,
 * if we didn't find the variable call the function so getUrl with $url and getExtrait with extrait
 */
foreach ($db->query('Select * from articles','App\Table\Article') as $post) : ?>
  <h2>
    <a href="<?= $post->url; ?>"><?= $post->title;?></a>
  </h2>
  <?= $post->extrait; ?>
<?php endforeach; ?>

