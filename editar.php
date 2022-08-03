<?php

include_once ("Conexion.php");
$objeto = new CConexion();
$conn = $objeto->ConexionBD();

$codigo = $_POST["codigo"];
$cod_factura = $_POST ["cod_factura"];
$cod_materiales = $_POST ["cod_materiales"];
$cantidad = $_POST["cantidad"];
$impuesto = $_POST["impuesto"];
$precio = $_POST["precio"];
$subtotal = $_POST['subtotal'];


$consulta = $conn ->prepare("UPDATE detalle_facturas SET cod_factura= cod_factura, cod_materiales= cod_materiales,  
cantidad= cantidad, impuesto= impuesto, precio = precio WHERE codigo = codigo;");

$conn->execute([$codigo, $cod_factura, $cod_materiales, $cantidad, $impuesto, $precio]);

if ($conn === true) {
    header("Location:http://localhost:8080/Ingreso/index.php");
} 

else {
    echo "Algo salió mal. Por favor verifica que la tabla exista, así como el codigo de ingreso";
}