<?php
session_start();

if (isset($_SESSION['login']) && isset($_SESSION['password'])){
	$cookie_name = $_SESSION['login'];
$cookie_value = $_SESSION['password'];
 // 86400 = 1 day
require_once("../model/Class/admin.php");
require_once("../model/Class/produit.php");

$prod=new Produit();
$adm=new admin();
$res=$adm->verifAdmin($_SESSION['login'],$_SESSION['password']);
$nb=$res->fetchColumn(0);
if($nb==0){
?>
<img src="../assests/img/denied.png" alt="denied service"/>
<?php
}

else{








?>

<!DOCTYPE html>
<html lang="zxx">
	

<head>
		<!-- Basic Page Needs -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>FreshMart - Organic, Fresh Food, Farm Store HTML Template</title>
		
		<meta name="keywords" content="Organic, Fresh Food, Farm Store">
		<meta name="description" content="FreshMart - Organic, Fresh Food, Farm Store HTML Template">
		<meta name="author" content="tivatheme">
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="../assests/img/favicon.png" type="image/png">
		
		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		
		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Playfair+Display:300,400,700" rel="stylesheet">
		
		<!-- Vendor CSS -->
		<link rel="stylesheet" href="../../libs/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" href="../../libs/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="../../libs/font-material/css/material-design-iconic-font.min.css">
		<link rel="stylesheet" href="../../libs/nivo-slider/css/nivo-slider.css">
		<link rel="stylesheet" href="../../libs/nivo-slider/css/animate.css">
		<link rel="stylesheet" href="../../libs/nivo-slider/css/style.css">
		<link rel="stylesheet" href="../../libs/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="../../libs/slider-range/css/jslider.css">
		
		<!-- Template CSS -->
		<link rel="stylesheet" href="../assests/css/style.css">
		<link rel="stylesheet" href="../assests/css/reponsive.css">
	</head>
	
	<body class="home home-4">
		<div id="all">
		<header>
				<?php
			  
  include 'header1.PHP';
			  
			  
			  
			  ?>
			  </header>
				
			<!-- Main Content -->
			<div id="content" class="site-content">
				<!-- Breadcrumb -->
				<div id="breadcrumb">
					<div class="container">
						<h2 class="title">Admin Work </h2>
						
						<ul class="breadcrumb">
							<li><a href="#" title="Home">Admin</a></li>
							<li><span>Work</span></li>
									
						</ul>
					<div>
							
								<a href="gestionProduit.php" target="_balnk" ><button type="button" class="btn btn-secondary">Gestion Produit</button></a>
								<a href="gestionClient.php" target="_balnk" ><button type="button" class="btn btn-success">Gestion Client</button></a>
								<a href="gestionContact.php" target="_balnk" ><button type="button" class="btn btn-danger">Gestion Contact </button></a>
								<a href="gestionCommande.php" target="_balnk" ><button type="button" class="btn btn-danger">Gestion des Commandes </button></a>
								<a href="gestionCategorie.php" target="_balnk" ><button type="button" class="btn btn-danger">Gestion des Categories </button></a>
					</div>
					</div>
							</div>
				</div>
			
			
				<div class="container">
					<div class="login-page">
						<div class="login-form form">
							<div class="block-title">
								<h2 class="title"><span>Admin Work</span></h2>
							</div>
						
							
						</div>
					</div>
				</div>
			</div>
			
			<footer>
				<?php
			  
  include 'footer.PHP';
			  
			  
			  
			  ?>
			  </footer>
				
			
		<!-- Vendor JS -->
		<script src="../../libs/jquery/jquery.js"></script>
		<script src="../../libs/bootstrap/js/bootstrap.js"></script>
		<script src="../../libs/jquery.countdown/jquery.countdown.js"></script>
		<script src="../../libs/nivo-slider/js/jquery.nivo.slider.js"></script>
		<script src="../../libs/owl.carousel/owl.carousel.min.js"></script>
		<script src="../../libs/slider-range/js/tmpl.js"></script>
		<script src="../../libs/slider-range/js/jquery.dependClass-0.1.js"></script>
		<script src="../../libs/slider-range/js/draggable-0.1.js"></script>
		<script src="../../libs/slider-range/js/jquery.slider.js"></script>
		<script src="../../libs/elevatezoom/jquery.elevatezoom.js"></script>
		
		<!-- Template CSS -->
		<script src="../assests/js/main.js"></script>
	</body>
</html>

<?php
}
}

else{
	header("location:admin.php");
}
?>