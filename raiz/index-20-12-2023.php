<?

require '../conect/conect.php';
include '../css_menus/modal_de_aviso.css';

ini_set('default_charset','UTF8_general_mysql500_ci');


?>
<?
header("Expires: Tue, 01 Jul 2001 06:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");	
?>
<script language='JavaScript' type='text/javascript'>
caches.open('nome-do-cache')
  .then(cache => {
    cache.delete('chave-do-arquivo');
  });
</script>
<?
ini_set('default_charset','UTF8_general_mysql500_ci');
?>

<?

$sql = "SELECT * FROM cad_empresa limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {

$razaosocial = $linha[1];
$nfantasia = $linha[2];
$cnpj = $linha[3];
$endereco = $linha[5];
$numero = $linha[6];
$bairro = $linha[7];
$cep = $linha[9];
$cidade = $linha[10];
$estado = $linha[11];

}

?>


<?

$sql = "select * from publicidade order by posicao asc limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {



$codigo = $linha[0];
	
$titulo_index = $linha[3];

$texto1_da_img1 = $linha[4];
	$texto2_da_img1 = $linha[5];
		$tamanho_texto1_img1 = $linha[6];
		$tamanho_texto2_img1 = $linha[40];
	
$texto1_da_img2 = $linha[7];
	$texto2_da_img2 = $linha[8];
		$tamanho_texto_img2 = $linha[9];
	
$texto1_da_img3 = $linha[10];
	$texto2_da_img3 = $linha[11];
		$tamanho_texto_img3 = $linha[12];
	
$texto1_da_img4 = $linha[13];
	$texto2_da_img4 = $linha[14];
		$tamanho_texto_img4 = $linha[15];
	
$texto1_da_img5 = $linha[16];
	$texto2_da_img5 = $linha[17];
		$tamanho_texto_img5 = $linha[18];
	
$texto1_da_img6 = $linha[19];
	$texto2_da_img6 = $linha[20];
		$tamanho_texto_img6 = $linha[21];
	
$imagem7 = $linha[38];
	$texto1_da_img7 = $linha[41];
		$texto2_da_img7 = $linha[42];
	
$imagem8 = $linha[39];
	$texto1_da_img8 = $linha[43];
		$texto2_da_img8 = $linha[44];

$quemsomos = $linha[22];
	
	$titulo1_servico = $linha[23];
	$texto1_servico = $linha[24];
	
	$titulo2_servico = $linha[25];
	$texto2_servico = $linha[26];
	
	$titulo3_servico = $linha[27];
	$texto3_servico = $linha[28];
	
	$titulo4_servico = $linha[29];
	$texto4_servico = $linha[30];
	
	$mensagem = $linha[31];
	
	$solicite_orcamento = $linha[32];
	

}

?>
<?

$sql = "select * from menu_index order by codigo asc limit 1";
$res = mysql_query($sql);
while($linha=mysql_fetch_row($res)) {



$item1 = $linha[1];
$item2 = $linha[2];
$item3 = $linha[3];
$item4 = $linha[4];
$item5 = $linha[5];
$item6 = $linha[6];
}

?>

<tr align="center">




<html lang="pt-br">

	<head>
		

		<meta charset="utf-8">

		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<meta name="description" content="Leal soluções financeiras">

		<meta name="keywords" content="crédito consignado, aposentados e pensionistas, financiamento, refinanciamento, cartão de crédito, crédito pessoal, Bradesco, Daycoval, Itaú, Pan, Bonsucesso, BGN, Safra, BV financeira, OMNI financeira" />

		<meta name="Robots" content="all" />

		<meta name="rating" content="General" />

		<meta name="revisit_after" content="05 days" />

		<meta name="objecttype" content="Homepage" />

		<meta content="Leal - 2016" http-equiv="copyright" />

		<meta name="author" content="">

		<title><? echo "$titulo_index"; ?></title>

		<!-- Bootstrap Core CSS -->

		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- Custom Fonts -->

		<!--link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"-->

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">



		<!-- Custom CSS -->

		<link rel="stylesheet" href="css/patros.css" >

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

		<!--[if lt IE 9]>

			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>

			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

			<![endif]-->

	</head>

<!--<script src="https://wbot.chat/index.js" token="f5996299c3ca3b08a3f431f0b519a30e"></script>-->

	<body data-spy="scroll">

   

    <div id="meumodal" class="modal" role="dialog">

<a href="#fechar" title="Fechar" class="fechar">Fechar</a>

<br>

    <br>

    <br>

    <br>

    <br>

    <br>

    <br>

    <br>

    <br>

    <br>

    <br>

    <br>

    <br>
		
	 <br>

    <br>

    <br>

    



