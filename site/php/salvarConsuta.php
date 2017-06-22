<?php
include 'db.php';
session_start();
$clinica = $_POST['clinica'];
$valor = "250";
$tipo = $_POST['especializao'];
$telefone = $_POST['fone'];
$data = $_POST['data'];
$hora = $_POST['hora'];
$id = $_SESSION['id'];
$formaPag = $_POST['formaPag'];



//$clinica = "fdgdfg";
//$valor = "fdgdfg";
//$tipo = "fdgdfg";
//$telefone = "fdgdfg";

$sql = "INSERT INTO consultas_usuario (usuario,data,hora,clinica,valor,tipo,convenio,telefone)VALUES('$id','$data','$hora','$clinica','$valor','$tipo','$formaPag','$telefone');";

if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	echo "ssdd";
}

$conn->close();

echo "<script>location.href='$servidor/index.php';</script>";


?>

