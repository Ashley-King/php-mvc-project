<?php

/**
 * Base Controller
 * Loads the models and views
 * 
 */

 class Controller{

    // load model
    public function model($model){
        require_once '../app/models/' . $model . '.php';

        //instantiate the model
        return new $model();

    }

    //load view

    public function view($view, $data = []){
        //check for view file
        if(file_exists('../app/views/' . $view . '.php')){
            require_once '../app/views/' . $view . '.php';
        }else{//does not exist
            die('view does not exist');
        } 
    }


 }