<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">



<link rel="stylesheet" type="text/css" href="../css_menus/estilo.css"/>

<font-size>

<strong></strong>

</font>

  </tr>

</table>

</form>

</div>



		<!-- Navigation -->

		<nav class="navbar navbar-inverse navbar-fixed-top">

			<div class="container">

				<div class="navbar-header">

					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">

						<span class="sr-only">Toggle navigation</span>

						<span class="icon-bar"></span>

						<span class="icon-bar"></span>

						<span class="icon-bar"></span>

					</button>

					<a class="navbar-brand" href="index.php#aviso_de_filiais"><img width="180" height="90" src="images/logo.jpg" alt="company logo" /></a>

				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

					<ul class="nav navbar-nav navbar-right custom-menu">

						<li class="active"><a href="#home"><? echo "$item1"; ?></a></li>

						<li><a href="#about"><? echo "$item2"; ?></a></li>

						<li><a href="#services"><? echo "$item3"; ?></a></li>

						<li><a href="#contact"><? echo "$item4"; ?></a></li>
						
						<li><a href="../login_operador.php?instrucao=funcionario"><? echo "$item5"; ?></a></li>

						<li><a href="cadastra_parceiros/inserir_operador.php" target="_blank"><? echo "$item6"; ?></a></li>

						<!--<li><a href="single-post.html">Single</a></li>-->

					</ul>

				</div>

			</div>

		</nav>



		<!-- Header Carousel -->

	<header id="home" class="carousel slide">

			<ul class="cb-slideshow">

				<li><span>image1</span>

					<div class="container">

						<div class="row">

							<div class="col-lg-12">

								<div class="text-center"><h3><? echo " $texto1_da_img1 "; ?></h3></div>

							</div>

						</div>

						<h4><? echo "$texto2_da_img1"; ?></h4>

					</div>

				</li>				

				<li><span>image2</span>

					<div class="container">

						<div class="row">

							<div class="col-lg-12">

								<div class="text-center"><h3><? echo "$texto1_da_img2"; ?></h3></div>

							</div>

						</div>

						<h4><? echo "$texto2_da_img2"; ?></h4>

					</div>

				</li>

				<li><span>image3</span>

					<div class="container">

						<div class="row">

							<div class="col-lg-12">

								<div class="text-center"><h3><? echo "$texto1_da_img3"; ?></h3></div>

							</div>

						</div>

						<h4><? echo "$texto2_da_img3"; ?></h4>

					</div>

				</li>				

				<li><span>Image 04</span>

					<div class="container">

						<div class="row">

							<div class="col-lg-12">

								<div class="text-center"><h3><? echo "$texto1_da_img4"; ?></h3></div>

							</div>

						</div>

						<h4><? echo "$texto2_da_img4"; ?></h4>

					</div>

				</li>

				<li><span>Image 05</span>

					<div class="container">

						<div class="row">

							<div class="col-lg-12">

								<div class="text-center"><h3><? echo "$texto1_da_img5"; ?></h3></div>

							</div>

						</div>

						<h4><? echo "$texto2_da_img5"; ?></h4>

					</div>

				</li>

				<li><span>Image 06</span>

					<div class="container">

						<div class="row">

							<div class="col-lg-12">

								<div class="text-center"><h3><? echo "$texto1_da_img6"; ?></h3></div>

							</div>

						</div>

						<h4><? echo "$texto2_da_img6"; ?></h4>

					</div>

				</li>-->

			</ul>

			<div class="intro-scroller">

				<a class="inner-link" href="#about">

					<div class="mouse-icon" style="opacity: 1;">

						<div class="wheel"></div>

					</div>

				</a> 

			</div>          

		</header>
	<br><br><br>
<br>
<br><br>
		<!-- Page Content -->

		<section id="about">

			<div class="container">

				<div class="row">

					<div class="col-md-offset-1 col-md-10">

						<div class="text-center">
