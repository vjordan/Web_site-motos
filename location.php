<!--
	Avec cette page nous affichons la photo et la description de la moto en fonction de son modèle.
	Afin de ne pas faire une page pour chaque moto, nous avons utilisé une fois de plus la methode "GET".
	Nous avons donc utilisé un paramètre "modele" qui permet, en fonction du modèle sur lequel on a cliqué, d'afficher les informations correspondantes.
	Nous avons placé la photo et la description dans deux balises <div> différentes afin de pouvoir placé le texte a droite de la photo (système de boites
	fottantes).
	Enfin nous avons mis des champs de textes qui permettent de reserver la moto que l'on visionne(avec vérification que les champs soient remplis,
	et que la date soit valide).
-->


<div id="imgmoto">
<?php
	if(isset($_GET['modele']))
	{
		if($_GET['modele'] == 'Deauville')
		{
			echo '<img src="Images/Deauville.jpg" width="500px" height="400px" alt="image moto">';
		}
		
		if($_GET['modele'] == 'VFR800')
		{
			echo '<img src="Images/VFR800.jpg" width="500px" height="400px" alt="image moto">';
		}
		
		if($_GET['modele'] == 'VFR1200')
		{
			echo '<img src="Images/VFR1200.jpg" width="500px" height="400px" alt="image moto">';
		}
		
		if($_GET['modele'] == 'F6B')
		{
			echo '<img src="Images/F6B.jpg" width="500px" height="400px" alt="image moto">';
		}
		
		if($_GET['modele'] == 'Pan-European')
		{
			echo '<img src="Images/Pan-European.jpg" width="500px" height="400px" alt="image moto">';
		}
		
		if($_GET['modele'] == 'Goldwin')
		{
			echo '<img src="Images/Goldwin.jpg" width="500px" height="400px" alt="image moto">';
		}
		
		if($_GET['modele'] == 'Z1000')
		{
			echo '<img src="Images/Z1000.jpg" width="500px" height="400px" alt="image moto">';
		}
		
		if($_GET['modele'] == 'ZZR-1400')
		{
			echo '<img src="Images/ZZR 1400.jpg" width="500px" height="400px" alt="image moto">';
		}
		
		if($_GET['modele'] == 'VN-1700-Voyager')
		{
			echo '<img src="Images/VN 1700 Voyager.jpg" width="500px" height="400px" alt="image moto">';
		}
		
		if($_GET['modele'] == 'FJR-1300')
		{
			echo '<img src="Images/FJR 1300.jpg" width="500px" height="400px" alt="image moto">';
		}
		
		if($_GET['modele'] == 'FZ1-Fazer')
		{
			echo '<img src="Images/FZ1 Fazer.jpg" width="500px" height="400px" alt="image moto">';
		}
		
		if($_GET['modele'] == 'TDM-900')
		{
			echo '<img src="Images/TDM 900.jpg" width="500px" height="400px" alt="image moto">';
		}
	}
	else
	{
		require_once('presentation.php');
	}
