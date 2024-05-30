<?php
//conexion a la base de datos 
//$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "programacionwebb";//nombre de nuestra base de datos 

//crea la conexion 

$conn = new mysqli("localhost",$dbusername,$dbpassword,$dbname);

//verificar la conexion 
if($conn->connect_error){
    die("Connection failed: ".$conn->connect_error);
}

//consulta para obtener los datos de la tabla "usuario"
$sql ="SELECT * FROM usuario";
$resul = $conn->query($sql);

if($resul->num_rows > 0){
    echo '<table>';
    echo "<tr><th>Usuario</th><th>password</th><th>id</th><th>correo</th><th>edad</th><th>ocupacion</th><th>contacto</th></tr>";
    while ($row = $resul->fetch_assoc()){
        echo "<tr><td>" . $row["usuario"] . "</td><td>" . $row["password"]. "</td><td>" . $row["id"]. "</td><td>" . $row["correo"]. "</td><td>" . $row["edad"] . "</td><td>" . $row["ocupacion"]. "</td><td>" . $row["contacto"]. "</td></tr>";
    }
    echo '</table>';
} else {
    echo "no se encontraron registros";
}

$conn->close();
?>