<br><br><br>
<br><br><br><br><br><br>
<br>
						  <h2>Quem somos</h2>
						  <img class="img-responsive displayed" src="images/short.png" alt="Company about"/>

							<div class="row">

								<div class="col-md-12">

									<p>
										
										<? echo "$quemsomos"; ?>

									

									</p>

								</div>

						  </div>

							<div class="row">

								<div class="col-md-12">

									<img width="340" height="280" src="images/<? echo "$imagem7"; ?>">

									<img width="340" height="280" src="images/<? echo "$imagem8"; ?>"><br>
									
			<table width="50%" align="center">
									<tr width="100%">
									<td width="30%" align="center"><? echo "$texto1_da_img7 "; ?> </td>
										<td width="30%" align="center"></td>
									<td width="30%" align="center" valign="top"><? echo "$texto1_da_img8 "; ?> </td>
									</tr>
									<tr width="100%">
										<td width="30%" align="center" valign="top"><? echo "$texto2_da_img7 "; ?></td>
										<td width="30%" align="center"></td>
									<td width="30%" align="center" valign="top"><? echo "$texto2_da_img8 "; ?></td>
				</tr>
								  </table>

								</div>

							</div>

						</div>

					</div>

				</div>

			</div>

		</section>

									

		<section id="services">

			<div class="orangeback">

				<div class="container">

					<div class="text-center homeport2"><h2><? echo "Serviços"; ?></h2></div>

					<div class="row">

						<div class="col-md-12 homeservices1">

							<div class="col-md-3 portfolio-item">

								<div class="text-center">

									<!--<a href="javascript:void(0);">

									<span class="fa-stack fa-lg">

									  <i class="fa fa-circle fa-stack-2x"></i>

									  <i class="fa fa-line-chart fa-stack-1x"></i>

									</span>

									</a>-->

									<a href="#contact"><img width="140" height="150" src="images/retirees.png"></a>

									<h3><a href="#contact"><? echo "$titulo1_servico"; ?></a></h3>

									<p><? echo "$texto1_servico"; ?></p>									

								</div>								

							</div>

							<div class="col-md-3 portfolio-item">

								<div class="text-center">

									<!--<a href="javascript:void(0);">

									<span class="fa-stack fa-lg">

									  <i class="fa fa-circle fa-stack-2x"></i>

									  <i class="fa fa-users fa-stack-1x"></i>

									</span>

									</a>-->

									<a href="#contact"><img width="140" height="150" src="images/personal.png"></a>

									<h3><a href="#contact"><? echo "$titulo2_servico"; ?></a></h3>

									<p><? echo "$texto2_servico"; ?></p>

								</div>

							</div>

							<div class="col-md-3 portfolio-item">

								<div class="text-center">

									<!--<a href="javascript:void(0);">

									<span class="fa-stack fa-lg">

									  <i class="fa fa-circle fa-stack-2x"></i>

									  <i class="fa fa-code fa-stack-1x"></i>

									</span>

									</a>-->
<br><br>
									<a href="#contact"><img width="140" height="90" src="images/car.png"></a>
<br><br>
									<h3><a href="#contact"><? echo "$titulo3_servico"; ?></a></h3>

									<p><? echo "$texto3_servico"; ?></p>
								</div>

							</div>

							<div class="col-md-3 portfolio-item">

								<div class="text-center">

									<!--<a href="javascript:void(0);">

									<span class="fa-stack fa-lg">

									  <i class="fa fa-circle fa-stack-2x"></i>

									  <i class="fa fa-cogs fa-stack-1x"></i>

									</span>

									</a>-->

									<a href="#contact"><img width="140" height="150" src="images/card.png"></a>

									<h3><a href="#contact"><? echo "$titulo4_servico"; ?></a></h3>

									<p><? echo "$texto4_servico"; ?></p>

								</div>								

							</div>				
							
							
							
							

						</div>						

					</div>					

				</div>

			</div>

		</section>

<br><br><br><br><br><br><br><br><br><br>

							<h2><? echo "$mensagem"; ?></h2>
