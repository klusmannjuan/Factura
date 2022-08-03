<?php
class CConexion {

    public static function ConexionBD(){
        $host ="localhost";
        $dbname ="Plasfacol1";
        $username ="postgres";
        $pasword ="2341224";

        try {
            $conn = new PDO ("pgsql:host= $host; dbname=$dbname", $username, $pasword);
            echo "Se conectó correctamente a la Base de Datos";
        }
        catch(PDOException $exp){
            echo ("No se pudo conectar a la base de datos, $exp");
        }

        return $conn;
    }
}

?> 