<?php 

    $pagina = $_GET['p'] ?? null;
    var_dump($pagina);
    echo "<br>";

    $url = explode('/', $pagina);
    print_r($url);

    echo "<br>";
    echo "<br>";
    echo "<br>";

    require "Controller/HomeController.php";

    match($url[0]){
        "login" => HomeController::login(),
        "fazer-login" => HomeController::login(),
        default => HomeController::index(), //1. $_GET['p'] vem vazio (porque você não indicou nenhuma rota), então $url[0] é uma string vazia.
                                            //2. O match não encontra nenhum case para "" e cai no default, que executa:
    }



?>