<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta name="author" content="Geoffroy Carette">
	<meta name="description" content="Page de présentation sur la balise &lt;div&gt; et ses attributs">
	<meta name="keywords" content="Balise &lt;div&gt; définition et exemple en image">
	<title>Balise &lt;div&lg;</title>
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
<div class="container">
<?php include("menu.php"); ?>
		<div class="content">
		<h2 class="titre">La balise &lt;div&gt;</h2>
		<h3>La balise &lt;div&gt;, qu'est-ce que c'est ?</h3>
		<p>La balise HTML &lt;div&gt; permet de segmenter le contenu d'un code, de tel façon à regrouper plusieurs éléments</p>
		<p>Elle peut notamment être utilisé pour styliser une partie précise d'une page web à l'aide du langage informatique
			CSS</p>
		<p>Il existe toute une liste d'attribut qui permet de faire différentes choses avec la balise</p>
		<p>Il ne <strong>peut pas</strong> être contenu dans une balise &lt;p&gt; il est forcément en dehors</p>
		<h3 class="exemple">Liste des attributs et mise en application :</h3>
		<h4 class="trait">• align</h4>
		<p>Cet attribut permet d'aligner le texte sur la page web.
			<br><br><span class="exemple">Exemple :</span>
			<br><img class="exemple_geoffroy" src="media/div_aligncenter.png" width="1194" height="414" alt="illustration code">
		</p>
		<div align="center">
			<p class="exemple">Résultat :</p>
		div aligné sur le centre de page
		</div>
		<p class="border"></p>

		<h4 class="trait">• class</h4>
		<p>Cet attribut permet d'identifier la balise
			<br>Il est utilisé pour styliser l'élément avec le CSS
			<br><br><span class="exemple">Exemple :</span>
			<br><img class="exemple_geoffroy" src="media/div_class.png" width="1194" height="414" alt="illustration code">
		</p>

		<br>
		<p class="border"></p>
		<h4 class="trait">• dir</h4>
		<p>Cet attribut permet de spécifier le sens de lecture
			<br>Il vient avec les éléments suivant :<br>
			<br> • <code>ltr</code> : Left to right
			<br> • <code>rtl</code> : Right to left
			<br><br><span class="exemple">Exemple :</span>
			<br><img class="exemple_geoffroy" src="media/div_rtl.png" width="1194" height="414" alt="illustration code">
		</p>
		<p class="exemple">Résultat :</p>
		<div dir="rtl">
		De droite à gauche</div>
		<br>

		<p class="border"></p>
		<h4 class="trait">• id</h4>
		<p>Cet attribut permet d'identifier la balise
			<br>Il est utilisé pour les CSS et Javascript
			<br><br><span class="exemple">Exemple :</span>
			<br><img class="exemple_geoffroy" src="media/div_id.png" width="1194" height="414" alt="illustration code">
		</p>
		<br>
		<p class="border"></p>
		<h4 class="trait">• lang</h4>
		<p>Cet attribut permet de spécifier la langue d'un élément html
				<br><br><span class="exemple">Exemple :</span>
			<br><img class="exemple_geoffroy" src="media/div_langfr.png" width="1194" height="414" alt="illustration code">
		</p>
		<br>
		<p class="border"></p>
		<h4 class="trait">• style</h4>
		<p>Cet attribut permet de définir des CSS dans la balise elle même
			<br>A noter qu'il y a tout un tas de modifications possible (type de police, taille, couleur...)
			<br><br><span class="exemple">Exemple :</span>
			<br><img class="exemple_geoffroy" src="media/div_style.png" width="1194" height="414" alt="illustration code">
		</p>
		<p class="exemple">Résultat :</p>
		<div style="font-size: 35px;color:white">Taille de police 35 pixels</div>
		<br>
		<p class="border"></p>
		<h4 class="trait">• title</h4>
		<p>Cet attribut permet d'afficher un texte lorsqu'on passe notre souris sur un mot ou une phrase
				<br><br><span class="exemple">Exemple :</span>
			<br><img class="exemple_geoffroy" src="media/div_title.png" width="1194" height="414" alt="illustration code">
		</p>
		<br><p class="border"></p>
</div>
</div>
		<?php include("footer.inc.php"); ?>
</body>
</html>
