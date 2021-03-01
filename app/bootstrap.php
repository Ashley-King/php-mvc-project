<?php
// LOAD CONGIF
require_once 'config/config.php';



//AUTOLOAD CORE LIBRARIES
spl_autoload_register(function($className){
    require_once '../app/libraries/'. $className . '.php';
});