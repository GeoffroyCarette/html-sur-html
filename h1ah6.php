<!DOCTYPE html>
	<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="Définitions des balises h1 à h6">
		<meta name="keywords" content="Définitions de la balise h1, h2, h3, h4, h5, h6">
		<title>Définition des balises &lt;h1&gt; à &lt;h6&gt;</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="icon" type="image/ico" href="media/favicon.ico" />
	</head>
	<body>
			<header>
					<div class="header">
							<h1>Définitions de 12 balises HTML</h1>
							<a href="index.html"></a>
							<div class="background">
				<div class="banniere">
					<div class="text_banner"></div>
				</div>
			</div>
					</div>
			</header>
			<?php include("menu.php"); ?>
			<div class="container">
					<div class="content">
			<h2 class="titre">Définition des balises &lt;h1&gt; à &lt;h6&gt;</h2>
			<h3>C'est quoi ?</h3>
				<p>Les balises &lt;h1&gt; à &lt;h6&gt; servent à indiquer des titres.</p>
				<p>La balise &lt;h1&gt; définit le titre principal de la page et la balise &lt;h6&gt; définit le titre le moins important.</p>
				<p>Pour le référencement, il vaut mieux que le titre principal, symbolisé et encadré par les balises &lt;h1&gt;ne soit présent qu’une seule fois. Il devra contenir les mots-clés principaux.</p>
				<p>Il est préférable de placer ce titre principal le plus haut possible (le plus près de la première balise &lt;body&gt; sera le mieux).
				<p>Il vous faudra également respecter l’ordre de hiérarchisation des titres</p>
			<h3 class="exemple">Exemple en code et en rendu</h3>
				<h1 class="h1" >&lt;h1&gt;Titre le plus important de la page&lt;/h1&gt;</h1>
				<h2>&lt;h2&gt;Titre secondaire, peut être présent plusieurs fois&lt;/h2&gt;</h2>
				<h3>&lt;h3&gt;Titre numéro 3 ...&lt;/h3&gt;</h3>
				<h4>&lt;h4&gt;Titre numéro 4 ...&lt;/h4&gt;</h4>
				<h5>&lt;h5&gt;Titre numéro 5 ...&lt;/h5&gt;</h5>
				<h6>&lt;h6&gt;Titre numéro 6 ...&lt;/h6&gt;</h6>
	</div>
	</div>
	<?php include("footer.inc.php"); ?>
</body>
</html>