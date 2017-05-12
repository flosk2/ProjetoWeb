<?php
include 'db.php';

$sql = "SELECT nome from medicos;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo $row["nome"]."<br>";
    }
} else {
    echo "0 results";
}



?>