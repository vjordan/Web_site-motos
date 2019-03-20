<!-- 
	Voici la page permettant de faire notre menu, c'est celle ci qu'on appelle dans notre "index.php".
	On utilise donc des balises <div> afin de séparer les différentes parties du menu (menu, sous menu, etc...).
	On utilise aussi du PHP afin de placer les différents modèles de motos avec sa marque dans le sous menu.
	Afin de faire dérouler notre menu et d'afficher les différents éléments correspondant a chaques boutons, nous avons aussi utilisé différentes
	fonctions javascript (afficheSousMenu, afficheSousSousMenu, etc ...)
	On met la fonction sur tous les menus et sous menus, même ceux qui ne se déroulent pas, ce qui permet de refermer les sous menus ouverts précédemment.
-->


<div id="menu">
	<div class="menu" id="menu1" onclick="afficheMenu(this)">
		<a href="index.php?page=presentation">Qui sommes nous ?</a>
	</div>
	
	<div class="menu" id="menu2" onclick="afficheMenu(this)">
		<a href="#">Nos prestations</a>
	</div>
	<div id="sousmenu2" style="display:none">
		<div class="sousmenu" id="sousmenu21" onclick="afficheSousMenu(this)">
			<a href="#">Location Moto</a>
		</div>
		<?php
		$moto=array('Deauville'=>'Honda','VFR800'=>'Honda','VFR1200'=>'Honda','F6B'=>'Honda','Pan-European'=>'Honda','Goldwin'=>'Honda','Z1000'=>'Kawasaki','ZZR 1400'=>'Kawasaki','VN 1700 Voyager'=>'Kawasaki','FJR 1300'=>'Yamaha','FZ1 Fazer'=>'Yamaha','TDM 900'=>'Yamaha')
		?>
		<div id="soussousmenu21" style="display:none">
			<div class="soussousmenu" id="soussousmenu211" onclick="afficheSousSousMenu(this)">
				<a href="#">Honda</a>
			</div>
			<div id="soussoussousmenu211" style="display:none">
			<!-- 
				Ici on fait un foreach afin de récupérer dans $moto la clé et la valeur correspondant a cette même clé dans deux variables ($k et $v).
				Ensuite on utilise une variable $i à laquelle on ajoute 1 après chaque passage dans le "if", cela nous permet de changer l'id de chaque
				modèle, car sinon cela afficherait tout le temps l'image de la première moto quelque soit le modèle sur lequel on clique.
			-->
			<?php
			$i=1;
			foreach($moto as $k=>$v)
			{
				if ($v=='Honda')
				{
					echo '<div class="soussoussousmenu" id="soussoussousmenu211'.$i.'" onclick="afficheSousSousSousMenu(this)">';
					echo '<a href="#">'.$k.'</a>';
					echo '</div>';
					echo '<div id="soussoussoussousmenu211'.$i.'" style="display:none">';
					echo '<div class="soussoussoussousmenu">';
					echo '<a href="index.php?page=location&modele='.ucwords(str_replace(' ','-',$k)).'">';
					echo '<img src="Images/'.$k.'.jpg" alt="Modele moto" width="250px" height="130px"/>';
					echo '</a>';
					echo '</div>';
					echo '</div>';
					$i++;
				}
			}
			
			?>
				
			</div>
		
			<div class="soussousmenu" id="soussousmenu212" onclick="afficheSousSousMenu(this)">
				<a href="#">Kawasaki</a>
			</div>
			<div id="soussoussousmenu212" style="display:none">
			<?php
			$i=1;
			foreach($moto as $k=>$v)
			{
				if ($v=='Kawasaki')
				{
					echo '<div class="soussoussousmenu" id="soussoussousmenu212'.$i.'" onclick="afficheSousSousSousMenu(this)">';
					echo '<a href="#">'.$k.'</a>';
					echo '</div>';
					echo '<div id="soussoussoussousmenu212'.$i.'" style="display:none">';
					echo '<div class="soussoussoussousmenu">';
					echo '<a href="index.php?page=location&modele='.ucwords(str_replace(' ','-',$k)).'">';
					echo '<img src="Images/'.$k.'.jpg" alt="Modele moto" width="250px" height="130px"/>';
					echo '</a>';
					echo '</div>';
					echo '</div>';
					$i++;
				}
			}
			
			?>
				
			</div>
			
			<div class="soussousmenu" id="soussousmenu213" onclick="afficheSousSousMenu(this)">
				<a href="#">Yamaha</a>
			</div>
			<div id="soussoussousmenu213" style="display:none">
			<?php
			$i=1;
			foreach($moto as $k=>$v)
			{
				if ($v=='Yamaha')
				{
					echo '<div class="soussoussousmenu" id="soussoussousmenu213'.$i.'" onclick="afficheSousSousSousMenu(this)">';
					echo '<a href="#">'.$k.'</a>';
					echo '</div>';
					echo '<div id="soussoussoussousmenu213'.$i.'" style="display:none">';
					echo '<div class="soussoussoussousmenu">';
					echo '<a href="index.php?page=location&modele='.ucwords(str_replace(' ','-',$k)).'">';
					echo '<img src="Images/'.$k.'.jpg" alt="Modele moto" width="250px" height="130px"/>';
					echo '</a>';
					echo '</div>';
					echo '</div>';
					$i++;
				}
			}
			
			?>
				
			</div>
		</div>
		<div class="sousmenu" id="sousmenu22" onclick="afficheSousMenu(this)">
				<a href="#">Vente équipement et accessoires</a>
		</div>
		<div id="soussousmenu22" style="display:none">
			<div class="soussousmenu" id="soussousmenu221"><a href="index.php?page=construction">Accessoires moto</a></div>
			<div class="soussousmenu" id="soussousmenu222"><a href="index.php?page=construction">Equipement pilote</a></div>
		</div>
	</div>
	
	
	<div class="menu" id="menu3" onclick="afficheMenu(this)">
		<a href="index.php?page=formulaire">S'inscrire à une formation</a>
	</div>
</div>