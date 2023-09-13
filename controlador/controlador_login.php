<?php
session_start();
if(!empty($_POST["btningresar"])){
    if (!empty($_POST["usuario"]) and !empty($_POST["password"])) {
        //almacenar/ guardar DATOS 
        $usuario=$_POST["usuario"];
        $password=$_POST["password"];
        //conexion con valores en la tabla
        $sql=$conexion->query(" select * from usuario where usuario='$usuario' and Clave='$password' ");
        if ($datos=$sql->fetch_object()) {
            $_SESSION["id"]=$datos->Id;
            $_SESSION["Nombres"]=$datos->Nombres;
            $_SESSION["apellido"]=$datos->Apellidos;
            header("Location: index.php");
        } else {
            echo "<div class='alert alert-danger'>Acceso Denegado</div>";
        }

    } else {
        echo "Campos vacios";
    }
}

?>
