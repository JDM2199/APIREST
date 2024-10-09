<?php
class Conexion
{
    //Creacion de la conexion a la base de datos
    public static function conectar(){
        $usuario= "root";
        $db= "apires";
        $pass= "";
        $host= "localhost";
        $link=new PDO("mysql:host=".$host.";dbname=".$db,$usuario, $pass);
        $link->exec("set names utf8");
        return $link;
    }
}
?>