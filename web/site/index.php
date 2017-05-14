<?php
include 'php/db.php';
?>
<!DOCTYPE HTML>
<html>
<head>
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
			  <a href="index.html"><img src="images/logo.png" alt=""/></a>
			</div>
			<div class="menu">
			  <a class="toggleMenu" href="#"><img src="images/nav_icon.png" alt="" /></a>
				<ul class="nav" id="nav">
				  
				   <li><a href="#contact" class="scroll">Cadastre-se</a></li>								
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
		 <div class="header-bottom" id="home">
		  <div class="primeiraLista">
<h3>Selecione sua cidade </h3>		  
<form action="php/mostrarMedicos.php" method="POST">

<select name="a" style="width: 300px;">
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
<h3>Selecione a especialidade do médico </h3>

<select name="b" style="width: 300px;">
		
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

<div class="btPesquisa">

<input type="submit" value="Pesquisar" id="Selecionar" name="Pediatra" formtarget="_self"></input>

</div>



</form>
</div>
<script type="text/javascript">
function Abrir()
{
location.href=" listamedicos.html"
}
</script>


<script type="text/javascript">
function inicio()
{
alert("ssss");
window.location="index.html";
}
</script>









<div class="LISTAR">
<form action="php/listar.php" method="POST">
<input type="submit" value="Mostar" id="Selecionar" name="mostrar" formtarget="_self"></input>
</form>
</div>


<div class="telaLogin">
<form method="POST" action="php/insert.php">

<label>Login:</label><input type="text"  name="login" id="login"><br>
<label>Senha:</label><input type="password" name="senha" id="senha"><br>
<input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar" src="images/botao-enviar.png">
</form>
		 </div>
	</div>
	<!--end header-->
	<!--start services-->
	<div class="services" id="services">
		<div class="container">
			<div class="row">
				<h3 class="m_3">Como agendar sua consulta</h3>
				<div class="m_4"><span class="bottom_line"> </span></div>
				<div class="col-md-3 top_grid">
					<i class="coffee"> </i>
					<h3 class="m_1">Primeiro</h3>
					<h4 class="m_2">Primeiro cadastre-se ou efetue login.</h4>
				</div>
				<div class="col-md-3 top_grid">
					<i class="instant"> </i>
					<h3 class="m_1">Segundo</h3>
					<h4 class="m_2">Selecione a cidade desejada e a especialidade do médico.</h4>
				</div>
				<div class="col-md-3 top_grid">
					<i class="advisor"> </i>
					<h3 class="m_1">Terceiro</h3>
					<h4 class="m_2">Escolha o médico da lista que mais lhe agrade.</h4>
				</div>
				<div class="col-md-3 top_grid1">
					<i class="frame"> </i>
					<h3 class="m_1">Quarto</h3>
					<h4 class="m_2">Selecione suas opções de horários,confirme se está tudo correto e pronto sua consulta está agendada.</h4>
				</div>
			</div>
		</div>
	 </div>
	 <!--end services-->
	 <!--start portfolio-->
	 
	  
	  
	  
	  

      <script type="text/javascript">
			$(document).ready(function() {
			
				var defaults = {
		  			containerID: 'toTop', // fading element id
					containerHoverID: 'toTopHover', // fading element hover id
					scrollSpeed: 1200,
					easingType: 'linear' 
		 		};
				
				
				$().UItoTop({ easingType: 'easeOutQuart' });
				
			});
		</script>
        <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
</body>
</html>
