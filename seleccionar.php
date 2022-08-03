<?php
include_once ("Conexion.php");
$objeto = new CConexion();
$conn = $objeto->ConexionBD();


$codigo = $_POST["codigo"];
$fecha = $_POST["fecha"];
$cod_usuario = $_POST["cod_usuario"];

try {

    $conn->beginTransaction();

    $resultado = $conn->exec("INSERT INTO facturas(codigo, fecha, cod_usuario) 
    values ('$codigo','$fecha', '$cod_usuario')");

  if($resultado > 0){
    echo "Datos Agregados";
    header("Location:http://localhost:8080/Ingreso/ingreso.php");
}

$conn->commit ();

} catch (Exception $e) {
$conn->rollBack();
echo "Fallo" . $e->getMessage();
}

?>


       



   
        

     
