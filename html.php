<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta name="definition" content="La balise &lt;html&gt; indique au navigateur qu’il s’agit d’un document HTML.
	La balise &lt;html&gt; représente la racine d’un document HTML">
	<meta name="keyworks" content="balise &lt;html&gt; definition et exemple en images">
	<title>La balise &lt;HTML&gt;</title>
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
		<h2 class="titre">La balise &lt;HTML&gt;</h2>
		<h3>C'est quoi?</h3>
		<p>La balise &lt;html&gt; indique au navigateur qu’il s’agit d’un document HTML.

			<p> La balise &lt;html&gt; représente la racine d’un document HTML.</p>

			<p>La balise &lt;html&gt; est le conteneur pour tous les autres éléments HTML – sauf pour l’élément
				&lt;!doctype&gt;.</p>

			<p>La balise &lt;html&gt; est pris en charge par tous les principaux navigateurs.</p>

			<h3>En bref le document HTML</h3>
			<p>Un élément HTML se compose d'une balise ouvrante, d'un contenu textuel et d'une balise fermante</p>
			<p>HTML est un langage descriptif utilisé pour structurer le contenu d'une page (ses textes, ses images, ses liens,
				etc.).</p>
			<p>Un document HTML est un fichier texte qui contient des balises . Ces balises doivent être utilisées d'une
				certaine
				façon pour décrire correctement la structure du document. Les balises indiquent au navigateur comment afficher le
				document</p>
			<p>Le navigateur n'affiche pas les balises telles quelles. Lorsqu'un utilisateur visite une page web, son navigateur
				analyse le document et l'interprète afin d'afficher la page web correctement.</p>
			<h3>La syntaxe des différentes balises</h3>
			<ul>
				<li>Un chevron ouvrant &lt;</li>
				<li>Le nom de la balise</li>
				<li>Des attributs (optionnels).</li>
				<li>Un espace</li>
				<li>Suivi du nom de l'attribut</li>
				<li>D'un signe égal (=)</li>
				<li>et d'une valeur entre doubles quotes ("").</li>
				<li>Un chevron fermant(>)</li>
			</ul>

			<h3 class="exemple">Exemple en image</h3>
			<img class="codage" src="media/html.png" alt="Codage en &lt;HTML&gt; dont balise de base html" width="1573" height="732" />
		<p class="html">Photo du codage de la balise &lt;html&gt; et du codage en HTML</p>
		<img class="codage" src="media/html1.png" alt="Photo représentant le codage en &lt;html&gt;" width="1796" height="582" />
		<img class="codage" src="media/codage2.png" alt="Photo représentant le codage précédent vu sur internet de la balise html et du codage en HTML"
		 width="1576" height="832" />
		<p class="html2">Photo représentant le codage précédent vu sur internet de la balise &lt;html&gt; et du codage en
			HTML</p>
		</div>
	</div>
	<?php include("footer.inc.php"); ?>
	</body>
	</html>