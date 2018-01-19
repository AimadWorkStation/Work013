<div class="row">
	<div class="col-sm-8">
		<?php
		/**
		 * to not work with function getURL and getExtrait we may have to work with magic function and undefined variables,
		 * if we didn't find the variable call the function so getUrl with $url and getExtrait with extrait
		 */
		foreach (\App\Table\Article::getLast() as $post) : 	?>
		
		  <h2>
		    <a href="<?= $post->url; ?>"><?= $post->title;?>,</a>
		  </h2>
		  <p><i><h6><?= $post->category;?></h6></i></p>
		  <?= $post->extrait; ?>
		<?php endforeach; ?>
	</div>
	<div class="col-sm-4">
		<ul>
			<?php foreach(\App\Table\Category::getAll() as $category): { } ?>
				<li><a href="<?= $category->url; ?>"><?= $category->titre; ?></a></li>
			<?php endforeach; ?>		
		</ul>
	</div>
</div>

