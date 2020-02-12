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

var_dump(Auto::trouverModele($voitures,'Ford','Fiesta'));
var_dump(Auto::trouverModele($voitures,'F','Fiesta'));
var_dump(Auto::trouverModele($voitures,'Ford','Fita'));

// ... CONTINUER ...
