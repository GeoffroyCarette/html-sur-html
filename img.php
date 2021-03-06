<!DOCTYPE html>
	<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="Définitions de la balise img">
		<meta name="keywords" content="Définitions de la balise img, image, attributs">
		<title>Définition de la balise &lt;img&gt;</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="icon" type="image/ico" href="media/favicon.ico" />
	</head>
	<body>
			<header>
					<div class="header">
							<h1>Définitions de 12 balises HTML</h1>
							<a href="index.html"><img class="img_banniere" src="media/banniere.png"></a>
					</div>
			</header>
			<?php include("menu.php"); ?>
			<div class="container">
					<div class="content">
			<h2 class="titre">Définition de la balise &lt;img&gt;</h2>
			<h3>C'est quoi ?</h3>
				<p>La balise &lt;img&gt; permet d'insérer une image dans un document HTML.</p>
			<h3>Attributs</h3>
				<p>Cette balise nécessite deux attributs :</p> 
				<ul style="list-style-type:square">	
				<li>src (source) - le chemin de l'image</li>
				<li>alt (alternatif) - utile pour les navigateurs non-graphiques, les logiciels pour malvoyants et les moteurs de recherche</li></ul>	
			<h3 class="exemple">Exemple en code</h3>
				<p class="img">&lt;img src="media/Inpulsa Team.jpg" alt="Photo de l'Inpulsa Team, promo 2018 de l'ACS Vesoul"&gt;</p>	
			<h3 class="exemple">Exemple en rendu</h3>
				<p><img src="media/inpulsateam.jpg" alt="Photo de l'Inpulsa Team, promo 2018 de l'ACS Vesoul"></p>
				<p class="img2">Inpulsa Team, promo 2018 de l'ACS Vesoul</p>
				<br>
			</div>
		</div>
		<?php include("footer.inc.php"); ?>
		</body>
		</html>





