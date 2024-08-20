<html lang="es-ES"><head>
    <meta charset="utf-8">
    <title>JKEventos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Linea is Creative Website Template">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/jkeventos.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css" type="text/css">

</head>    
</html>
<?php

include ('conexion.php');
if (isset($_POST['enviar'])){
    $nombre=$_POST['name'];
    $email=$_POST['email'];
    $telefono=$_POST['phone'];
    $direccion=$_POST['address'];
    $comentario=$_POST['message'];
    
    $insertar="INSERT INTO usuario(name, email, phone, address, message) "
            . "values ('$nombre','$email','$telefono','$direccion','$comentario')";
    
    $resultado= mysqli_query($conexion, $insertar);
    
    if (!$resultado){
        echo '<script language="javascript">';
        echo 'alert("Los datos no se registraron")';
        echo '</script>';
    }else {
        echo '<script language="javascript">';
        echo 'alert("Los datos se registraron correctamente")';
        echo '</script>';
    }
    
}
