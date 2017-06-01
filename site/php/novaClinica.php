<?php
include 'db.php';


$Nome = $_POST['clinica'];
$Cidade = $_POST['cidade'];
$Endereco = $_POST['endereco'];
$Fone = $_POST['contato'];
$Especializacao = $_POST['espec'];

$sql = "insert INTO medicos (Nome, Cidade,Endereco,Fone,Especializacao) values ('$Nome','$Cidade','$Endereco','$Fone','$Especializacao')";

if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
?>
<script>
	
	var a = "<?php print $Nome; ?>";
    alert('Clínica ' +a+ ' cadastrado');
	
	
	
	
</script>
<?php
echo "<script>location.href='http://igorlisboa.esy.es/index.php';</script>"; 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();




?>