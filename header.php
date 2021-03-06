<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Geoffroy Carette">
	<meta name="description" content="Page de présentation sur la balise &lt;header&gt; et ses attributs">
	<meta name="keywords" content="Balise &lt;header&gt; définition et exemple en image">
	<title>Balise &lt;header&gt;</title>
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
		<h2 class="titre">La balise &lt;header&gt;</h2>
		<h3>Le &lt;header&gt; c'est quoi ?</h3>
			<p>Cette balise est en faite la partie haute d'une page web, elle fait partie intégrande du &lt;body&gt;</p>
			<p>En règle général elle sert à introduire des éléments importants d'une page web et/ou aidant à la navigation</p>
			<p>Par exemple les éléments suivant :
				<br>• Le logo d'un site web
				<br>• Le titre d'une page
				<br>• Un formulaire de recherche
			</p>
		<h3 class="exemple">Exemple :</h3>
			<img class="head" src="media/exemple_header.jpg" width="495" height="100" alt="Illustration d'un header">
		<h3 class="exemple">Mise en pratique :</h3>
			<img class="head" src="media/ex_header.jpg" width="" height="" alt="Illustration d'un header">
		</div>
	</div>
	<?php include("footer.inc.php"); ?>
	</body>
	</html>