
<html>
	<head>
		<title>Royale by TEMPLATED</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel-noscript.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
		<div id="header">
			<div class="container">
				
				<!-- Logo -->
				<div id="logo">
					<h1><a href="#">Royale</a></h1>
				</div>
				
				<!-- Nav -->
				<nav id="nav">
					<ul>
						<li><a href="index.html">Homepage</a></li>
						<li><a href="twocolumn1.html">Left Sidebar</a></li>
						<li><a href="twocolumn2.html">Right Sidebar</a></li>
						<li class="active"><a href="onecolumn.html">No Sidebar</a></li>
					</ul>
				</nav>

			</div>
		</div>
		<!-- Header -->

		<!-- Banner -->
		<div id="banner">
			<div class="container">


			</div>
		</div>
		<!-- /Banner -->
		
		<!-- Main -->
		<div id="main">
			
			<!-- Welcome -->		
			<div id="welcome" class="container">
				<div class="row">
				<h2 align=center> Chois des Plantes</h2>
					<section>
				<form Action="confirmation.php" method="POST">
<ul class="form-style-1">
    
    
    <li>
        <label>Choix des decorations<span class="required">*</span></label>
        <?php
$servername = "localhost";
$username = "root";
$password = "";

try{$bdd = new PDO('mysql:host=localhost;dbname=hala',$username, $password);}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
?>

	<select name="chois">
<?php
 $reponse = $bdd->query('SELECT id_deco,type_deco,nom_deco FROM type_decoration');
 while ($donnees = $reponse->fetch()){
?>
           <option value="<?php echo $donnees['id_deco']; ?>"> <?php echo $donnees['type_deco'];echo '-';echo $donnees['nom_deco']; ?></option>
<?php 
}
?>
</select>
       
    </li>
    
    <li>
        <input type="submit" value="Submit" />
    </li>
</ul>
</form>
				</div>
			</div>
			<!-- /Welcome -->
			
		</div>
		<!-- /Main -->		
		
		<!-- Footer -->
		<div id="footer">
			<div class="container">
				<section>
					<header>
						<h2>Pellentesque vulputaterisus semper</h2>
						<span class="byline">In posuere eleifend semper augue maecenas ligula congue rutrum</span>
					</header>
					<div class="row">
						<section class="4u">
							<a href="#" class="image full"><img src="images/pics03.jpg" alt=""></a>
						</section>
						<section class="4u">
							<a href="#" class="image full"><img src="images/pics04.jpg" alt=""></a>
						</section>
						<section class="4u">
							<a href="#" class="image full"><img src="images/pics05.jpg" alt=""></a>
						</section>
					</div>
					<a href="#" class="button">Nulla luctus eleifend</a>
				</section>
			</div>
		</div>
		<!-- /Footer -->

		<!-- Copyright -->
		<div id="copyright">
			<div class="container">
				Design: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)
			</div>
		</div>
	</body>
</html>