<?php
header("Content-Type: text/html;charset=utf-8");
ob_start(); //poder modificar el header
define("GET",@$_GET["url"]); //definir variable GET recibida
define('URL','https://' . $_SERVER['SERVER_NAME'] . '/');
define('ROUTE','https://' . $_SERVER['SERVER_NAME'] . '/Views/');
require_once("private/require.php");
session_start();


/*** Dashbord*/
if(isset($_SESSION["auth"]) || @$_SESSION["auth"] === true){

}else{
    if(empty(GET)){
        include('Views/login.php');
    }else{
        $getTemplate = new ctrTemplate();
        $resultGetTemplate = $getTemplate->getUrl(GET);
        if(!empty($resultGetTemplate["url"])){
            include($resultGetTemplate["route"]);
        }else{
            include('Views/login.php');
        }
    }
}

 /**End Dashboard */




ob_end_flush();

