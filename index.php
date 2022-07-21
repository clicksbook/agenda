<?php
header("Content-Type: text/html;charset=utf-8");
ob_start(); //poder modificar el header
define("GET",@$_GET["url"]); //definir variable GET recibida
define('URL','https://' . $_SERVER['SERVER_NAME'] . '/');
define('ROUTE','https://' . $_SERVER['SERVER_NAME'] . '/Views/');
require_once("private/require.php");

$url = new ctrLinks();
$resultURl=$url->getLinks(GET);
echo '<pre>';
print_r($resultURl);
echo '</pre>';

/*** Dashbord*/
//include('Views/template.php');
 /**End Dashboard */




ob_end_flush();

