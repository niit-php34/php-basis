<?php
  //?ct=controllerName&action=actionName
   //?ct=post&action=index
   //?ct=post/add
   //?ct=post/edit/
   //?ct=post
if (isset($_GET['ct'])) {
    $ct = $_GET['ct'];
    $parts = explode('/', $ct);
    if (isset($parts[0]) && !empty($parts[0])) {
        $controllerName = $parts[0];
    }

    if (isset($parts[1]) && !empty($parts[1])) {
        $action = $parts[1];
    } else {
        $action = 'index';
    }

    require_once('controllers/'.$controllerName.'Controller.php');

    $cont = $controllerName.'Controller';
    $controller = new $cont;
    $controller->$action();
}
