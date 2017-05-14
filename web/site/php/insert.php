<?php
include 'db.php';

$user = $_POST['login'];
$senha = $_POST['senha'];

$sql = "insert INTO usuarios (usuario, senha) values ('$user','$senha')";

if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();




?>