<?php
//Conexão hospedagem local
$servername = "localhost";
$username = "root";
$password = "";

//conexão hospedagem externa
//$servername = "localhost";
//$username = "root";
//$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Falha na conexão: <br>" . $conn->connect_error);
}
echo "Conecatado com sucesso !<br>";
?>