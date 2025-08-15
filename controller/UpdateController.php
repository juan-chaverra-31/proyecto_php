<?php 

// Llamar la conexión
include_once "Conexion.php";
$conexion = new Conexion();
$conexion = $conexion->conectar();

if($conexion){

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $edad = $_POST['edad'];
    $tel = $_POST['telefono'];


    $CONSULTA = "UPDATE `registropersonas` SET 
                                            `Id`='$id',
                                            `Nombre`='$nombre',
                                            `Apellido`='$apellido',
                                            `Edad`=' $edad',
                                            `Correo`=' $correo',
                                            `Telefono`='$tel'
                                             WHERE 1"

$stmt = $conexion->prepare($consulta);
$stmt->bindParam(':id', $id);
$stmt->bindParam(':nombre', $nombre);
$stmt->bindParam(':apellido', $apellido);
$stmt->bindParam(':edad', $edad);
$stmt->bindParam(':correo', $correo);
$stmt->bindParam(':telefono', $tel);
$stmt->execute();

    
echo $id;
}
else{
    header('Location:  ../index.php');
}

?>