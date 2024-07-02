<?php

function my_autoload($className){
    require_once WEBROOT. '/model/'.$className.'.php';
}

spl_autoload_register("my_autoload");