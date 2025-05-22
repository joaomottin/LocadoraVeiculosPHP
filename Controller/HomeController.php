<?php

require_once __DIR__ . "/../Model/Cliente.php";

class HomeController {
    static function login() {
        session_start();
        if ($_SERVER['REQUEST_METHOD'] === "POST") {

            $cliente_formulario = $_POST['cliente'] ?? null;
            $senha_formulario = $_POST['senha'] ?? null;

            if (is_null($cliente_formulario) || is_null($senha_formulario)) {
                echo "Fazer Login...";
            } else {

                $resp = Cliente::fazerLogin($cliente_formulario, $senha_formulario);

                if ($resp) {
                    echo "Sucesso!";
                    header("Location: dashboard");
                } else {
                    echo "Erro X.x";
                }
            }
        }

        include __DIR__ . "/../View/login.php";
    }

    static function index() {
        HomeController::login();
    }


}
