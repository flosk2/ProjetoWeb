<?php
include 'db.php';

$username = $_POST['user'];
$password = $_POST['pass'];


$sql = "SELECT * from usuarios where (usuario = '$username' and senha = '$password');";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo $row["Nome"]."<br>".$row["Endereco"]."<br>";
    
	echo "<script>location.href='http://igorlisboa.esy.es/index.php';</script>"; 
	}
} else {
    echo "<script>location.href='http://igorlisboa.esy.es/cadastro.html';</script>"; 
}



?>