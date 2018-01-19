<?php 

require '../app/Autoloader.php';

App\Autoloader::register();

$p = (isset($_GET['p'])) ? $_GET['p'] : 'home';

/**
 * initialize objects
 */
// database
$db = new App\Database('Blog');


//all we get from ob_start save it in $content
ob_start();
switch ($p) {
	case 'home':
		require '../pages/home.php';
		break;
	
	case 'article':
		require '../pages/article.php';
		break;

	// case 'home':
	// 	# code...
	// 	break;

	default:

		break;
}

$content = ob_get_clean();

require '../pages/templates/default.php';