<br><br><br><br>
							<img class="img-responsive displayed" src="images/short.png" alt="Company about"/>

							

									<p><center>

									Elisandra Gimenes M. Leal<br>

									<? echo"Proprietaria"; ?>

									</center></p>


					

					

			

	



		<!--<section id="bloghome">

			<div class="container">

				<div class="text-center"><h2>Latest Blog Posts</h2>

					<img class="img-responsive displayed" src="images/short.png" alt="about">

				</div>

				<div class="row">

					<div class="col-md-12 homeport1">

						<div class="col-md-4 col-sm-12 col-xs-12 portfolio-item">

							<figure class="effect-oscar">

								<img src="images/blog1.jpg" alt="img09" class="img-responsive" />

								<figcaption>

									<h2>Blog Post Long Title</h2>

									<a href="#">View more</a>

								</figcaption>           

							</figure>

							<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet.</p>

							<div class="text-center"><a class="btn btn-primary btn-noborder-radius hvr-bounce-to-bottom">Read More</a></div>

						</div>

						<div class="col-md-4 col-sm-12 col-xs-12 portfolio-item">

							<figure class="effect-oscar">

								<img src="images/blog2.jpg" alt="img09" class="img-responsive"/>

								<figcaption>

									<h2>Blog Post Long Title</h2>

									<a href="#">View more</a>

								</figcaption>           

							</figure>

							<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet.</p>

							<div class="text-center"><a class="btn btn-primary btn-noborder-radius hvr-bounce-to-bottom">Read More</a></div>

						</div>

						<div class="col-md-4 col-sm-12 col-xs-12 portfolio-item">

							<figure class="effect-oscar">

								<img src="images/blog3.jpg" alt="img09" class="img-responsive"/>

								<figcaption>

									<h2>Blog Post Long Title</h2>

									<a href="#">View more</a>

								</figcaption>           

							</figure>

							<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet.</p>

							<div class="text-center"><a class="btn btn-primary btn-noborder-radius hvr-bounce-to-bottom">Read More</a></div>

						</div>

					</div>

				</div>

			</div>

		</section>-->



		<!--<section id="meet-team">

			<div class="container">

				<div class="text-center">

				<h2>Team Members</h2>

				<img class="img-responsive displayed" src="images/short.png" alt="about">

				</div>

				<div class="row teamspace">

					<div class="col-xs-12 col-sm-6 col-md-3">

						<div class="team-member">

							<div class="team-img">

								<img class="img-responsive" src="images/person1.jpg" alt="">

							</div>

							<div class="team-info">

								<h3>Christian Peri</h3>

								<span>Co-Founder</span>

							</div>

							<p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>

							<ul class="social-icons">

								<li><a href="#"><i class="fa fa-facebook"></i></a></li>

								<li><a href="#"><i class="fa fa-twitter"></i></a></li>

								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>

								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>

							</ul>

						</div>

					</div>

					<div class="col-xs-12 col-sm-6 col-md-3">

						<div class="team-member">

							<div class="team-img">

								<img class="img-responsive" src="images/person1.jpg" alt="">

							</div>

							<div class="team-info">

								<h3>Jane Manz</h3>

								<span>Project Manager</span>

							</div>

							<p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>

							<ul class="social-icons">

								<li><a href="#"><i class="fa fa-facebook"></i></a></li>

								<li><a href="#"><i class="fa fa-twitter"></i></a></li>

								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>

								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>

							</ul>

						</div>

					</div>

					<div class="col-xs-12 col-sm-6 col-md-3">

						<div class="team-member">

							<div class="team-img">

								<img class="img-responsive" src="images/person1.jpg" alt="">

							</div>

							<div class="team-info">

								<h3>Paulinho Rubos</h3>

								<span>Designer</span>

							</div>

							<p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>

							<ul class="social-icons">

								<li><a href="#"><i class="fa fa-facebook"></i></a></li>

								<li><a href="#"><i class="fa fa-twitter"></i></a></li>

								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>

								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>

							</ul>

						</div>

					</div>

					<div class="col-xs-12 col-sm-6 col-md-3">

						<div class="team-member">

							<div class="team-img">

								<img class="img-responsive" src="images/person1.jpg" alt="">

							</div>

							<div class="team-info">

								<h3>Loreto Andas</h3>

								<span>Developer</span>

							</div>

							<p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>

							<ul class="social-icons">

								<li><a href="#"><i class="fa fa-facebook"></i></a></li>

								<li><a href="#"><i class="fa fa-twitter"></i></a></li>

								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>

								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>

							</ul>

						</div>

					</div>

				</div>

			</div>

		</section>-->





		<!--<section id="portfolio1">

		<div class="container">

		<div class="row">

			<div class="text-center">

			<h2>Portfolio</h2>

			<img class="img-responsive displayed" src="images/short.png" alt="about">

			</div>



			<ul class="filter nav nav-pills">

			  <li data-value="all" ><a class="active" href="#">All</a></li>

			  <li data-value="development"><a href="#">Development</a></li>

			  <li data-value="webdesign"><a href="#">Web Design</a></li>

			  <li data-value="mobileapps"><a href="#">Mobile Apps</a></li>

			</ul>

 

			<ul class="port2">

			  <li data-type="development" data-id="id-1" class="port3">

				<a href="#" id="development1"><img src="images/port1.jpg" alt=""></a></li>

			  <li data-type="webdesign" data-id="id-2" class="port3">

				<a href="#" id="webdesign1"><img src="images/port2.jpg" alt=""></a>

			  </li>

			  <li data-type="mobileapps" data-id="id-3" class="port3">

				<a href="#" id="mobileapps1"><img src="images/port3.jpg" alt=""></a>

			  </li>

				<li data-type="development" data-id="id-4" class="port3">

				<a href="#" id="development2"><img src="images/port4.jpg" alt=""></a>

			  </li>

			  <li data-type="webdesign" data-id="id-5" class="port3">

				<a href="#" id="webdesign2"><img src="images/port5.jpg" alt=""></a>

			  </li>

			  <li data-type="mobileapps" data-id="id-6" class="port3">

				<a href="#" id="mobileapps2"><img src="images/port6.jpg" alt=""></a>

			  </li>

			</ul>

		  </div> 

		</div>

		</section>-->



		<div id="location">

			<div class="row prodmap">

				<div id="map-canvas-holder" class="map_holder" style="height: 400px;"></div>

			</div>

		</div>

