<!-- 
	Voici la page d'acceuil, mais aussi de présentation de ladite entreprise. En metttant la description de celle ci(nous avons pris la description de Yamaha), une image, 
	et des informations sur le personnel.
	On a utilisé encore une fois des balises "<div>" afin de pouvoir placer l'image et d'adapter le texte pour qu'il s'aligne a côté de
	celui-ci (grâce a un système de boites flottantes.).
	En dessous de la desciption de l'entreprise nous avons fait un tableau qui contient le nom et prénom des employés avec la profession qui leur correspond
	(en soignant l'affichage grace à "ucwords(str_replace('-',' ',$nom))" qui permet de mettre une majuscule au debut de chaque mot et de changer les "-" en espace.).
	Afin d'afficher toutes les personnes nous avons encore une fois utilisé un foreach qui nous permet de récupérer à la fois la clé et aussi la valeur qui lui 
	correspond.
-->

<div id='magasin'>
	<img src='Images/magasin.jpg'>
</div>
<div id='info'>
	Motodream </br>
	32 rue des platanes </br>
	80000 Amiens </br>
	Près de la colinne argentée </br></br>
	Sous le nom de Yamaha Organ Manufacturing, elle a été fondée en 1887 par Torakusu Yamaha à Hamamatsu dans la préfecture de Shizuoka. Torakusu Yamaha, horloger et mécanicien, avait remporté un franc succès en réparant l'harmonium d'une des écoles de la ville. L'entreprise vendit cette année-là 250 instruments. En 1897, elle fut rebaptisée Nippon Gakki Co., Ltd. (Nippon Gakki Seïzo Kabushiki Kwaïsha) dans le but de se lancer dans la fabrication d'autres instruments.
	</br></br>
	En 1900, Yamaha revient des États-Unis après une année passée à apprendre le métier de facteur de piano. L'entreprise se met alors à vendre ses premiers pianos droits, et deux ans plus tard des pianos à queue. Forte de ce succès, elle continue donc de se diversifier en fabriquant d'autres instruments : harmonicas, xylophones, etc... Torakusu Yamaha, meurt à Tokyo le 8 août 1916, à l'âge de 65 ans.
	</br>
	En 1930, la Nippon Gakki crée son propre laboratoire d'acoustique. Durant la deuxième guerre mondiale, l'entreprise est forcée de fabriquer des hélices d'avions et de 1944 à 1947 elle ne produira plus aucun instrument. Après la guerre, la croissance économique est importante, la société planche sur différents produits lui permettant de se diversifier (machine à coudre, automobile, etc.).
	</br></br>
	En 1955, Nippon Gakki est rebaptisée Yamaha en l'honneur de son fondateur et lance sa première motocyclette, l'YA-1.
	</br>
	En octobre 1987 Yamaha rachète le fabricant de batteries et percussions anglais Premier Percussion Limited, et le revend en février 1995.
	</br>
	Yamaha achète Korg en 1989, qui en 1993 redeviendra une société complètement indépendante en rachetant les parts de Yamaha.
	</br>
	Yamaha achète Steinberg en 2004 et rachète aussi Motobécane-Motoconfort.
	</br>
	En 2001, lors de la création de Yamaha Motor Corporation, l'activité motos et moteurs se sépare. Cette scission se fait par échange d'actions avec Toyota.
	</br>
	Le logo de la marque, qui représente trois diapasons entrecroisés, rappelle les débuts de cette entreprise qui aujourd'hui est l'un des deux plus grands fabricants de pianos au monde, environ 130 000 unités par an.
	
</div>
<?php
	$tab=array(
		'jacques-etienne'=>'vendeur moto',
		'jean-robert'=>'vendeur moto',
		'pierre-michel'=>'vendeur moto',
		'roger-andré'=>'vendeur équipements et accessoires',
		'michel-charles'=>'vendeur équipements et accessoires',
		'martin-pierre'=>'vendeur équipements et accessoires',
		'dupond-kevin'=>'vendeur équipements et accessoires',
		'desliens-maxime'=>'mecanicien',
		'roger-jean'=>'mecanicien',
		'alexandre-david'=>'mecanicien',
		'depouille-arthur'=>'mecanicien');
?>
<table>
	<tr>
		<th> Nom Prénom</th>
		<th> Poste</th>
	</tr>
	<?php
		foreach($tab as $nom => $poste)
		{
			echo '<tr>';
			echo '<td>'.ucwords(str_replace('-',' ',$nom)).'</td>';
			echo '<td>'.ucwords($poste).'</td>';
			echo '</tr>';
		}
	?>
</table>

	