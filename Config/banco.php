<?php
class Banco {
    private static $conn;

    public static function getConn() {
        if (!self::$conn) {
            $host = "localhost"; 
            $user = "root";      
            $pass = "";          
            $db   = "locadora"; 

            self::$conn = new mysqli($host, $user, $pass, $db);

            if (self::$conn->connect_error) {
                die("Erro de conexão: " . self::$conn->connect_error);
            }
        }

        return self::$conn;
    }
}
