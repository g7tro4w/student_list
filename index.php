<?php

require_once(__DIR__ . '/controlers/siteController.php');
require_once(__DIR__ . '/models/StudentsModel.php');
require_once(__DIR__ . '/models/DBModel.php');

$StudentsHandler = new StudentsHandler;

$SiteController = new SiteController();
if(isset($_POST['search'])){
	$students = $SiteController->renderSearch($StudentsHandler);
}
else{
	$students = $SiteController->renderList($StudentsHandler);
}
require_once(__DIR__ . '/public/index.php');


