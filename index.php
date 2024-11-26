<?php
    require 'db.php';

    if(isset($_POST['entrar'])){
        $usuario = $_POST['usuario'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' and clave = '$password'";

        $resultado = mysqli_query($conexion,$sql);

        $numero_registros = mysqli_num_rows($resultado);
        if($numero_registros != 0){
            echo "Inicio de sesión exitoso. Bienvenido, ". $usuario."!";
        }else{
             echo "Credenciales invalidas. Por Favor, Verificar."."<br>";
            echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
        }
       

    }


?>