?>
</div>
<div id="descmoto">
<?php
	if(isset($_GET['modele']))
	{
		if($_GET['modele'] == 'Deauville')
		{
			echo 'La Deauville possède le talent enviable de savoir s’adapter. La Deauville ? Elle vous servira 
				avec plaisir pour vos trajets quotidiens et vos déplacements urbains, mais saura tout aussi bien vous emmener sur 
				les routes lors de vos week-ends ou de vos expéditions au long cours à travers le continent. En d’autres mots, 
				cette machine est conçue pour aligner les kilomètres – jour après jour, année après année. Racée et attrayante, 
				la Deauville tire sa puissance d’un bicylindre en V, 8 soupapes et 680cm³ à refroidissement liquide et alimentation par injection.';
			echo '</br></br>';
			echo 'Son comportement routier est facile et stable et son allure fine et aérodynamique lui permet de se faufiler dans les bouchons avec facilité.
				Ses courbes harmonieuses et son style sont résolument urbains, notamment grâce à une originale double optique “piggyback” à multiréflecteurs qui
				offre une vision nocturne exceptionnelle et autorise une conduite en toute confiance… A bord de la Deauville, 
				vous êtes prêt pour toutes les routes, à tout instant…';
		}
		
		if($_GET['modele'] == 'VFR800')
		{
			echo 'La VFR est un mélange explosif entre performances sportives et maniabilité exceptionnelle. 
			Avec ses racines clairement sportives, la VFR est sans aucun doute la plus adulée des sport-GT. 
			D’autant que ses lignes, sculptées à la perfection, sont au moins aussi impressionnantes que les performances qu’elle revendique. 
			Basse et bien dessinée, la selle permet de poser facilement les pieds au sol tout en assurant un confort appréciable sur les longues distances 
			autorisées par le réservoir de capacité généreuse.';
			echo '</br></br>';
			echo 'Animée par un V4 double arbre à cames et alimentation par injection, la VFR se dote également du système de distribution à double niveau VTEC,
			conçue pour délivrer une puissance élevée tout en restant exploitable. Impressionnante d’efficacité sur les petites routes de montagne sinueuses,
			la VFR est tout aussi à l’aise dans la circulation urbaine. En combinant couple élevé à bas régimes et puissance décoiffante dans les tours,
			la VFR est si polyvalente qu’elle gère toutes les situations avec la même perfection et la même facilité. ';
		}
		
		if($_GET['modele'] == 'VFR1200')
		{
			echo 'Digne héritière de la lignée apparue en 1986 et devenue légendaire auprès de plusieurs générations de motards, 
			la VFR1200F perpétue le mythe et se présente en véritable vitrine du savoir-faire de Honda en matière de technologie 
			(moteur V4 asymétrique, distribution Unicam, carénage multicouches, freinage C-ABS). La plupart de ces technologies ont été développées sur circuit
			et adaptées de manière optimale afin de favoriser l’accessibilité à tous. La VFR1200F vous propose une polyvalence exceptionnelle,
			elle se montre plaisante au quotidien ou en duo mais aussi efficace lorsqu’il s’agit d’assumer son caractère sportif. ';
			echo '</br></br>';
			echo 'La nouvelle VFR1200F dispose d’une motorisation V4 à 76° de dernière génération, plus compact, 
			permettant une meilleure centralisation des masses. Liné courbe de couple est concentrée sur les bas et
			moyens régimes procurant à son pilote maîtrise et excitation du pilotage.

			Pour sa distribution, la VFR1200F fait appel à l’architecture Unicam développée sur les CRF. 
			Outre la compacité, cette architecture permet d’améliorer la réactivité et de limiter la consommation de carburant. ';
		}
		
		if($_GET['modele'] == 'F6B')
		{
			echo 'Une tendance ne cesse de grandir en europe, principalement aux États-Unis : de plus en plus de GT sont 
			débarrassées de leurs carénages, top box puis lestées d’une simple paire de sacoches, leur pare-brise est 
			tronqué et leur habillage réduit à sa plus simple expression : Ce type de segment est appelé “Bagger”.
			Envoûtante machine qui sinvite dans le paysage des cruisers et des GT. Après le F6C pour le “Cruiser ”,
			cette fois-ci sur une base de GL1800, la F6B : B pour Bagger.
			Honda présente un concept unique et intègre d’une manière pertinente les Cruiser/GT. Elle a été conçue pour être dans son élément aussi 
			bien en ville que sur les grandes routes ouvertes.';
			echo '</br></br>';
			echo 'Son six cylindres à plat 12 soupapes issu de la Goldwing, délivre une puissance de 81 kW à 5 500 tr/min mais surtout un couple de 167 Nm
			à 4 000 tr/min (type F).
			La moto ne se prive pas de vous arracher les bras sitôt que la main droite devient frissonnante. 
			Le poids impose le respect mais ne dérange absolument pas le 6 cylindres à plat. ';
		}
		
		if($_GET['modele'] == 'Pan-European')
		{
			echo 'Depuis ses premiers tours de roues, la Pan European s’est forgée une solide réputation de routière au long cours. 
			Véritable maître-étalon de la catégorie GT, la Pan European est conçue pour les déplacements rapides et luxueux, 
			qu’il s’agisse de traverser les villes ou les continents. Elle avale longues distances et cols de montagne avec la même aisance,
			imposant aux amateurs de voyages intercontinentaux de nouveaux standards en matière de confort et de style. ';
			echo '</br></br>';
			echo 'Son équipement d’origine, ses nombreux accessoires optionnels,
			sa faible consommation associée à un généreux réservoir de 29 litres et le traitement qu’elle réserve à son équipage 
			en font une machine idéale pour prendre la route et y rester ! Son dessin aérodynamique a été étudié pour une pénétration 
			optimale dans l’air tandis que sa confortable selle, réglable en hauteur, vous garantit le confort indispensable à de longues journées de voyage. ';
		}
		
		if($_GET['modele'] == 'Goldwin')
		{
			echo 'Lancée en 1975, la Honda Goldwing célèbre dignement ses quatre décennies d’excellence avec ce millésime 2015 d’exception.
			Véritable "collector" indispensable aux inconditionnels du modèle, la Goldwing “40e anniversaire” se distingue par ses quatre coloris
			, en particulier sa somptueuse version bicolore avec cadre noir, ses emblèmes et ses clefs spécifiques. Sous cet habit d’apparat, 
			le navire amiral historique de la gamme Honda réaffirme les atouts qui en ont toujours fait un modèle à part : le fameux 6 cylindres
			à plat et son couple dévastateur, un confort, des équipements et une sécurité hors normes, une incroyable maniabilité et bien sûr cette
			prestance qui force toujours autant le respect. ';
			echo '</br></br>';
			echo 'Outre le Noir Graphite, le Blanc Pearl Glare et l’Argent Metallic, la Goldwing 2015 propose une version bicolore spéciale Rouge Candy
			/ Noir Graphite. Ces deux teintes sont séparées par un liseré argent tandis que les roues, le cadre, le bras oscillant et la fourche noirs
			mettent particulièrement en valeur les surfaces carmin. Sur l’avant du carénage, la sellerie et les clefs, des emblèmes spécifiques parachèvent 
			la signature de ce modèle de collection.';
		}
		
		if($_GET['modele'] == 'Z1000')
		{
			echo 'Les carénages sculptés et le design inspiré du concept “Sugomi” rendent la nouvelle Z1000 encore plus agressive
			et en font une moto unique, dépouillée de tout artifice afin de mettre en avant son côté bestial. 
			Les nouveaux réglages de châssis et de moteur, la tenue de route améliorée et l’expérience de pilotage poussée à son paroxysme 
			font de la Z1000 le roadster de grosse cylindrée le plus radical du marché. ';
			echo '</br></br>';
			echo 'Le système déchappement (avec une grande chambre de tranquillisation des gaz et des silencieux courts), la suspension arrière horizontale 
			Back-link et lutilisation de corps de papillons allégés sont les principaux facteurs de la centralisation des masses.  ';
		}
		
		if($_GET['modele'] == 'ZZR-1400')
		{
			echo 'Hier comme aujourd’hui, la ZZR 1400 fait partie d’une race qui a aujourd’hui quasiment disparu du monde moto :
			les super-bombardiers ultra-puissants. S’il n’en reste que deux aujourd’hui (cette Kawa et la Suzuki 1300 GSX-R), 
			elles n’en sont pas moins des figures emblématiques, derniers vestiges d’un culte à la puissance et à la démesure.
			La firme d’Akashi aurait pu se contenter de la laisser telle qu’elle au catalogue jusqu’à attendre une douce extinction...
			Mais non. La ZZR est un monument chez Kawa, et cette nouvelle version se veut encore plus musclée, encore plus aboutie, 
			encore plus exceptionnelle.';
			echo '</br></br>';
			echo ' A sa sortie, sa silhouette puissante et son regard fiévreux ont bousculé bien du monde. 
			Kawa a retouché un peu tout ça pour lui donner plus d’élan, plus de dynamisme, sans vraiment toucher à la ligne générale.
			Sauf son faciès qui devient moins difficile tout en gagnant en agressivité. Il menaçait avec la grâce d’un requin-pèlerin 
			percé d’yeux de tarentule ;  il menace aujourd’hui avec la seigneurie d’un grand requin blanc (le Carcharodon Carcharias). 
			On portera moins d’attention aux ouïes de ventilation plus saillantes, celles-ci améliorant pourtant la dissipation thermique du moteur. 
			Quand aux échappements, impossible de passer à cotés tant leur volume a pris de l’importance.
			Une évolution stylistique somme toute sommaire, alors qu’en dessous, la 1400 ZZR a été largement revue. ';
		}
		
		if($_GET['modele'] == 'VN-1700-Voyager')
		{
			echo 'Cest vrai que la grosse Kawasaki VN 1700 rappelle sans nul doute lune des plus illustres Harley Davidson :
			lElectra Glide. Un parti pris que les Verts défendent par le fait que cette configuration esthétique semble être la plus adaptée 
			pour une moto destinée au voyage.';
			echo '</br></br>';
			echo 'On trouve donc de nombreux points communs, dont le principal : lénorme tête de fourche équipé dun feu rond
			et de deux phares antibrouillard, le tout surplombé par un grand pare-brise. Cet élément est directement fixé au cadre et permet ainsi
			dalléger la direction. Un détail qui a son importance quand on sait que ce gros bébé pèse 406 kg !
			La plus balaise des Kawasaki na pas changé depuis quelque temps, mais chaque année les Japonais la parent dun nouveau coloris. En 2013, 
			lunique blanc "Pearl Crystal" et argent "Metallic Phantom" allège considérablement lallure de la moto. Revers de la médaille : 
			il est salissant et nécessitera un entretien fréquent. ';
		}
		
		if($_GET['modele'] == 'FJR-1300')
		{
			echo 'Au cours des dix dernières années, cette moto extrêmement fiable a permis à des milliers dutilisateurs de profiter de performances supersport et 
			dun exceptionnel confort pour le conducteur et le passager.

			Cette moto sportive avancée a été conçue pour parcourir de grandes distances dans un confort de premier plan. 
			Le moteur quatre cylindres en ligne de 1 298 cm³ et transmission par arbre délivre des performances exceptionnelles dun simple mouvement du poignet.

			Grâce à son réservoir de carburant de 25 litres, son carénage aérodynamique avec son pare-brise électronique,
			 son nouveau régulateur de vitesse et sa position de conduite réglable, la nouvelle FJR1300A vous transportera comme nulle autre moto.';
			echo '</br></br>';
			echo 'Équipée du système YCC-T pour une puissance régulière, le moteur avec quatre cylindres en ligne délivre des performances
			sportives exceptionnelles. Son haut rendement pour de fortes accélérations quel que soit le rapport et son carénage supérieur 
			vous permettent de parcourir des grandes distances sans difficultés. ';
		}
		
		if($_GET['modele'] == 'FZ1-Fazer')
		{
			echo 'Autant la Yamaha FZ1 se montre la reine des entrechats sur route accidentée, autant la Fazer peine dans les 
			chorégraphies compliquées. Pourtant, la partie-cycle reste identique, la Fazer accusant seulement un surplus de 
			poids au niveau de son demi-carénage et d’une coque arrière plus imposante pour y greffer d’amples poignées passager
			ainsi qu’une demi-selle rallongée.';
			echo '</br></br>';
			echo 'Mais les faits résistent à la théorie : dans les enchaînements serrés, la Fazer se montre définitivement plus
			pataude que sa sœur déshabillée. Cette inertie est toutefois beaucoup moins sensible que sur la version 2005.
			Elle a même gagné en maniabilité, grâce à un centre de gravité abaissé, une hauteur de selle réduite (de 5 mm),
			un angle de chasse plus fermé et 4 kg en moins.
			Cette nouvelle version routière peut également se prévaloir d’une meilleure protection avec une bulle plus haute, 
			bien qu’un peu étroite.  ';
		}
		
		if($_GET['modele'] == 'TDM-900')
		{
			echo '   Même si elle nest plus produite, la TDM 900 demeure au catalogue du constructeur, et sans larver en fond de stock.
			215 exemplaires ont été écoulés en 2013 soit 15 de plus que la célèbre YZF-R6. OVNI dans le monde de la moto, mélange de roadster, 
			de trail et de routière, cette machine attend gentiment la fin des stocks et surtout une relève à sa hauteur. La mouture actuelle date de 2010,
			sans changement depuis la grosse refonte 850 -> 900.
			Dacier sur la 850, le cadre double poutre fait désormais appel à laluminium, la fourche grossit de 41 à 43 mm et la monte pneumatique gagne en assurance :
			de 110 à 120 pour lavant et de 150 à 160 mm pour larrière. Comme beaucoup de machines du constructeur, 
			la TDM adopte un système de freinage étroitement dérivé de la R1. la boite passe enfin à 6 rapports, tout en gagnant en douceur de fonctionnement, 
			et leshétique gagne en élégance. Cest subtil mais certain. Le plus gros changement vient du bloc moteur. Il sagit toujours dun twin parallèle mais 
			bénéficiant de linjection et dont la cylindrée augmente de 48 cm3. Le couple progresse de plus de 1 mkg et la puissance de 9 ch. 
			Le moulin a plus de coffre sans pour autant changer de caractère. Les reprises sont meilleures mais on aurait apprécier plus denthousiasme 
			dans ses montées en régime. Légèrement en baisse , le confort général se maintient quand même à un bon niveau. Il faut dire que la moto est
			devenue plus efficace et plus rigoureuse. Il faut bien faire des concessions. Lesprit TDM demeure, la polyvalence étant son plus gros atout. 
			Plus de pêche et plus defficacité ; Que voulez vous de plus ?';
			echo '</br></br>';
			echo '  On veut un ABS ! Bon, si vous insistez. Yamaha le propose sur sa TDM depuis 2005. 
			Un système de conception analogue à celui de la FJR 1300. Comptez quelques centaines deuros et 3 kg de plus pour jouir dun freinage top sécurité.
			Une version GT est également disponible pour 1 000 euros de plus, comprenant valise, support de valise, bulle, protèges mains et déflecteurs.';
		}
		
	}
	else
	{
		require_once('presentation.php');
	}
?>
</div>

<div id="reservation">
<?php
	echo '<form name="Location" onSubmit="return VerificationLocation(this)" action="index.php?page=confirmation&form=location" method="post">';
		echo 'Login : <input type="text" name ="login" value="" /><br />';
		echo 'Date (jj/mm/aaaa) : <input type="date" name="date" id="date"></br>';
		
		echo '<input type="hidden" name="modele" value='.$_GET['modele'].'>';
		
		echo '<input type="submit" value="Valider">';
	echo '</form>';
?>
</div>