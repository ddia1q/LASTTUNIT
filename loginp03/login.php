<?php
 $servername = "localhost";
 $dbusername = "root";
 $dbpassword = "";
 $dbname = "programacionwebb";//nombre de nuestra base de datos 

 //crea la conexion 

 $conn = new mysqli($servername,$dbusername,$dbpassword,$dbname);

 //verificar la conexion 
 if($conn->connect_error){
     die("Connection failed: ".$conn->connect_error);
 }

//recoger los datos del formulario 
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];


    //crear la consulta SQL 
    $sql = "SELECT * FROM usuario WHERE usuario = '$usuario' AND password = '$password'";

    //ejecutar consulta 
    $resul = $conn->query($sql);

    //verificar si el usuario existe 
    if($resul->num_rows > 0){
        include ('view/logger.HTML');//response
        //echo "¡HAS INGRESADO CON EXITO!";
    } else {
        include ('view/errorlogin.HTML');
        //echo "usuario o contrasela incorrectos";
    }

    $conn->close();
    ?>

