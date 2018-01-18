<?php
//error_reporting(0);
	$control = 'C:\xampp/cmv/control/control.php';
		if(isset($_GET['page'])){
			$view = 'C:\xampp/cmv/view/'.addslashes($_GET['page']) . '.php';
				if (file_exists($view) && file_exists($control)) {
					require_once($control);
					include($view);
					}else{
							echo "404 error. Page not found (View or control)";
							}
		}else{
				require_once($control);
				include('view/home.php');
			}

?>

