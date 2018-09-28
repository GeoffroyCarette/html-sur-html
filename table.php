<!DOCTYPE html>
	<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta name="description" content="Définitions de la balise table">
		<meta name="keywords" content="Définitions de la balise table, th, tr, td">
		<title>La balise &lt;table&gt;</title>
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
			<h2 class="titre">La balise &lt;table&gt;</h2>
			<h3>C'est quoi ?</h3>
				<p>La balise &lt;table&gt; permet de définir le début et la fin d'un tableau tableau.</p>
				<p>Cette balise est généralemant utilisée en conjonction avec les balises suivantes :</p>
				<ul>
				<li>la balise &lt;th&gt; (table header) qui définit une cellule titre d'un tableau</li>
				<li>la balise &lt;tr&gt; (table row) qui définit le début et la fin d'une ligne</li>
				<li>la balise &lt;td&gt; (table data) qui définit une cellule dans une ligne</li></ul>
				<br>
				<p>La longueur d'un tableau peut être définie en %, alors la taille du tableau dépendra de la taille de la fenêtre. Celle-ci est indiquée en tant qu'attribut :  style="width:100%".</p>
				<p>On pourra faire de même avec la hauteur du tableau en utilisant "height".</p>
			<h3 class="exemple">Exemple en code</h3>
				<p><img class="table" src="media/table.png" alt="Capture d'écran du code HTML de la table"></p>
			<h3 class="exemple">Exemple en rendu</h3>
				<table style="width:20%">
				<tr>
				<th>Prénom</th>
				<th>Nom</th> 
				<th>Ville</th>
				</tr>
				<tr>
				<td>Geoffroy</td>
				<td>Carette</td> 
				<td>Avallon</td>
				</tr>
				<tr>
				<td>Jeanne</td>
				<td>Thibert</td> 
				<td>Beure</td>
				</tr>
				<tr>
				<td>Valérie</td>
				<td>Honoré</td> 
				<td>Contréglise</td>
				</tr>
				</table>
			</div>
		</div>
		<?php include("footer.inc.php"); ?>
		</body>
		</html>