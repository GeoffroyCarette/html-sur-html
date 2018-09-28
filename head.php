<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta name="definition" content="La balise &lt;head&gt; est un élément structurel (au même titre que les balises &lt;html&gt; ou &lt;body&gt;) d'un document html. Elle contient les informations essentielles à la description du document qui sera affiché dans le corps du document">
	<meta name="keyworks" content="balise &lt;head&gt; definition et exemple en images">
	<title>La balise &lt;head&gt;</title>
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
	<h2 class="titre">La balise &lt;head&gt;</h2>
	<h3>C'est quoi?</h3>
	<p>La balise &lt;head&gt; est un élément structurel (au même titre que les balises &lt;html&gt; ou &lt;body&gt;) d'un
		document html. Elle contient les informations essentielles à la description du document qui sera affiché dans le
		corps du document :</p>
	<ul>
		<li>le titre du document (inclus dans la balise &lt;title&gt;)</li>
		<li>les références aux feuilles de style utilisées par le document </li>
		<li>les références aux javascripts utilisés par le document</li>
		<li>les balises &lt;meta&gt; pouvant spécifier l'auteur la description du contenu l'encodage et de nombreuses autres
			informations</li>
	</ul>
	<p>Au sein de la balise &lt;head&gt;, il est possible de déclarer les styles utilisés dans le corps du document soit
		par référence à une feuille de style CSS soit par utilisation de la balise style en y insérant directement les styles
		à utiliser. </p>
	<h3>En bref:</h3>
	<p> La balise &lt;head&gt; utilise des informations d'entête : </p>
	<ul>
		<li>Soit par le navigateur (titre, balises meta ...)</li>
		<li>Soit par les éléments du corps (styles, scripts ...)</li>
	</ul>
	<p>Les éléments suivant peuvent être inclus entre les balises &lt;head&gt; :</p>
	<ul>
		<li>&lt;title&gt;</li>
		<li>&lt;style&gt;</li>
		<li>&lt;base&gt;</li>
		<li>&lt;link&gt;</li>
		<li>&lt;meta&gt;</li>
		<li>&lt;script&gt;</li>
		<li>&lt;noscript&gt;</li>
	</ul>

	<h3 class="exemple">Exemple en image</h3>
	<img class="head" src="media/codage.png" alt="Photo correspondant au titre faisant partie de la balise head " width="825"
	 height="79" />
	<p class="head3">Photo du codage de la balise &lt;head&gt;</p>
	<img class="head2" src="media/contenu-head.gif" alt="Photo correspondant au codage" width="300" height="175" />
	<p class="head4">Photo représentant le codage précédent vu sur internet de la balise &lt;head&gt;</p>

	
</div>
</div>
<?php include("footer.inc.php"); ?>
</body>
</html>