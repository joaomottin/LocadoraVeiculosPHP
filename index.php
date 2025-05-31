<?php 

$pagina = $_GET['p'] ?? '';
//var_dump($pagina);
//echo "<br>";

$url = explode('/', $pagina);
//print_r($url);

//echo "<br><br><br>";

require "Controller/HomeController.php";

match($url[0]){
    "login" => HomeController::login(),
    "fazer-login" => HomeController::login(),
    default => HomeController::index(),
};
