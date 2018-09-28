<!DOCTYPE html>
<html lang="fr">
<head> 
	<meta charset="UTF-8">
	<meta name="author" content="Gaetan Emond">
	<meta name="description" content="Page de présentation sur la balise &lt;strong&gt; et ses attributs">
	<meta name="keywords" content="Balise &lt;strong&gt; définition et exemple en image">
	<title>Balise &lt;strong&gt;</title>
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
		<h2 class="titre">La balise &lt;strong&gt;</h2>
		<h3>C'est quoi</h3>
			<p>L'élément HTML &lt;strong&gt; indique que le texte a une importance particulière ou un certain sérieux voire un caractère urgent. Cela se traduit généralement par un affichage <strong> en gras.</strong></p>
			<p>Toutefois, il ne doit pas être utilisé à des fins stylistiques. Pour cela, on pourra utiliser la propriété CSS font-weight. De plus, on pourra utiliser l'élément &lt;b&gt; afin d'attirer l'attention sur une portion de texte qui ne possède pas un niveau d'importance particulier ou l'élément &lt;em&gt; si on souhaite marquer un texte avec de l'emphase.</p>
			<p>
	
			</p>
		<h3 class="exemple">Quelques exemples en image :</h3>
			<p class="strong1">Nous allons prendre un texte simple.</p>
			<img class="strong5" src="media/lelion1.png" width="1400" height="90" alt="definition_lion">
			<p class="strong2">le code:</p>
			<img class="strong5" src="media/code1.png" width="1000" height="85" alt="exemple_code">
				<p class="strong3">On peux voir que l'écriture est normale, rien de particulier. Mais si on ajoutes les balises &lt;strong&gt; au début et en fin du texte, on obtient:</p>
			<img class="strong5" src="media/lelion2.png" width="1400" height="90" alt="definition_lion-gras">
				<p class="strong2">le code:</p>
				<img class="strong5" src="media/code2.png" width="1000" height="82" alt="exemple_code_gras">
				<p class="strong4">Tous ce qui se trouve entre les balises &lt;strong&gt; deviendra gras.</p>
				<br>
			</div>
		</div>
		<?php include("footer.inc.php"); ?>
		</body>
		</html>