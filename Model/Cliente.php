<?php

require_once __DIR__ . "/../Config/Banco.php";

class Cliente {
    
   public static function fazerLogin($usu, $sen){
        
        $q = "SELECT * FROM clientes WHERE cliente='$cli'";
        $resp = Banco::getConn()->query($q);

        // var_dump($resp);
        if($resp->num_rows <= 0){
            return false; // "cliente não encontrado...";
        }else{
            
            $obj_cliente_resposta = $resp->fetch_object();
            // var_dump($obj_cliente_resposta);

            if($sen === $obj_cliente_resposta->senha){
                $_SESSION['cliente'] = $obj_cliente_resposta->cliente;
                $_SESSION['id-cliente'] = $obj_cliente_resposta->id;
                return true; // echo "Sucesso!";
            }else{
                return false; // echo "Senha errada >.<";
            }

        }
        
    }
    
}
