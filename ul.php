<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8"> 
		<meta name="description" content="Définitions de la balise ul">
		<meta name="keywords" content="Définitions de la balise ul, li, liste, puces">
		<title>La balise &lt;ul&gt;</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="icon" type="image/ico" href="media/favicon.ico" />
	</head>
	<body>
			<header>
					<div class="header">
							<h1>Définitions de 12 balises HTML</h1>
							<a href="index.html"> <img src="media/banniere.png" width="500px" height="100px" alt="Banniere orange indiquant définitions de 12 balises HTML"></a>
					</div>
			</header>
			<div class="container">
			<?php include("menu.php"); ?>
					<div class="content">
			<h2 class="titre">La balise &lt;ul&gt;</h2>
			<h3>C'est quoi ?</h3>
				<p>La balise &lt;ul&gt; permet de définir une liste d'éléments sans ordre particulier.</p>
				<p>Cette liste est généralement représentée par des puces. Les éléments de la liste sont contenus dans la balise &lt;li&gt;</p>
			<h3 class="exemple">Exemple en code</h3>
				<img class="ul" src="media/liste.png" height=140px width=440px alt="Capture d'écran du code HTML de la liste">
			<h3 class="exemple">Exemple en rendu</h3>
				<ul>
				<li>Kaffee</li>
				<li>Tee</li>
				<li>Milch</li></ul>
				<h2>Attributs</h2>
				<p>Le style de puce utilisé pour la liste peut être défini grâce à des attributs.</p>
				<p class="ul2">&lt;ul style="list-style-type:disc"&gt; pour une puce normale</p>
				<br>
				<ul style="list-style-type:disc">
				<li>Coffee</li>
				<li>Tea</li>
				<li>Milk</li></ul>	

				<p class="ul2">&lt;ul style="list-style-type:circle"&gt; pour une puce cercle</p>
				<br>
				<ul style="list-style-type:circle">
				<li>Café</li>
				<li>Thé</li>
				<li>Lait</li></ul>	

				<p class="ul2">&lt;ul style="list-style-type:square"&gt; pour une puce carrée</p>
				<br>
				<ul style="list-style-type:square">
				<li>Café</li>
				<li>Té</li>
				<li>Leche</li></ul>	

				<p class="ul3">&lt;ul style="list-style-type:none"&gt; pour aucune puce</p> 
				<br>
				<ul style="list-style-type:none">
				<li>Café</li>
				<li>Té</li>
				<li>Leche</li></ul>	

		</div>
</div>
		<footer>
			<p class="made_with_love">Made with <span class="coeur">❤</span> by Jeanne, Gaëtan, Valérie & Geoffroy</p>
			<p class="bottom_link">
			Powered by <a href="http://www.accesscodeschool.fr/" target="_blank"><img class="acs_logo" src="media/acs.jpg" width="400" height="400" alt="Access code school logo"></a>
		</footer>
</body>
</html>