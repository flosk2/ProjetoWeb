<?php
require_once 'config.php';

$id = $_POST['id'];



?>
<script>
	
	var id = "<?php print $id; ?>";
                      alert('Agenda indisponível\nId da clínica: '+id);
</script>
<?php
echo "<script>location.href=$servidor."/index.php";</script>"; 


?>