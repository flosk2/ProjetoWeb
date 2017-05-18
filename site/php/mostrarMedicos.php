<?php
include 'db.php';

$cidade = $_POST['a'];
$especi = $_POST['b'];


$sql = "SELECT Nome,Endereco from medicos where (Cidade = '$cidade' and Especializacao = '$especi');";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["Nome"]."<br>".$row["Endereco"]."<br>";
    }
} else {
    echo "0 results";
}

?>