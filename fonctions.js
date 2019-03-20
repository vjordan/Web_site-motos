/* Voici notre page qui regroupe les différentes fonctions ,s'exécutants coté client, utilisées pour notre site web. */


/* Ces fonctions servent pour le menu.*/ 
	/*
		cette fonction sert a afficher les premiers sous menus (Location moto, Ventes équipement et accessoires).
		on y met les for des fonctions suivantes afin de fermer les différents sous menus quand on clique sur un élément du menu de base.
	*/
function afficheMenu(obj){
	
	var idMenu     = obj.id; /*on met l'objet avec son id dans une variable*/
	var idSousMenu = 'sous' + idMenu; /*on met dans une variable la variable précédente avec 'sous' devant*/
	var sousMenu   = document.getElementById(idSousMenu);/* on recupère ce que contient idSousSousMenu dans sousSousMenu */
	
	for(var i = 1; i <= 3; i++) /* Quand i est entre 1 et 3*/
	{
		if(document.getElementById('sousmenu' + i) && document.getElementById('sousmenu' + i) != sousMenu) /* On verifie que la valeur de "sousmenu" suivit de la valeur de i est différente de sousMenu*/
		{
			document.getElementById('sousmenu' + i).style.display = "none"; /* Si c'est le cas on n'affiche pas*/
		}
	}
	/*La suite permet de ne pas afficher les sous menus*/
	for(var i = 21; i <= 23; i++)
	{
		if(document.getElementById('soussousmenu' + i))
		{
			document.getElementById('soussousmenu' + i).style.display = "none";
		}
	}
	for(var i = 211; i <= 222; i++)
	{
		if(document.getElementById('soussoussousmenu' + i))
		{
			document.getElementById('soussoussousmenu' + i).style.display = "none";
		}
	}
	for(var i = 2111; i <= 2221; i++)
	{
		if(document.getElementById('soussoussoussousmenu' + i))
		{
			document.getElementById('soussoussoussousmenu' + i).style.display = "none";
		}
	}
	
	if(sousMenu)
	{
		
		if(sousMenu.style.display == "block")
		{
			sousMenu.style.display = "none";
		}
		else
		{
			sousMenu.style.display = "block";
		}
	}

}
	/*
		cette fonction sert a afficher les deuxiemes sous menus (Honda, Yamaha, Accessoires moto, equipement pilote etc ...).
		on y met les for des fonctions suivantes afin de fermer les différents sous menus quand on clique sur un élément des premiers sous menus.
	*/
function afficheSousMenu(obj){

	var idSousMenu     = obj.id; 
	var idSousSousMenu = 'sous' + idSousMenu; 
	var sousSousMenu   = document.getElementById(idSousSousMenu); 
	
	for(var i = 21; i <= 23; i++) 
	{
		if(document.getElementById('soussousmenu' + i) && document.getElementById('soussousmenu' + i) != sousSousMenu)
		{
			document.getElementById('soussousmenu' + i).style.display = "none";
		}
	}
	for(var i = 211; i <= 222; i++)
	{
		if(document.getElementById('soussoussousmenu' + i))
		{
			document.getElementById('soussoussousmenu' + i).style.display = "none";
		}
	}
	for(var i = 2111; i <= 2221; i++)
	{
		if(document.getElementById('soussoussoussousmenu' + i))
		{
			document.getElementById('soussoussoussousmenu' + i).style.display = "none";
		}
	}
	
	if(sousSousMenu)
	{
		
		if(sousSousMenu.style.display == "block")
		{
			sousSousMenu.style.display = "none";
		}
		else
		{
			sousSousMenu.style.display = "block";
		}
	}

}
	/*
		cette fonction sert a afficher les troisiemes sous menus (différents modèles de motos).
		on y met les for des fonctions suivantes afin de fermer les différents sous menus quand on clique sur un élément des deuxièmes sous menus.
	*/
