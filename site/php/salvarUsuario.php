<?php
include 'db.php';

$nome = $_POST['nome'];
$login = $_POST['login'];
$senha = $_POST['senha'];


$sql = "INSERT usuarios (usuario, nome_usuario, senha) VALUES('$login','$nome', '$senha');";

if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	echo "ssdd";
}

$conn->close();


echo "<script>location.href='$servidor/index.php'</script>";

?>

