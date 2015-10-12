<?php

require_once "config.php";

$controller = isset($_GET['controller'])?$_GET['controller']:'Home';
$method = isset($_GET['method'])?$_GET['method']:'index';


$controller = $controller."Controller";

$c = new $controller;
$c->$method();