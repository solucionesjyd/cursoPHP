<?php
include 'admin/conexion/conexion_web.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
$nombre = htmlentities($_POST['nombre']);
$telefono = htmlentities($_POST['telefono']);
$correo = htmlentities($_POST['correo']);
$mensaje = htmlentities($_POST['mensaje']);
$id_propiedad = htmlentities($_POST['id_propiedad']);
$id = '';

$ins = $con->prepare("INSERT INTO comentario VALUES(?,?,?,?,?,?) ");
$ins->bind_param("isssss",$id, $id_propiedad, $nombre, $telefono, $correo, $mensaje);


if ($ins->execute()) {
header('location:../extend/alerta.php?msj=MENSAJE&c=CARPETA&p=PAGINA&t=TIPO');
}else{
  header('location:../extend/alerta.php?msj=MENSAJE&c=CARPETA&p=PAGINA&t=TIPO');
}

  $ins->close();
  $con->close();
  }else {
    header('location:../extend/alerta.php?msj=Utiliza el formulario&c=CARPETA&p=PAGINA&t=TIPO');
  }


 ?>
