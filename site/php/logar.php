<?php
include 'db.php';
require_once 'config.php';
session_start();

$username = $_POST['user'];
$password = $_POST['pass'];


$sql = "SELECT * from usuarios where (usuario = '$username' and senha = '$password');";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    
        //echo $row["usuario"]."<br>".$row["senha"]."<br>";
    
	$_SESSION['usuario'] = $row["nome_usuario"];
    $_SESSION['id'] = $row["id"];
	
	
	?>

<?php
	
	
	echo "<script>location.href='$servidor/index.php';</script>"; 
	
} else {
    
	
	echo "<script>location.href='$servidor/cadastro.html'</script>";
	
	
	 
}



?>