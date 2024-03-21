<?php

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

include("Model.php");
include("Request.php");
include("Session.php");
include("Controller.php");

//session_start();

class App{
    public static $currentController;
    public static function run(){
        $uri = $_SERVER["REQUEST_URI"];
        $uriArray = explode("/",$uri);


        $controller = DEFAULT_CONTROLLER;
        $action = DEFAULT_ACTION;

        if($uriArray[1] == 'company'){
            
            $controller = $uriArray[1];
            $action = 'index';
            $_SERVER['company_name'] = $uriArray[2];

        } else {
            if($uriArray[1]){
                $controller = $uriArray[1];
            }
            if($uriArray[2]){
                $action = $uriArray[2];
            }
        }
       
        self::$currentController = $controller;
        $n = 3;
        if(is_numeric($uriArray[3])){
            $_GET["id"] = $uriArray[3];
            $n = 4;
        }
        $count  = count($uriArray);
        if($uriArray[4]){
            for($i = $n;$i<=$count;$i+=2){
                if($uriArray[$i+1]){
                    $_GET[$uriArray[$i]] = $uriArray[$i+1];
                }
            }
        }

        $controllerName = ucfirst($controller).'Controller';
        $actionName = $action.'Action';
        $controllerFileName = $controllerName.'.php';
        
        if(file_exists(CONTROLLERS.$controllerFileName)){
            include_once(CONTROLLERS.$controllerFileName);
            
                        // var_dump(CONTROLLERS.$controllerFileName,class_exists($controllerName) );die;

            if(class_exists($controllerName)){
                $controllerObj = new $controllerName;
                self::loadModels();
                if(method_exists($controllerObj,$actionName)){
                    $controllerObj->$actionName();
                }else{
                    throw new Exception("$actionName action not declared in $controllerName class",404);
                }

            }else{
                throw new Exception("$controllerName Class not declared",404);
            }
        }else{
            throw new Exception("$controllerFileName Controller File not found in ".CONTROLLERS,404);
        }

    }

    public static function session(){
        return Session::getInstance();
    }

    public static function request(){
        return new Request();
    }

    public static function loadModels(){
        $models = glob(MODELS.'*.php');
        foreach ($models as $model){
            include_once($model);
        }
    }

    public static function url($url){
        return "/$url";
    }

    public static function redirect($url){
        header("Location:/$url");
    }

}