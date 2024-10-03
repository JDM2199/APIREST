<?php 

class Modelocliente{
    public static function index($tabla){
        $stmt=Conexion::conectar()->prepare("select * from $tabla");
        $stmt->execute();
 
        return $stmt->fetchAll();
        $stmt->close();
        $stmt->null;
    }
}

?>