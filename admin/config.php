<?php

function aload_model($className){
    if(file_exists("../model/".$className.".php")){
    require_once "../model/".$className.".php";
    }
}

function aload_controller($className){
    if(file_exists("../controller/".$className.".php")){
    require_once "../controller/".$className.".php";
    }
}

spl_autoload_register("aload_model");
spl_autoload_register("aload_controller");