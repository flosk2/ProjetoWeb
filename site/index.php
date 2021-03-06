<?php
session_start();
include 'php/db.php';

require_once 'php/config.php';

?>
<!DOCTYPE HTML>
<html>
<head>
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
		
		
		document.getElementById("usuarioLogado").innerHTML ="<?php echo $_SESSION['usuario']?>";

		
		
		
		
		
		
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
			
			
			<div class="menu">
			  
			  <a class="toggleMenu" href="#"><img src="images/nav_icon.png" alt="" /></a>
				<ul class="nav" id="nav">
				   <li><a id = "usuarioLogado" href=<?php echo $servidor."/php/ConsultasMarcadas.php"?>> Usuário </a></li>
				   <li><a id ="entrar" href=<?php echo $servidor."/login.html"?>>Entrar</a></li>
				    <li><a id = "sair" href=<?php echo $servidor."/php/sair.php"?>> Sair </a></li>
				   
                   <li><a id = "criar" href=<?php echo $servidor."/cadastro.html"?>> Criar conta </a></li>
                   

								   
				   <div class="clear"></div>
			    </ul>
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

<label>Selecione sua cidade </label>		  
<form name="busca" action=<?php echo $servidor."/php/Select.php" ?> method="POST"> 

<select name="a" class="combo1">
  <option value=""</option>
  <?php
  $sql = "SELECT Cidade from medicos group by Cidade order by Cidade asc;";
  $result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
     
	echo "<option value=\"". $row['Cidade'] . "\">". $row['Cidade'] . "</option>";	
	
	}
} else {
    echo "0 results";
}
 
 ?> 
</select>
</div>

<div class="segundaLista">

<label>Selecione a especialidade </label>

<select name="b" class="combo2" >
	<option value=""</option>	
	<?php
  $sql = "SELECT Especializacao from medicos group by Especializacao order by Especializacao asc;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
     
	echo "<option value=\"". $row['Especializacao'] . "\">". $row['Especializacao'] . "</option>";	
	}
} else {
    echo "0 results";
}
  
 ?> 

</select>
</div>



<div class="btPesquisa">

	
<input type="submit" value="Pesquisar" id="submit"></input>

<input type="submit" onclick="javascript document.forms[0].reset();" value="Ver todas" id="submit2" ></input>


</div>




</form>






</script>
</div>
</section>






	 
	  
<footer class="footer">
  
</footer>


	  
	  

      
</body>
</html>
