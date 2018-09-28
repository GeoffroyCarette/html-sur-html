<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta name="definition" content="L'élément HTML &lt;p&gt; représente un paragraphe de texte. Les paragraphes sont généralement représenté comme des blocs et séparé par un espace vertical">
	<meta name="keyworks" content="balise &lt;p&gt; definition et exemple en images">
	<title>La Balise &lt;p&gt;</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" type="image/ico" href="media/favicon.ico" />
</head>

<body>
		<header>
				<div class="header">
						<h1>Définitions de 12 balises HTML</h1>
						<a href="index.html"><img src="media/banniere.png"></a>
				</div>
		</header>
		<?php include("menu.php"); ?>
		<div class="container">
				<div class="content">
	<h2 class="titre">La balise &lt;P&gt;</h2>
	<h3>C'est quoi?</h3>
	<p>L'élément HTML &lt;p&gt; représente un paragraphe de texte. Les paragraphes sont généralement représenté comme des
		blocs et séparé par un espace vertical</p>
	<p>Leur première ligne est également parfois indenté . Les paragraphes sont des élément blocs </p>
	<p>Après chaque balise de fin &lt;P&gt;, il se génère un saut de ligne.</p>
	<p>Attention à ne pas trop utilisé la balise . Ne pas utiliser cette élément lorsque d’autres éléments sont plus
		appropriés (liste, définition …).</p>

	<h3>En bref:</h3>
	<p>La balise &lt;p&gt; est utilisée pour mettre en forme le texte qu'elle contient dans un paragraphe. Son utilisation
		entraine l'apparition d'un saut de ligne avant et après son contenu. Il est possible de lui appliquer des styles CSS,
		comme par exemple le style "text-indent" pour effectuer un décalage vers la droite de la première ligne du
		paragraphe. </p>
	<h3 class="exemple">Exemple en image</h3>
	<p><img class="codage" src="media/p.png" alt="Photo du codage de la balise &lt;p&gt;" width="1387" height="293" /></p>
	<p class="gras">Photo du codage de la balise &lt;p&gt;</p>
	<p><img class="codage" src="media/paragraphe.jpg" alt="Photo représentant le codage précédent vu sur internet de la balise &lt;p&gt;"
		 width="1002" height="283" /></p>
	<p class="photo">Photo représentant le codage précédent vu sur internet de la balise &lt;p&gt;</p>
</div>
</div>
<?php include("footer.inc.php"); ?>
</body>
</html>