<?php

$servidor='localhost';
$usuario='root';
$contraseña='';
$bd ='jkeventos';

$conexion=mysqli_connect($servidor, $usuario, $contraseña, $bd);

if (mysqli_connect_error()){
        echo '<script language="javascript">';
        echo 'alert("conexion fallida")';
        echo '</script>';
    
} else{ 
        echo '<script language="javascript">';
        echo 'alert("conexion establecida")';
        echo '</script>';
    }
