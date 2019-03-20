<!-- 
	Voici notre page principale, c'est dans celle ci que l'on divise notre site en trois parties.
	Une pour la bannière, une pour le menu, et une autre pour le contenu.
	Pour appeler la page du menu ou du contenu, on utilise du PHP, et plus precisément un "require_once". 
	Nous avons préféré cela à un "include" car le "require_once" permet d'appeler la page une seule fois quoi qu'il arrive.
-->
<!doctype html>
<html>

	<head>
		<title> Motodream </title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="style.css">
		<script type="text/javascript" src="fonctions.js"></script>
	</head>
	
	<body>
		<div id="banniere">
			<img src='Images/banniere.png' width="100%" height="200px" alt="banniere">
		</div>
		<div id="menu">
			<?php
				require_once('menu.php');
			?>
		</div>
		<div id='contenu'>
			<?php
				require_once('contenu.php');
			?>
		</div>
	</body>
	
</html>