<?php
include "db.php";
session_start();



//$cidade = "Taguatinga";
//$especi = "Nutricionista";

//$cidade = $_POST['a'];
//$especi = $_POST['b'];
$id = $_SESSION['id'];

$sql = "SELECT * from consultas_usuario where usuario = '$id';";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    
	?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8" /> 
<title>Minha Consulta</title>

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
			  <a href=<?php echo $servidor."/index.php"?>><img src="images/logo.png" alt=""/></a>
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
		 <section class="primeiroEspaço">
		 <div class="header-bottom" id="home">
		  <div class="primeiraLista">

	  
<style type="text/css">




table {
font-size:12px;
color:#ffffff;
width:97%;
border-width: 1px;
border-color: #4180c5;
margin: 0 auto;
}



.tftable th 
{font-size:12px;
background-color:#696969;
border-width: 1px;
padding: 8px;
border-style: solid;
border-color: #4180c5;
text-align:center;
border-radius: 5px;
font-size: 120%;

}
table tr {
background-color:#9cbfc1;
font-size: 120%;
font-family: "arial";
font-size:15px

}


table td {
font-size:12px;
border-width: 1px;
padding: 8px;
border-color: #4180c5;
border-radius: 5px;
font-size: 120%;


}
table tr:hover {
background-color:#728889;
cursor:  pointer; 


}
table th:hover {
cursor: default; 



}

input[type=text]{
	margin-bottom: 20px;
	margin-top: 10px;
	width:75%;
	padding: 15px;
	border-radius: 5px;
	border:1px solid #7ac9b7;
}

.painel{
 margin-left: auto;
 margin-right: auto;
 opacity: 0.9;

}

.tabela{
    margin-bottom: 20px;
	margin-top: 10px;
    
	width:100%;
	border-radius:5px;
	border:1px solid #7ac9b7;
	background:#99cfd8;
	color: #00b711;
    text-align: center;
    
    font-family: "arial";
    
     
    
}
.painel .tabela .text{
text-align: center;

}


html,body{



background-size:contain;
background-repeat: no-repeat;

background-size: 100% 100%; 

}
</style>

<div class="painel">
<div class="tabela">
<label class = "text" <center><h2>Consultas Agendadas</h2> </center></label>
<table class="tftable" >
<tr><th>Data</th><th>Horário</th><th>Paciente</th><th>Valor</th><th>Tipo de consulta</th><th>Convénio</th><th>Telefone</th></tr>
<?php
	
	
while($row = $result->fetch_assoc()) {
?>
       
<tr><td><?php echo $row["data"];?></td><td><?php echo $row["hora"];?></td><td><?php echo $row["clinica"];?></td><td><?php echo $row["valor"];?></td><td><?php echo $row["tipo"];?></td><td><?php echo $row["convenio"];?></td><td><?php echo $row["telefone"];?></td></tr>
	
<?php
		
    }
} else {
   header("Location: semConsultasMarcadas.html");
}

?>	

</table>
















<label>  </label>

</div>
</div>







<script type="text/javascript">
function Abrir()
{
location.href="http://igorlisboa.esy.es/listamedicos.html"
}
</script>


<script type="text/javascript">
function inicio()
{
alert("ssss");
window.location="http://igorlisboa.esy.es/index.html";
}
</script>

</section>






	 
	  
<footer class="footer">
  
</footer>




	  
	  

      
</body>
</html>
