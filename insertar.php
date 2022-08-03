<?php
include_once ("Conexion.php");
$objeto = new CConexion();
$conn = $objeto->ConexionBD();


$codigo = $_POST["codigo"];
$cod_materiales = $_POST["cod_materiales"];
$cantidad = $_POST["cantidad"];
$impuesto = $_POST["impuesto"];
$precio = $_POST ["precio"];

try {

    $conn->beginTransaction();

    $resultado = $conn->exec("INSERT INTO detalle_facturas(codigo, cod_materiales, cantidad, precio, impuesto) 
    values ('$codigo', '$cod_materiales', '$cantidad', '$precio', '$impuesto')");

    if($resultado > 0){
        echo "Datos Agregados";
        header("Location:http://localhost:8080/Ingreso/index.php");
    }

    $conn->commit ();

} catch (Exception $e) {
    $conn->rollBack();
    echo "Fallo" . $e->getMessage();
}

?>