<!--
	Cette page correspond au formulaire d'inscription à une formation que doit remplir l'utilisateur.
	Pour cela, il doit remplir différents champs (nom, prénom, etc...).
	On utilise différents types d'input (radio, checkbox, text, etc...). Grâce a cela on recupère les valeurs de chaque input (par methode POST).
	Grace au javascript (fonction VerificationFormulaire implémentée par le "onSubmit") on vérifie que tous les champs sont remplis, que l'adresse mail 
	est valide, et enfin que les deux adresses mail spécifiées soit 
	identiques.
-->


<form name="Inscription" onSubmit="return VerificationFormulaire(this)" action="index.php?page=confirmation&form=formation" method="post">
	<fieldset>
		<legend>Inscrivez-vous à une formation</legend><br />
		Votre civilité:<br /> 
			<input type="radio" name ="civilité" value="monsieur" />M.<br />
			<input type="radio" name="civilité" value="madame" />Mme<br />
			<input type="radio" name="civilité" value="mademoiselle" />Mlle<br /><br />
		Votre nom: <input name="nom" type="text" size=15 maxlength=20 /><br /><br />
		Votre prénom: <input name="prénom" type="text" size=15 maxlength=20 /><br /><br />
		Votre adresse: <textarea rows=1 cols=50 name="adresse"></textarea><br /><br />
		Votre mail: <textarea rows=1 cols=50 name="mail" id="mail"></textarea><br /><br />
		Votre mail (vérification): <textarea rows=1 cols=50 name="mail2"></textarea><br /><br />
		Votre domaine d'activité: <select name="domaine_activités" size=1>
				<option name="da1" value=1>Agriculture, chasse, sylviculture</option>
				<option name="da2" value=2>Pêche, aquaculture</option>
				<option name="da3" value=3>Industries extractives</option>
				<option name="da4" value=4>Industrie manufacturière</option>
				<option name="da5" value=5>Production et distribution d'électricité, de gaz et d'eau</option>
				<option name="da6" value=6>Construction</option>
				<option name="da7" value=7>Commerce, réparations automobiles et d'articles domestiques</option>
				<option name="da8" value=8>Hôtels et restaurants</option>
				<option name="da9" value=9>Transports et communications</option>
				<option name="da10" value=10>Activités financières</option>
				<option name="da11" value=11>Immobilier, location et servicesaux entreprises</option>
				<option name="da12" value=12>Administration publique</option>
				<option name="da13" value=13>Education</option>
				<option name="da14" value=14>Santé et action sociale</option>
				<option name="da15" value=15>Services collectifs, sociaux et personnels</option>
				<option name="da16" value=16>Services domestiques</option>
				<option name="da17" value=17>Activités extra-territoriales</option>
		</select><br /><br />
		Choisissez vos formations (plusieurs choix possibles): <select name="formation" multiple size=11>
			<optgroup name="mécanique" label="Mécanique" />
				<option value=1>Partie cycle</option>
				<option value=2>Dépannage de base</option>
				<option value=3>Electricité</option>
				<option value=4>Moteur</option>
				<option value=5>Montage accessoires</option>
			<optgroup name="pilotage" label="Pilotage" />	
				<option value=6>Débutant</option>
				<option value=7>Motard régulier</option>
				<option value=8>Confirmé</option>
				<option value=9>Piste</option>
		</select><br /><br />
		Comment avez-vous connu le site? <br />
			<input type="checkbox" name="site" value="publicité" id="publicité"/><label for="publicité">Publicité</label><br />
			<input type="checkbox" name="site" value="internet" id="internet"/><label for="internet">Recherche internet</label><br />
			<input type="checkbox" name="site" value="ami" id="ami"/><label for="ami">Un ami</label><br />
			<input type="checkbox" name="site" value="presse" id="presse"/><label for="presse">Presse spécialisée</label><br /><br />
		<input type="image" src="Images/valider.png" name="valider" value="valider" width="5%" height="5%"/>
		<a href="index.php?page=formulaire" ><img src="Images/annuler.png" id='test' width="5%" height="5%"</a>
	</fieldset>
</form>