<?php
include "db.php";




//$cidade = "Taguatinga";
//$especi = "Nutricionista";

$cidade = $_POST['a'];
$especi = $_POST['b'];


$sql = "SELECT * from medicos where (Cidade like '%$cidade%' and Especializacao like '%$especi%' ) GROUP BY Nome;";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    
	?>
	
	<!DOCTYPE HTML>
<html>
<head>


<style>
input[type=submit]
{
	margin-bottom: 20px;
	width:50%;
	padding: 15px;
	border-radius:5px;
	border:1px solid #7ac9b7;
	background-color: #4180C5;
	color: aliceblue;
	font-size:15px;
	cursor:pointer;
}

.container .bt_agenda{
	text-align: center;
}


</style>

<meta charset="utf-8" /> 
<title>Minha Consulta</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,800' rel='stylesheet' type='text/css'>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery-1.9.1.min.js"></script>
<!--hover-effect-->
<script src="js/hover_pack.js"></script>
<script type="text/javascript" src="js/jquery.mixitup.min.js"></script>
	<script type="text/javascript">
	$(function () {
		
		var filterList = {
		
			init: function () {
			
				// MixItUp plugin
				// http://mixitup.io
				$('#portfoliolist').mixitup({
					targetSelector: '.portfolio',
					filterSelector: '.filter',
					effects: ['fade'],
					easing: 'snap',
					// call the hover effect
					onMixEnd: filterList.hoverEffect()
				});				
			
			},
			
			hoverEffect: function () {
			
				// Simple parallax effect
				$('#portfoliolist .portfolio').hover(
					function () {
						$(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
						$(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');				
					},
					function () {
						$(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
						$(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');								
					}		
				);				
			
			}

		};
		
		// Run the show!
		filterList.init();
		
		
		
		
	});	
	</script>
</head>
<body>
	<!--start header-->
	<div class="header">
	  <div class="header-top">
		<div class="container">
			<div class="logo">
			  <a href="http://igorlisboa.esy.es/index.php"><img src="images/logo.png" alt=""/></a>
			</div>
										
	        <div class="clear"></div>
	        <script type="text/javascript" src="js/responsive-nav.js"></script>
			<script type="text/javascript" src="js/move-top.js"></script>
			<script type="text/javascript" src="js/easing.js"></script>
			   <script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
						});
					});
				</script>
		   </div>
		 </div>
		 </div>
	
	
	<?php
	
	
	while($row = $result->fetch_assoc()) {
       // echo $row["Nome"]."<br>".$row["Endereco"]."<br>";
?>






<div class="container">
 
<form action="http://igorlisboa.esy.es/php/abrirAgenda.php" method="POST">
 
  <ul class="list-group">
    
	
	
	
	<li class="list-group-item"><strong><center><h1><font color="#4180c5"><?php echo $row["Nome"]; ?></font></h1></center></strong></li>
	<li class="list-group-item"><strong>Cidade: </strong><?php echo $row["Cidade"];?></li>
    <li class="list-group-item"><strong>Endereco: </strong><?php echo $row["Endereco"];?></li>
    <li class="list-group-item"><strong>Telefone: </strong><?php echo $row["Fone"];?></li>
	<li class="list-group-item"><strong>Especialização: </strong><?php echo $row["Especializacao"];?></li>
	
	<input type="hidden" name="id" value="<?php echo $row["id"];?>"  id="btEnviar"  />
	<div class = "bt_agenda">
	<li class="list-group-item"><input type="submit" name="bt" value="Abrir Agenda"    /></li>
 </div>
  
  </ul>
  
  </form>
</div>
<?php
		
		
    }
} else {
   header("Location: semResultados.html");
}



?>
</body>
</html>