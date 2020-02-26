<?php
/*
=========================================================================
Intégration web III - TP1
-------------------------------------------------------------------------
Votre nom :
-------------------------------------------------------------------------
Cette page affiche une auto en fonction de la marque et de l'adresse fournis dans l'adresse
- Inclure le fichier de la class Auto
- Inclure le fichier donnees.inc.php contenant les données des voitures
- Commencer par le fichier Auto.php

- Cette page s'attend à recevoir de l'adresse les données "nomMarque" et "nomModele". Il faut donc récupérer ces données.
- S'il manque une de ces deux données dans l'adresse, on DOIT retourner à la page index.php
- Récupérer la voiture correspondante
- Si la voiture ne se trouve pas dans la variable $voitures, on DOIT retourner à la page index.php
=========================================================================
*/


?><!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8" />
	<link rel="stylesheet" href="css/autoguide.css" />
	<!-- /* Faire afficher le titre de la voiture ici (dans un title); */ -->
	<title>Ferrari California</title>
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
				<li><a href="marque.php?nomMarque=Ferrari">Ferrari</a></li>
				<li><span>California</span></li>
			</ul>
		</nav>
		<section class="body">
			<article>
				<header>
					<!-- /* Faire afficher le titre de la voiture ici (dans un h1); */ -->
					<h1>Ferrari California</h1>
				</header>
				<!-- /* Faire afficher la voiture ici; */ -->
				<div class="voiture"><img class="voiture" src="images/voitures/ferrari_california.jpg"
						alt="Ferrari California" title="Ferrari California" />
					<h2>Prix de base</h2>
					<div class="prix">192000 $</div>
					<h2>Caractéristiques</h2>
					<table class="caracteristiques">
						<tr>
							<td class="etiquette">Moteur : </td>
							<td>V8 4,3 litres</td>
						</tr>
						<tr>
							<td class="etiquette">Puissance : </td>
							<td>460 ch @ 7750 tr/min</td>
						</tr>
						<tr>
							<td class="etiquette">Couple : </td>
							<td>358 lb-pi @ 5000 tr/min</td>
						</tr>
						<tr>
							<td class="etiquette">Transmissions : </td>
							<td>
								<ul class="transmissions">
									<li>Séquentielle</li>
									<li>Manuelle, 6 rapports</li>
								</ul>
							</td>
						</tr>
						<tr>
							<td class="etiquette">Consommation : </td>
							<td>
								<ul class="consommation">
									<li>Ville : 16.9 litres/100 km</li>
									<li>Autoroute : 10.6 litres/100 km</li>
								</ul>
							</td>
						</tr>
					</table>
				</div>
			</article>
		</section>
		<!-- /* Inclure le footer ici */ -->
		<footer>
			&copy; 2020 - Travail fait dans le cadre du cours <cite>Intégration Web III</cite>
		</footer>
	</div>
</body>

</html>