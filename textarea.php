<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="author" content="Geoffroy Carette">
	<meta name="description" content="Page de présentation sur la balise &lt;textarea&gt; et ses attributs">
	<meta name="keywords" content="Balise &lt;textarea&gt; définition et exemple en image">
	<title>Balise &lt;textarea&gt;</title>
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
		<h2 class="titre">La balise &lt;textarea&gt;</h2>
	<h3>La balise &lt;textarea&gt;, qu'est-ce que c'est ?</h3>
	<p>La balise HTML &lt;textarea&gt; représente un controle de zone de texte multi-lignes</p>
	<p>Une zone &lt;textarea&gt; peut contenir une quantité illimité de caractères</p>
	<p>Le rendu du texte se fait avec une largeur fixe, et une police d'écriture de base (généralement Courier)</p>
	<div><h3 class="exemple">Exemple :</h3>
		<img class="exemple_geoffroy" src="media/textarea.png" width="1194" height="414" alt="illustration code">
		<p class="exemple">Résultat :</p>
		<p><textarea>Ceci est une zone de texte</textarea>
	</div>
	<h2>Liste des attributs et mise en application :</h2>
	<h4 class="textarea">• autofocus</h4>
	<div>Cet attribut permet d'attirer l'attention sur la zone de texte créé (focus)
		<br>On peut voir une petite zone bleuté qui apparaît autour de la zone de texte
		<br>Et ceux à chaque rechargement de la page
		<p class="exemple">Exemple :</p>
		<img class="exemple_geoffroy" src="media/textarea_autofocus.png" width="1194" height="414" alt="illustration code">
		<p class="exemple">Résultat :</p>
		<br><br><p><textarea autofocus>Ceci est une zone de texte</textarea>
	</div>
	<br>
	<p class="border"></p>
	<h4 class="trait">• cols</h4>
	<div>Cet attribut permet de définir la largeur de la zone de texte
			<br><br><p class="exemple">Exemple :</p>
		<br><img class="exemple_geoffroy" src="media/textarea_cols60.png" width="1194" height="414" alt="illustration code">
		<p class="exemple">Résultat :</p>
		<br><br><p><textarea cols="60">Ceci est une zone de texte de largeur 60</textarea>
	</div>
	<br>
	<p class="border"></p>
	<h4 class="textarea">• disabled</h4>
	<div>Cet attribut permet de définir une zone de texte qui est désactivé, de cette façon l'utilisateur ne peut pas écrire dans la zone
			<br><br><p class="exemple">Exemple :</p>
		<br><img class="exemple_geoffroy" src="media/textarea_disabled.png" width="1194" height="414" alt="illustration code">
		<p class="exemple">Résultat :</p>
		<br><br><p><textarea disabled>Ceci est une zone de texte désactivé</textarea>
	</div>
	<br>
	<p class="border"></p>
	<h4 class="trait">• form</h4>
	<div>Cet attribut permet de rattacher plusieurs élément de zone de texte de façon à créer un "groupe"
		<br>Cet attribut est généralement utilisé pour créer des formulaires de prise de contact
		<br><br><p class="exemple">Exemple :</p>
		<br><img class="exemple_geoffroy" src="media/textarea_form.png" width="1194" height="414" alt="illustration code">
	</div>
	<p class="exemple">Résultat :</p>
	<form id="formulaire1">
		<br><br>Nom et Prénom : <textarea form="formulaire1">Veuillez indiquer votre Nom et Prénom</textarea>
		<br><br>Adresse mail : <textarea form="formulaire1">Veuillez indiquer votre Adresse mail</textarea>
		<br><br>N° de tel : <textarea form="formulaire1">Veuillez indiquer votre Numéro de téléphone</textarea>
		<br><br>Votre message : <textarea form="formulaire1">Veuillez indiquer votre Message</textarea>
	</form>
	<br><p class="border"></p>
	<h4 class="textarea">• maxlength</h4>
	<div>Cet attribut permet de définir le nombre maximu de caractère autorisé dans la zone de texte
			<br><br><p class="exemple">Exemple :</p>
		<br><img class="exemple_geoffroy" src="media/textarea_maxlength.png" width="1194" height="414" alt="illustration code">
		<p class="exemple">Résultat :</p>
		<br><br><p><textarea maxlength="50">50 caractères seulement</textarea>
	</div> 
	<br>
	<p class="border"></p>
	<h4 class="textarea">• name</h4>
	<div>Cet attribut permet de définir le nom d'une zone de texte
			<br><br><p class="exemple">Exemple :</p>
		<br><img class="exemple_geoffroy" src="media/textarea_name.png" width="1194" height="414" alt="illustration code">
		<p class="exemple">Résultat :</p>
		<br><br><p><textarea name="zonedetexte1">Zone de texte 1</textarea>
	</div>
	<br>
	<p class="border"></p>
	<h4 class="textarea2">• placeholder</h4>
	<div>Cet attribut permet d'indiquer à l'utilisateur la valeur qu'il peut saisir dans la zone de texte
			<br><br><p class="exemple">Exemple :</p>
		<br><img class="exemple_geoffroy" src="media/textarea_placeholder.png" width="1194" height="414" alt="illustration code">
		<p class="exemple">Résultat :</p>
		<br><br><p><textarea placeholder="Nom et Prénom"></textarea>
	</div>
	<br>
	<p class="border"></p>
	<h4 class="textarea">• readonly</h4>
	<div>Cet attribut fait en sorte que l'utilisateur ne puisse pas modifier le texte contenu dans la zone de texte
			<br><br><p class="exemple">Exemple :</p>
		<br><img class="exemple_geoffroy" src="media/textarea_readonly.png" width="1194" height="414" alt="illustration code">
		<p class="exemple">Résultat :</p>
		<br><br><p><textarea readonly>Ceci est une zone de texte</textarea>
	</div>
	<br>
	<p class="border"></p>
	<h4 class="textarea">• required</h4>
	<div>Cet attribut permet d'indiquer à l'utilisateur que le champ de la zone de texte doit être rempli
			<br><br><p class="exemple">Exemple :</p>
		<br><img class="exemple_geoffroy" src="media/textarea_required.png" width="1194" height="414" alt="illustration code">
	</div>
	<br>
	<p class="border"></p>
	<h4 class="trait">• rows</h4>
	<div>Cet attribut fait en sorte d'afficher le nombre de lignes défini à l'utilisateur au lieu de 2 par défault
		<br><br><p class="exemple">Exemple :</p>
		<br><img class="exemple_geoffroy" src="media/textarea_rows10.png" width="1194" height="414" alt="illustration code">
		<p class="exemple">Résultat :</p>
		<br><br><p><textarea rows="10">Ceci est une zone de texte avec 10 lignes visible</textarea>
	</div>
	<br>
	<p class="border"></p>
	<h4 class="trait">• wrap</h4>
	<div>Cet attribut permet de faire des retours à la ligne CR+LF (Carriage Return Line Feed) au retour du formulaire
		<br>C'est à dire que lorsque le formulaire nous est soumis par email par exemple, un saut à la ligne est fait automatiquement
		<br>tous les 20 pixels (pour cet exemple).
		<br>Il existe 2 valeurs pouvant être utilisé avec la balise. Les valeurs <code>hard, soft</code>
		<br><br><p class="exemple">Exemple :</p>
		<br><img class="exemple_geoffroy" src="media/textarea_wrap.png" width="1194" height="414" alt="illustration code">
	</div>
	<br>
	<p class="border"></p>
</div>
</div>
<?php include("footer.inc.php"); ?>
</body>
</html>
