<?php
if($_SERVER["REQUEST_METHOD"]== "POST"){
    $usuario = $_POST["usuario"];
    $password = $_POST["password"];
    $id = $_POST["ID"];
    $correo = $_POST["CORREO"];
    $edad = $_POST["EDAD"];
    $ocupacion = $_POST["OCUPACION"];
    $contacto = $_POST["CONTACTO"];


    /*echo "usuario: $usuario<br>";
    echo "password: $password<br>";
    echo "id: $id<br>";
    echo "correo: $correo<br>";
    echo "edad: $edad<br>";
    echo "ocupacion: $ocupacion<br>";
    echo "contacto: $contacto<br>";*/

    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "programacionwebb";//nombre de nuestra base de datos 

    //crea la conexion 

    $conn = new mysqli($servername,$dbusername,$dbpassword,$dbname);

    //veruficar la conexion 
    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }

    //prepara la conexion 
    $stmt = $conn->prepare("INSERT INTO usuario (usuario, id, correo, edad, ocupacion, contacto, password) VALUES (?, ?, ?, ?, ?, ?, ?)");

    if($stmt == false){
        die ("Error preparing statement: ".$conn->error);
    }
    $stmt->bind_param("sssssss", $usuario, $id, $correo, $edad, $ocupacion, $contacto, $password);

    //ejecuta la sentencia SQL
    if ($stmt->execute()){
        echo "Usuario registrado con éxito.";
    }else{
        echo "Error executing statement: ". $stmt->error;
    }
    $stmt->close();
    $conn->close();
    }
?>
