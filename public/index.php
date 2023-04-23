<?php


require_once("../config/constants.php");
// die(VENDOR);
require_once (VENDOR."App.php");
ini_set("display_errors",1);
ini_set("error_reporting",E_STRICT);
try{
    App::run();
}catch (Exception $e){
    $errorMessage = $e->getMessage();
    $errorCode = $e->getCode();
    echo "<h1 style='color:red;'>$errorMessage</h1>";
    echo "<h4 style='color:red;'>$errorCode</h4>";
}
