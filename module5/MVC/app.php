<?php
include_once('Model.php');
include_once('View.php');
include_once('Controller.php');

$model = new Model();
$controller = new Controller($model);
$view = new View($model, $controller);

if(isset($_GET['action']) && !empty($_GET['action'])) {
    $controller->{$_GET['action']}();
}

echo $view->output();