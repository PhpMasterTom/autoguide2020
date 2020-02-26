<?php
/*
=========================================================================
Intégration web III - TP1
-------------------------------------------------------------------------
Votre nom :
-------------------------------------------------------------------------
Cette page affiche la liste des modèles en fonction de la marque fournie dans l'adresse
- Inclure le fichier de la class Auto
- Inclure le fichier donnees.inc.php contenant les données des voitures (crée la variable $voitures)
- Commencer par le fichier Auto.php

- Cette page s'attend à recevoir de l'adresse la donnée "nomMarque". Il faut donc récupérer cette donnée.
- S'il manque la marque dans l'adresse, on DOIT retourner à la page index.php
- Si la marque ne se trouve pas dans la variable $voitures, on DOIT retourner à la page index.php
=========================================================================
*/


?>
<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8" />
	<link rel="stylesheet" href="css/autoguide.css" />
	<!-- /* Faire afficher le nom de la marque dans le title; */ -->
	<title>Ford</title>
</head>

<body>
	<div class="interface">
		<!-- /* Inclure le header ici */ -->
		<header>
			<h1><a href="index.php">AutoGuide.qc</a></h1>
		</header>
		<!-- /* Faire afficher le fil d'Ariane ici; */ -->
		<nav id="ariane">
			<ul>
				<li><a href="index.php">Accueil</a></li>
				<li><span>Ferrari </span></li>
			</ul>
		</nav>
		<section class="body">
			<article>
				<header>
					<!-- /* Faire afficher le nom de la marque dans le h1; */ -->
					<h1>Ferrari</h1>
				</header>
				<!-- /* Faire afficher la liste de modèles ici; */ -->
				<ul class="listeModeles">
					<li><a href="modele.php?nomMarque=Ferrari&amp;nomModele=California"><img class="tb"
								src="images/voitures/ferrari_california_tb.jpg" alt="Ferrari California"
								title="Ferrari California" /><span>California</span></a></li>
				</ul>
			</article>
		</section>
		<!-- /* Inclure le footer ici */ -->
		<footer>
			&copy; 2020 - Travail fait dans le cadre du cours <cite>Intégration Web III</cite>
		</footer>

	</div>
</body>

</html>