<br><br><br>
<br><br><br>

		<section id="contact">

			<div class="container"> 

				<div class="row">

					<div class="col-md-12">

						<div class="col-lg-12">

							<div class="text-center color-elements">

							<h2><? echo "$solicite_orcamento"; ?></h2>

							</div>

						</div>

						<div class="col-lg-6 col-md-8">

							<form class="inline" id="contactForm" method="post" >

								<div class="row">

									<div class="col-sm-6 height-contact-element">

										<div class="form-group">

											<input type="text" name="first_name" class="form-control custom-labels" id="name" placeholder="NOME COMPLETO" required data-validation-required-message="Please write your name!"/>

											<p class="help-block text-danger"></p>

										</div>

									</div>

									<div class="col-sm-6 height-contact-element">

										<div class="form-group">

											<input type="email" name="email" class="form-control custom-labels" id="email" placeholder="EMAIL" required data-validation-required-message="Please write your email!"/>

											<p class="help-block text-danger"></p>

										</div>

									</div>

									<div class="col-sm-12 height-contact-element">

										<div class="form-group">

											<input type="text" name="message" class="form-control custom-labels" id="message" placeholder="MENSAGEM" required data-validation-required-message="Please write a message!"/>

										</div>

									</div>

									<div class="col-sm-3 col-xs-6 height-contact-element">

										<div class="form-group">

											<input type="submit" class="btn btn-md btn-custom btn-noborder-radius" value="Enviar"/>

										</div>

									</div>

									<div class="col-sm-3 col-xs-6 height-contact-element">

										<div class="form-group">

											<button type="button" class="btn btn-md btn-noborder-radius btn-custom" name="reset">Limpar

											</button>

										</div>

									</div>

									<div class="col-sm-3 col-xs-6 height-contact-element">

										<div class="form-group">

											<div id="response_holder"></div>

										</div>

									</div>

									<div class="col-sm-12 contact-msg">

									<div id="success"></div>

									</div>

								</div>

							</form>

						</div>

						<div class="col-lg-5 col-md-3 col-lg-offset-1 col-md-offset-1">

							<div class="row">

								<div class="col-md-12 height-contact-element">

									<div class="form-group">

										<i class="fa fa-2x fa-map-marker"></i>
										<?  
								
								echo "$endereco, $numero $bairro $cidade-$estado <br>";
								
								?>
									</div>

								</div>

								<div class="col-md-12 height-contact-element">

									<div class="form-group">

										
										<span class="text"><img src='images/whatsapp.png' border='0' width='30'></span><span class="text"><? echo "<a href='http://wa.me/5516999855731' target='_blank'>+51 (16) 99985-5731</a>"; ?></span> 
										
										<span class="text"><img src='images/whatsapp.png' border='0' width='30'></span>

						          <span class="text"><? echo "<a href='http://wa.me/551637222400' target='_blank'>+51 (16) 3722-2400</a>"; ?></span></div>

									<div class="form-group">

										<i class="fa fa-2x fa-phone"></i>
										<span class="text"><? echo "<a href='https://wa.me/551634095731' target='_blank'>+51 (16) 3409-5731</a>"; ?></span>
										<i class="fa fa-2x fa-phone"></i>
										
										<span class="text">+51 (16) 99204-9280</span>

								  </div>

							  </div>

								<div class="col-md-12 height-contact-element">    

									<div class="form-group">

										<i class="fa fa-2x fa-envelope"></i>

										<span class="text"><a href="malito:lealfinanceira@lealfinanceira.com.br">lealfinanceira@lealfinanceira.com.br</a></span>

									</div>

								</div>

							</div>

						</div>

					</div>

				</div>

			</div>

		</section>

