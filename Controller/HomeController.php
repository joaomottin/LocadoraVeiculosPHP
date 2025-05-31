<?php

require_once __DIR__ . "/../Model/Cliente.php";

class HomeController {

    static function login() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }

        $error = '';

        if ($_SERVER['REQUEST_METHOD'] === "POST") {

            $cliente_formulario = $_POST['usuario'] ?? null;
            $senha_formulario = $_POST['senha'] ?? null;

            if (is_null($cliente_formulario) || is_null($senha_formulario)) {
                $error = "Preencha todos os campos";
            } else {
                $resp = Cliente::fazerLogin($cliente_formulario, $senha_formulario);

                if ($resp) {
                    header("Location: dashboard");
                    exit;
                } else {
                    $error = "Usuário ou senha incorretos";
                }
            }
        }
        include __DIR__ . "/../View/login.php";
    }

    static function index() {
        HomeController::login();
    }
}
