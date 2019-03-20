<!-- 
	Cette page sert uniquement a afficher une page de confirmation selon si c'est une confirmation de location ou d'inscription a une formation.
	Ici on utilise la même methode que pour le contenu, c'est a dire la variable "$_GET" mais cette fois avec pour paramètre "form" 
	la page changera donc uniquement en fonction de la valeur de "form" dans l'url.
-->
<?php
	if(isset($_GET['form']))
	{
		if ($_GET['form'] == 'formation')
		{
			echo '<b>Votre inscription à une formation a bien été enregistrée</b><br /><br />';
			echo 'Vous pouvez maintenant revenir à <a href="index.php">la page d\'accueil</a>';
		}
		elseif ($_GET['form'] == 'location')
		{
			echo '<b> '.$_POST['login'].', votre réservation pour le modèle '.$_POST['modele'].' à partir du '.$_POST['date'].' a bien était enregistrée.</b></br></br>';
			echo 'Vous pouvez maintenant revenir à <a href="index.php">la page d\'accueil</a>';
		}
	}
	
?>