<?php
include_once ("Conexion.php");
$objeto = new CConexion();
$conn = $objeto->ConexionBD();

$codigo = "codigo";
$codigo = $_GET["codigo"];

try {

    $conn->beginTransaction();

    $resultado = $conn->exec("DELETE FROM detalle_facturas WHERE codigo= '".$codigo."'");

    if($resultado > 0){
        echo "Datos Eliminados";
        header("Location:http://localhost:8080/Ingreso/index.php");
    }

    $conn->commit ();

} catch (Exception $e) {
    $conn->rollBack();
    echo "Fallo" . $e->getMessage();
}

?>