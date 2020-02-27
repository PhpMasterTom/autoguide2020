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
include "../src/Auto.php";
include '../src/donnees.inc.php';

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
		<?php include '../components/header.php';?>
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
				<?php 
				$nomMarque = $_GET['nomMarque'];
				if(isset($voitures[$nomMarque])){
					echo Auto::listeModeles($nomMarque,$voitures[$nomMarque]);
				}else{
					header("location:index.php");
				}
if (isset($_GET['recherche'])){
  $recherche = $_GET['recherche'];
}else{
  $recherche = '';
}
*/
			
					?>
			</article>
		</section>
		<!-- /* Inclure le footer ici */ -->
		<?php include '../components/footer.php';?>

	</div>
</body>

</html>