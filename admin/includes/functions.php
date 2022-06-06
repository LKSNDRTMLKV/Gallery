<?php 



function classAutoLoader($class) {
	$class = strtolower($class);
	$path = "includes/{$class}.php";

	file_exists($path) && !class_exists($class) ? include($path) : die("The file {$class}.php was not found..");

}

spl_autoload_register('classAutoLoader');



function redirect($location){


header("Location: {$location}");


}




function output_message($message) {


return $message;

}




 ?>