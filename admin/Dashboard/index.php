<?php
require_once("../../include/initialize.php");

//checkAdmin();
	# code...
if(!isset($_SESSION['USERID'])){
	redirect(web_root."admin/index.php");
}

$view = (isset($_GET['view']) && $_GET['view'] != '') ? $_GET['view'] : '';

	$header=$view;
	$title="Dashboard"; 
	switch ($view) {

	case 'list' :
	 
		$content    = 'list.php';		
		break;

	case 'add' : 
		$content    = 'add.php';		 
		break;

	case 'edit' : 
		$content    = 'edit.php';		
		break;

	case 'view' : 
		$content    = 'view.php';
		break;
  

  	default :
	$title="Dashboard ";
		$content    = 'list.php';
	}


   
 
require_once ("../theme/templates.php");
?>
  
