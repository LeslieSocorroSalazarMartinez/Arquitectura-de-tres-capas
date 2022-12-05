<?php 

class Conectar {

    public static function conexion(){

        $conexion = new mysqli("192.168.10.220", "alex", "1234", "mvc");
        return $conexion;
    }
}
?>