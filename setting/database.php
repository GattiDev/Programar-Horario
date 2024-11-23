<?php
    require_once "url.php";
    class Conexion{
        public static function conect(){
            //--> LOCAL
            $mysql = new mysqli(DB_HOST, DB_L_USER, DB_L_PASSWORD, DB_L_NAME);
            $mysql->set_charset(DB_CHARSET);

            if(mysqli_connect_errno()){
                echo "Error en la conexión: ".mysqli_connect_errno();
            }
            return $mysql;
        }
    }
?>