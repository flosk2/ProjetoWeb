<?php
include "db.php";





$id = $_POST['id'];


$sql = "SELECT * from medicos where id = $id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
  
	?>




<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Consulta</title>
</head>
<body>

<style>

body{
text-align: center;

}

.formulario{
    margin-bottom: 20px;
	margin-top: 10px;
    width:580px;
    border-radius:5px;
	border:1px solid #7ac9b7;
	background:#cce5ff;
	color: #00b711;
    text-align: center;
    font-family: "arial";
    
    margin-left: auto;

    margin-right: auto ;
    }
    
    
  .info{
   
   
    
    margin-bottom: 20px;
	margin-top: 10px;
   width:580px;
    border-radius:5px;
	border:1px solid #7ac9b7;
	background:#cce5ff;
	color: #00b711;
    text-align: center;
    font-family: "arial";
    margin-left: auto;

    margin-right: auto ;
	
   }
    
input[type=date]{
	margin-bottom: 20px;
	margin-top: 10px;
	width:60%;
	padding: 15px;
	border-radius: 5px;
	border:1px solid #7ac9b7;
    font-size: 20px;
     height:60px;
    cursor: text;
}

input[type=submit]:hover {
background-color: #48c456;
width:38%;
height:63px;

}

input[type=time]{
	margin-bottom: 20px;
	margin-top: 10px;
	width:60%;
	padding: 15px;
	border-radius: 5px;
	border:1px solid #7ac9b7;
    font-size: 20px;
    cursor: text;
    height:60px;
    
}


input[type=submit]{
	margin-bottom: 20px;
	margin-top: 10px;
	width:35%;
	padding: 15px;
	border-radius: 5px;
	border:1px solid #7ac9b7;
    font-size: 24px;
    color:#ffffff;
    background-color: #4CAF50; 
    cursor: pointer;
    
}
input[type=text]{
	margin-bottom: 20px;
	margin-top: 10px;
	width:75%;
	padding: 15px;
	border-radius: 5px;
	border:1px solid #7ac9b7;
    font-size: 24px;
    height:10px;
    cursor: not-allowed;
    
}

select{
    margin-bottom: 20px;
	margin-top: 10px;
	width:80%;
	padding: 15px;
	border-radius: 5px;
	border:1px solid #7ac9b7;
    font-size: 20px;
    text-align: center;
    cursor: pointer;



}



label{
font-size: 20px;
color: #444444;
font-family: "arial black";
text-shadow: #fff 1px 1px 2px;


}
.header{
	width: 100%;
	background: #056ce0;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
	background-position: center;
	background-size: 100% 100%;
}
.header-top{
	background: #056ce0;
	padding: 3% 0;
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
<form action="<?php echo $servidor."/php/salvarConsuta.php"?>" method="post">
<label for="email">Agende sua consulta<br/>
</div>
<div class = "info">

<label for="email">Data e hora da consulta<br/>
<input type="date" name="data">
<input type="time" name="hora"><br>

<select name="formaPag">
    <option>Selecione
    <option>A vista
    <option>Plano
    <option>Convenio
</select>
<br>
<input type="submit" name="btAgendar" value="Agendar"><br>


</div>
<?php
	
	
	while($row = $result->fetch_assoc()) {
       // echo $row["Nome"]."<br>".$row["Endereco"]."<br>";
?>


<div class = "formulario">
<label for="email">Clinica<br/>
<input type="text"  name="clinica" value="<?php echo $row["Nome"];?>">
<label for="email"><br>Endereco<br/>
<input type="text"  name="endereco" value="<?php echo $row["Endereco"];?>">
<label for="email"><br>Consulta<br/>
<input type="text"  name="especializao" value="<?php echo $row["Especializacao"];?>">
<label for="email"><br>Cidade<br/>
<input type="text"  name="cidade" value="<?php echo $row["Cidade"];?>">
<label for="email"><br>Telefone<br/>
<input type="text"  name="fone" value="<?php echo $row["Fone"];?>">
</div>
</form>








<?php
		
		
    }
} else {
   header("Location: semResultados.html");
}



?>

</body>
</html>