<?php
/*
=========================================================================
Intégration web III - TP1
-------------------------------------------------------------------------
Votre nom :
-------------------------------------------------------------------------
Cette page devrait contenir les tests des méthodes
- Inclure le fichier de la class Auto
- Inclure le fichier donnees.inc.php contenant les données des voitures
- Commencer par le fichier Auto.php
=========================================================================
*/
include_once("../src/Auto.php");
include_once("../src/donnees.inc.php");
/*LIGNE DE TEST*/
//echo Auto::titre('Ford', 'Fiesta', 'strong');

//var_dump(Auto::trouverModele($voitures,'Ford','Fiesta'));
//var_dump(Auto::trouverModele($voitures,'F','Fiesta'));
//var_dump(Auto::trouverModele($voitures,'Ford','Fita'));
// echo Auto::listeMarques($voitures);
var_dump(Auto::ligne_puissance($voitures['Ford']['Fiesta']));
//var_dump(Auto::ligne_couple($voitures['Ford']['Fiesta']));
//var_dump(Auto::ligne_transmissions($voitures['Ford']['Fiesta']));
//var_dump(Auto::ligne_consommation($voitures['Ford']['Fiesta']));
//echo Auto::affichageVoiture($voitures,'Ford','Fiesta');
//echo Auto::ariane('Ford','Fiesta');

//var_dump(Auto::image('Ford','Fiesta')); 
//echo Auto::image('Ferrari','California', 'patate');
//echo Auto::lien('Ferrari','California');
//echo $voitures['Ford'];
//var_dump(Auto::listesMarques())

// ... CONTINUER ...
