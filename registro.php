<?php

    require 'db.php';

    if(isset($_POST['registro'])){

        $nombre = $_POST['nombres'];
        $apellido = $_POST['apellidos'];
        $usuario = $_POST['usuario'];
        $correo = $_POST['correo'];
        $password = $_POST['password'];


        $sql = "INSERT INTO usuarios (id, nombres, apellidos, usuario, correo, clave)
        VALUES (null, '$nombre','$apellido','$usuario', '$correo', '$password') ";

        $resultado = mysqli_query($conexion,$sql);

        if($resultado){
            echo "Se insertaron los datos correctamente";
        } else {
            echo "No se puede insertar la información" . "<br>";
            echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
        }


    }

?>