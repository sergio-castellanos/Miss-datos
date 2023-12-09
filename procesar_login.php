<?php
include "modelo/conexion.php";

$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];
$hashed_password = password_hash($contrasena, PASSWORD_DEFAULT);


$verificacion=mysqli_query($conexion, "select * from usuario where usuario='$usuario' and contrasena ='$hashed_password'");
$fila= mysqli_num_rows($verificacion);

if($fila=1){
    session_start();
    $_SESSION['cliente'] =$usuario;
    header('location:usuario.php');
}else{
    echo"
    <script>
    alert ('no se encontro la cuenta');
    location.href = 'login.php';
    </script>
    
    ";
}
?>