<br>
				 
				      <table width="100%" border="0" align="center">
				        <tbody>
							<tr>
				            <td colspan="3" align="center"><strong class="fa-3x">
							  Siga-nos
								</strong>
				              <ul>
								<?
							
							echo "<li>
							<a target='_blank' href='https://www.facebook.com/Leal-Solu%C3%A7%C3%B5es-Financeiras-529238700581953/?fref=ts'><i class='fa fa-facebook social-icons'></i></a>	";
									
									echo "<img width='50' height='90' src='images/espaco_branco.jpg' >";
							
							echo "<a href='https://instagram.com/lealsolucoesfinanceiras?igshid=ZDdkNTZiNTM' target='_blank'><img src='../../raiz/images/instagram-logo.png' border='0' width='30'></a>
							</li>"; 
							
								?>
								</ul>
							  </td>
			              </tr>
				          <tr>
				            <td width="34%" align="right" valign="top"><a href="index.php#aviso_de_filiais"><img width="180" height="90" src="images/logo.jpg" alt="company logo" /></a></td>
				            <td width="41%" align="center">
								<?  
								echo "Razao Social: $razaosocial <br>";
								echo "Nome Fantasia:$nfantasia <br>";
								echo "CNPJ:$cnpj <br>";
								echo "Endereco: $endereco, $numero $bairro $cidade-$estado <br>";
								echo "CEP: $cep <br>";
								
								?></td>
				            <td width="25%" align="center" scope="col">&nbsp;</td>
			              </tr>
				          
			            </tbody>
			        </table>
			      
			
				<p>&nbsp;</p>

			

	



	<footer id="footer">

			<div class="container">

				<div class="row myfooter">

					<div class="col-sm-6">

						<div class="pull-left">

							© Copyright 2016 

						</div>

					</div>

					<div class="col-sm-6">

						<div class="pull-right">Designed by <a target="_blank" href="http://www.zapinterativa.com.br">Zap</a></div>

					</div>

				</div>

			</div>

		</footer>



		<p>
		  <!-- jQuery -->
		  
		  <script src="js/jquery.js"></script>
		  
		  <!-- Bootstrap Core JavaScript -->
		  
		  <script src="js/bootstrap.min.js"></script>
		  
		  
		  
		  <!-- Google Map -->
		  
		  <script src="//maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=true&amp;libraries=places"></script>
		  
		  
		  
		  <!-- Portfolio -->
		  
		  <script src="js/jquery.quicksand.js"></script>	    
		  
		  
		  
		  
		  
		  <!--Jquery Smooth Scrolling-->
		  
		  <script>

			$(document).ready(function(){

				$('.custom-menu a[href^="#"], .intro-scroller .inner-link').on('click',function (e) {

					e.preventDefault();



					var target = this.hash;

					var $target = $(target);



					$('html, body').stop().animate({

						'scrollTop': $target.offset().top

					}, 900, 'swing', function () {

						window.location.hash = target;

					});

				});



				$('a.page-scroll').bind('click', function(event) {

					var $anchor = $(this);

					$('html, body').stop().animate({

						scrollTop: $($anchor.attr('href')).offset().top

					}, 1500, 'easeInOutExpo');

					event.preventDefault();

				});



			   $(".nav a").on("click", function(){

					 $(".nav").find(".active").removeClass("active");

					$(this).parent().addClass("active");

				});



				$('body').append('<div id="toTop" class="btn btn-primary color1"><span class="glyphicon glyphicon-chevron-up"></span></div>');

					$(window).scroll(function () {

						if ($(this).scrollTop() != 0) {

							$('#toTop').fadeIn();

						} else {

							$('#toTop').fadeOut();

						}

					}); 

				$('#toTop').click(function(){

					$("html, body").animate({ scrollTop: 0 }, 700);

					return false;

				});



			});



		</script>
		  
		  
		  
		  <script>

		function gallery(){};



		var $itemsHolder = $('ul.port2');

		var $itemsClone = $itemsHolder.clone(); 

		var $filterClass = "";

		$('ul.filter li').click(function(e) {

		e.preventDefault();

		$filterClass = $(this).attr('data-value');

			if($filterClass == 'all'){ var $filters = $itemsClone.find('li'); }

			else { var $filters = $itemsClone.find('li[data-type='+ $filterClass +']'); }

			$itemsHolder.quicksand(

			  $filters,

			  { duration: 1000 },

			  gallery

			  );

		});



		$(document).ready(gallery);

		</script>
        <script type="text/javascript">

	$(document).ready(function(){

		inicializemap()



		$('#contactForm').on('submit', function(e){

			e.preventDefault();

			e.stopPropagation();



			// get values from FORM

			var name = $("#name").val();

			var email = $("#email").val();

			var message = $("#message").val();

			var goodToGo = false;

			var messgaeError = 'Request can not be send';

			var pattern = new RegExp(/^(('[\w-\s]+')|([\w-]+(?:\.[\w-]+)*)|('[\w-\s]+')([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);





			 if (name && name.length > 0 && $.trim(name) !='' && message && message.length > 0 && $.trim(message) !='' && email && email.length > 0 && $.trim(email) !='') {

				  if (pattern.test(email)) {

					 goodToGo = true;

				  } else {

					 messgaeError = 'Por favor, verifique o email';

					 goodToGo = false; 

				  }

			 } else {

			   messgaeError = 'Preencha todos os campos do formulário para continuar!';

			   goodToGo = false;

			 }



			 

			if (goodToGo) {

			   $.ajax({

				 data: $('#contactForm').serialize(),

				 beforeSend: function() {

				   $('#success').html('<div class="col-md-12 text-center"><img src="images/spinner1.gif" alt="spinner" /></div>');

				 },

				 success:function(response){

				   if (response==1) {

					 $('#success').html('<div class="col-md-12 text-center"><b>Email enviado com sucesso</b></div>');

					 window.location.reload();

				   } else {

					 $('#success').html('<div class="col-md-12 text-center">Não foi possível enviar o email, por favor tente novamente!</div>');

				   }

				 },

				 error:function(e){

				   $('#success').html('<div class="col-md-12 text-center">O servidor não responde à solicitação, por favor tente novamente!</div>');

				 },

				 complete: function(done){

				   console.log('Finished');

				 },

				 type: 'POST',

				 url: 'js/send_email.php', 

			   });

			   return true;

			} else {

			   $('#success').html('<div class="col-md-12 text-center">'+messgaeError+'</div>');

			   return false;

			}

			return false;

		});

	});



	var map = null;

	 var latitude;

	 var longitude;

	 function inicializemap(){

	   latitude = -20.5304591; 

	   longitude = -47.4250997;



	  var egglabs = new google.maps.LatLng(latitude, longitude);

	  var egglabs1 = new google.maps.LatLng(43.0630171, 89.2296082);

	  var egglabs2 = new google.maps.LatLng(13.0630171, 80.2296082 );





	  var image = new google.maps.MarkerImage('images/marker.png', new google.maps.Size(84,56), new google.maps.Point(0,0), new google.maps.Point(42,56));

	  var mapCoordinates = new google.maps.LatLng(latitude, longitude);

	  var mapOptions = {

	   backgroundColor: '#ffffff',

	   zoom: 10,

	   disableDefaultUI: true,

	   center: mapCoordinates,

	   mapTypeId: google.maps.MapTypeId.ROADMAP,

	   scrollwheel: true,

	   draggable: true, 

	   zoomControl: false,

	   disableDoubleClickZoom: true,

	   mapTypeControl: false,

	   styles: [

					{

						"featureType": "all",

						"elementType": "labels.text.fill",

						"stylers": [

							{

								"color": "#1f242f"

							}

						]

					},

					{

						"featureType": "all",

						"elementType": "labels.icon",

						"stylers": [

							{

								"hue": "#ff9d00"

							}

						]

					},

					{

						"featureType": "landscape.man_made",

						"elementType": "geometry.fill",

						"stylers": [

							{

								"color": "#fef8ef"

							}

						]

					},

					{

						"featureType": "poi.medical",

						"elementType": "geometry.fill",

						"stylers": [

							{

								"hue": "#ff0000"

							}

						]

					},

					{

						"featureType": "poi.park",

						"elementType": "geometry.fill",

						"stylers": [

							{

								"color": "#c9d142"

							},

							{

								"lightness": "0"

							},

							{

								"visibility": "on"

							},

							{

								"weight": "1"

							},

							{

								"gamma": "1.98"

							}

						]

					},

					{

						"featureType": "road",

						"elementType": "geometry",

						"stylers": [

							{

								"weight": "1.00"

							}

						]

					},

					{

						"featureType": "road",

						"elementType": "geometry.fill",

						"stylers": [

							{

								"color": "#d7b19c"

							},

							{

								"weight": "1"

							}

						]

					},

					{

						"featureType": "road.highway",

						"elementType": "geometry",

						"stylers": [

							{

								"visibility": "on"

							}

						]

					},

					{

						"featureType": "road.highway",

						"elementType": "geometry.fill",

						"stylers": [

							{

								"weight": "4.03"

							}

						]

					},

					{

						"featureType": "road.highway",

						"elementType": "geometry.stroke",

						"stylers": [

							{

								"visibility": "off"

							},

							{

								"color": "#ffed00"

							}

						]

					},

					{

						"featureType": "road.highway.controlled_access",

						"elementType": "geometry.fill",

						"stylers": [

							{

								"visibility": "on"

							}

						]

					},

					{

						"featureType": "road.arterial",

						"elementType": "geometry",

						"stylers": [

							{

								"visibility": "on"

							}

						]

					},

					{

						"featureType": "road.local",

						"elementType": "geometry",

						"stylers": [

							{

								"visibility": "on"

							}

						]

					},

					{

						"featureType": "transit.line",

						"elementType": "geometry.fill",

						"stylers": [

							{

								"color": "#cbcbcb"

							}

						]

					},

					{

						"featureType": "water",

						"elementType": "geometry.fill",

						"stylers": [

							{

								"color": "#0b727f"

							}

						]

					}

				]

					  };



	  map = new google.maps.Map(document.getElementById('map-canvas-holder'),mapOptions);

	  marker = new google.maps.Marker({position: egglabs, raiseOnDrag: false, icon: image, map: map, draggable: false,  title: 'ATIS1'}); 

	  marker = new google.maps.Marker({position: egglabs1, raiseOnDrag: false, icon: image, map: map, draggable: false,  title: 'ATIS2'}); 

	  marker = new google.maps.Marker({position: egglabs2, raiseOnDrag: false, icon: image, map: map, draggable: false,  title: 'ATIS3'}); 

	  google.maps.event.addListener(map, 'zoom_changed', function() {

	   var center = map.getCenter();

	   google.maps.event.trigger(map, 'resize');

	   map.setCenter(center);

	  });

	 }



          </script>
			
			
	    <table width="50%" border="0">
	      <tbody>
	        <tr>
	          <td scope="col"><div id="aviso_de_filiais" class="modal_de_aviso" role="dialog" align="center">
	            <p><a href="#fechar" title="Fechar" class="fechar"><b>X</b></a></p>
	            <p>
	              <?
echo " <a href='images/aviso_de_filiais.jpeg' target='_blank'><img src='images/aviso_de_filiais.jpeg' border='0' width='400'></a>";
	
	
?>
                </p>
	            </div></td>
	          <td scope="col">&nbsp;</td>
	          <td scope="col"></td>
            </tr>
          </tbody>
    </table>
	

	<div class="whatsapp-button" id="whatsapp-button">
		<a href="https://contate.me/lealsolucoes" target="_blank">
			<span class="whatsapp-logo"></span>
		</a>
	</div>

	</body>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var whatsappButton = document.getElementById("whatsapp-button");

            setTimeout(function () {
                whatsappButton.style.display = "block";
                whatsappButton.classList.add("fade-in");

                setInterval(function () {
                    whatsappButton.classList.toggle("jump");
                }, 4000);

            }, 5000);
        });
    </script>

<style>
        /* Estilos básicos para o botão flutuante do WhatsApp */
        .whatsapp-button {
            position: fixed;
            bottom: 80px;
            right: 20px;
            display: none;
            /* Inicialmente, o botão estará oculto */
        }

        /* Estilizando o logotipo do WhatsApp */
        .whatsapp-logo {
            width: 60px;
            height: 60px;
            background-color: #25d366;
            /* Cor do logotipo do WhatsApp */
            border-radius: 50%;
            /* Forma circular */
            display: inline-flex;
            justify-content: center;
            align-items: center;
            position: relative;
            transition: background-color 0.4s ease;
            /* Efeito de transição suave no hover */
        }

        /* Criação do ícone do telefone dentro do logotipo do WhatsApp */
        .whatsapp-logo::before {
            content: "\f232";
            /* Código do ícone de telefone do WhatsApp */
            font-family: "Font Awesome 5 Brands";
            /* Fonte de ícones do WhatsApp (Font Awesome) */
            font-size: 26px;
            color: #fff;
            /* Cor do ícone do telefone */
        }

        /* Estilizando o efeito de hover */
        .whatsapp-logo:hover {
            background-color: #128C7E;
            /* Cor destacada no hover */
        }

        /* Animação de aparecimento gradativo */
        .whatsapp-button.fade-in {
            animation: fadeIn 1s forwards;
        }

        /* Animação de pulinho */
        .whatsapp-button.jump {
            animation: jump 0.5s ease-in-out infinite;
        }

        /* Animação de aparecimento gradativo */
        @keyframes fadeIn {
            from {
                opacity: 1;
                transform: translateY(0);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Animação de pulinho */
        @keyframes jump {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-5px);
            }
        }
    </style>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> <!-- Importação da Font Awesome para os ícones do WhatsApp -->
</html>

