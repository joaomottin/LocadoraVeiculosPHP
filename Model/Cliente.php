<?php

require_once __DIR__ . "/../Config/Banco.php";

class Cliente {
    
    public static function fazerLogin($usu, $sen){
        $conn = Banco::getConn();

        $usu_esc = $conn->real_escape_string($usu);

        $q = "SELECT * FROM clientes WHERE cliente='$usu_esc'";
        $resp = $conn->query($q);

        if ($resp->num_rows <= 0) {
            return false;
        } else {
            $obj_cliente_resposta = $resp->fetch_object();

            if ($sen === $obj_cliente_resposta->senha) {
                if (session_status() === PHP_SESSION_NONE) {
                    session_start();
                }

                $_SESSION['cliente'] = $obj_cliente_resposta->cliente;
                $_SESSION['id-cliente'] = $obj_cliente_resposta->id;
                return true;
            } else {
                return false; // senha errada
            }
        }
    }
}
