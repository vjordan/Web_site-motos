<!--
	Cette page est celle qui contient le contenu de notre site, c'est-à-dire que c'est ici que sont toutes les informations que l'on va afficher
	à droite de notre menu.
	Pour faire cela, on utilise donc encore des "require_once" ce qui permet de changer la valeur du contenu en appelant d'autres pages
	Afin d'afficher la bonne page au bon moment, quand on clique sur un lien par exemple, on utilise la methode "GET".
	C'est à dire que l'on affiche la page en fonction de la valeur de "$_GET['page']" ici.
	Mais avant cela on vérifie que "$_GET['page'] à bien une valeur, c'et pour cela qu'on utilise "isset" et si ce n'est pas le cas, on est renvoyé
	à la page d'acceuil.
-->
<?php
	if(isset($_GET['page']))
	{
		if ($_GET['page'] == 'presentation')
		{
			require_once('presentation.php');
		}
		elseif ($_GET['page'] == 'prestations')
		{
			require_once('prestations.php');
		}
		elseif ($_GET['page'] == 'formulaire')
		{
			require_once('formulaire.php');
		}
		elseif ($_GET['page'] == 'confirmation')
		{
			require_once('confirmation.php');
		}
		elseif ($_GET['page'] == 'construction')
		{
			require_once('construction.php');
		}
		elseif ($_GET['page'] == 'location')
		{
			require_once('location.php');
		}
		else
		{
			header('Location:index.php'); //* Ici, on met un header pour dire que si la valeur de "$_GET['page']" ne correspond à aucune de la liste, on est renvoyé à "index.php"
		}
	}
	else
	{
		require_once('presentation.php');
	}

?>