function afficheSousSousMenu(obj){
	
	var idSousSousMenu     = obj.id;
	var idSousSousSousMenu = 'sous' + idSousSousMenu;
	var sousSousSousMenu   = document.getElementById(idSousSousSousMenu);
	

	for(var i = 211; i <= 222; i++)
	{
		if(document.getElementById('soussoussousmenu' + i) && document.getElementById('soussoussousmenu' + i) != sousSousSousMenu)
		{
			document.getElementById('soussoussousmenu' + i).style.display = "none";
		}
	}
	for(var i = 2111; i <= 2221; i++)
	{
		if(document.getElementById('soussoussoussousmenu' + i))
		{
			document.getElementById('soussoussoussousmenu' + i).style.display = "none";
		}
	}
	
	if(sousSousSousMenu)
	{
		
		if(sousSousSousMenu.style.display == "block")
		{
			sousSousSousMenu.style.display = "none";
		}
		else
		{
			sousSousSousMenu.style.display = "block";
		}
	}

}
	
	/*
		cette fonction sert a afficher les quatrièmes sous menus (photos des motos).
		on y met les for des fonctions suivantes afin de fermer les différents sous menus quand on clique sur un élément des troisièmes sous menus.
	*/
function afficheSousSousSousMenu(obj){
	
	var idSousSousSousMenu     = obj.id;
	var idSousSousSousSousMenu = 'sous' + idSousSousSousMenu;
	var sousSousSousSousMenu   = document.getElementById(idSousSousSousSousMenu);
	

	for(var i = 2111; i <= 2221; i++)
	{
		if(document.getElementById('soussoussoussousmenu' + i) && document.getElementById('soussoussoussousmenu' + i) != sousSousSousSousMenu)
		{
			document.getElementById('soussoussoussousmenu' + i).style.display = "none";
		}
	}
	
	if(sousSousSousSousMenu)
	{
		
		if(sousSousSousSousMenu.style.display == "block")
		{
			sousSousSousSousMenu.style.display = "none";
		}
		else
		{
			sousSousSousSousMenu.style.display = "block";
		}
	}
	

}
/* Fin des fonctions pour le menu. */

/* Fonction permettant de faire les verifications par rapport au remplissage du formulaire.*/
function VerificationFormulaire(f)
{
	var x = document.getElementById("mail"); /* On donne a x, la valeur recupérée grâce a l'ID mail.*/
	var y1 = document.getElementById("publicité").checked; /*Idem, mais on utilise "checked" pour verifier si la checkbox a été cochée*/
	var y2 = document.getElementById("internet").checked;
	var y3 = document.getElementById("ami").checked;
	var y4 = document.getElementById("presse").checked;
	if (f.civilité.value == '' || f.nom.value == '' || f.prénom.value == '' || f.adresse.value == '' || f.mail.value == '' 
		|| f.mail2.value == '' || f.domaine_activités.value == '' || f.formation.value == '' || 
		(y1 == false && y2 == false && y3 == false && y4 == false)) /*Vérification que tous les champs sont remplis...*/
	{
		alert('Tous les champs ne sont pas remplis!'); /*...sinon on prévient l'utilisateur*/
		return false;
    }
	else if (!/^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/.test(x.value))  /* Vérification de la validité de l'adresse mail*/
	{
		alert("Votre adresse mail est invalide!"); /*Idem à chaque fois pour "alert".*/
		mail.focus(); /*Si l'email n'est pas bonne, le curseur se met automatiquement sur le champs correspondant*/
		return false;
	}
	else if (f.mail.value != f.mail2.value) /* Vérification de l'identicité des adresses mail entrées.*/
	{
		alert('Vous n\'avez pas spécifié les mêmes adresses mails!');
		f.mail2.focus();
		return false;
	}
	else
	{
		return true; /*si tout va bien, formulaire accepté.*/
	}	
}
/* Fin de la fonction de vérification du formulaire*/

/*Début de la fonction de vérifcation pour la réservation de moto*/
function VerificationLocation(f)
{
	var x = document.getElementById("date");
	if (f.login.value == '' || f.date.value == '') /* Si un des deux champs est vide...*/
	{
		alert('Vous devez rentrer votre login et la date de réservation!'); /* ... on prévient que la saisie est inexacte*/
		return false;
	}	
	else if (!/^[0-3][0-9]\/[0-1][0-9]\/2[0-9]{3}$/.test(x.value)) /*Vérification de la validité de la date*/
	{
		alert('Vous avez donné une date incorrecte!');
		date.focus();
		return false;
	}
	else
	{
		return true;
	}	
}	
/*Fin de la fonction de vérification pour la réservation de moto*/