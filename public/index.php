<?php 

require '../app/Autoloader.php';

App\Autoloader::register();

$p = (isset($_GET['p'])) ? $_GET['p'] : 'home';


//all we get from ob_start save it in $content
ob_start();
switch ($p) {
	case 'home':
		require '../pages/home.php';
		break;
	
	case 'single':
		require '../pages/single.php';
		break;

	// case 'home':
	// 	# code...
	// 	break;

	default:

		break;
}

$content = ob_get_clean();

require '../pages/templates/default.php';