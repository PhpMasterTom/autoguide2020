<?php
/*
=========================================================================
Intégration web III - TP1
-------------------------------------------------------------------------
Votre nom :
-------------------------------------------------------------------------
- Compléter les méthodes suivantes
- Toutes les méthodes sont statiques
- Conseils :
	- Commencer par créer toutes les méthodes vides avec les bons paramètres et la bonne valeur de retour
	- Faire chaque méthode en oubliant le contexte dans lequel elles seront utilisées. "Elles prennent des données et retournent une valeur. Point final!"
	- Tester CHAQUE méthode individuellement en ajoutant une ligne de test dans la page test.php
*/
class Auto {
	static public function isItLegit($infoA,$infoB,$infoC,$infoD){
		
	}
	/** Méthode "titre" qui retourne le titre d'une voiture dont la marque et le modele sont passés en paramètres.
	 * Le résultat peut être envelopée ou non d'une balise dont le nom est passé en paramètre.
	 * Notes:
	 * - Il n'y a pas de validation de la combinaison. On pourrait donc avoir une "Ferrari Focus"
	 * - Si une $balise est fournie, on retourne le titre sous le modele suivant "<p>Ferrari Focus</p>"
	 *   en utilisant le nom de la balise donnée en paramètre
	 * - Si une $balise n'est pas fournie, on retourne le titre seulement. ex.: "Ferrari Focus"
	 * @param string $nomMarque - La marque de voiture
	 * @param string $nomModele - Le modele de voiture Valeur par défaut : ""
	 * @param string $balise - Le nom de la balise devant envelopper le titre. Valeur par défaut : ""
	 * @return string - Le titre mis en forme
	*/
	static public function titre($nomMarque, $nomModele="", $balise="") {
		$resultat = $nomMarque;
		if ($nomModele) { // !=
			$resultat .= " ".$nomModele;
		}
		if ($balise != "") { // !=
			$resultat = '<'.$balise.'>'.$resultat.'</'.$balise.'>';
		}
		return $resultat;
	}

	/** Méthode "trouverModele" qui retourne le array représentant un modele de voiture.
	 * En fonction de la marque et du modele envoyé en paramètres.
	 * Si la marque n'existe pas ou le modele n'existe pas pour cette marque, on retourne false
	 * @param array $autos - Le array contenant les autos
	 * @param string $nomMarque - La marque à rechercher
	 * @param string $nomModele - Le modele à rechercher dans la marque
	 * @return array - Le array du modele ou false
	 */
	static public function trouverModele($autos, $nomMarque, $nomModele){
		if(!(isset($autos[$nomMarque]) && isset($autos[$nomMarque][$nomModele]))){
			return false;
		}
		
		$resultat = $autos[$nomMarque][$nomModele];
		return $resultat;
	}

	/** Méthode "ariane" qui retourne le HTML du fil d'Ariane se trouvant DANS le div "menu"
	 * Notes :
	 * - Si une $nomMarque est fournie, on retourne le titre de la voiture et un lien vers index maquette(voir la )
	 * - Si une $nomMarque n'est pas fournie, on ne retourne que le mot "Accueil" (voir la maquette)
	 * @param string $nomMarque - La marque de voiture. Valeur par défaut : "".
	 * @param string $nomModele - Le modele de voiture. Valeur par défaut : "".
	 * @return string - Le HTML du fil d'Ariane
	 */
	static public function ariane($nomMarque=false, $nomModele=""){ // NON FINI
		$resultat = '';
		$resultat .= '<nav id="ariane">';
		$resultat .= '<ul>';
		if($nomMarque){
			$resultat .= '<li><span><a href="index.php">Accueil</a></span></li>';
			if($nomModele) {
				$resultat .= '<li><span><a href="marque.php">'.$nomMarque.'</a></span></li>';
				$resultat .= '<li><span>'.$nomModele.'</span></li>';
			}else{
				$resultat .='<li><span>'.$nomMarque.'</span></li>';
			}
		}else{
			$resultat .= '<li><span>Accueil</span></li>';
		}
		$resultat .= '</ul>';
		$resultat .= '</nav>';
		//(isset($autos[$nomMarque]) && isset($autos[$nomMarque][$nomModele]))? $resultat = isset($autos[$nomMarque]).' '. isset($autos[$nomMarque][$nomModele] : $resultat = 'Accueil';
		return $resultat;
	}

	 
	/** Méthode "lien" qui retourne le code HTML d'un lien retrouvé dans la page index
	 * qui permet d'afficher les détails d'une voiture
	 * @param string $nomMarque - La marque de voiture
	 * @param string $nomModele - Le modele de voiture
	 * @return string - Le HTML dw la balise <a>
	 */

	static public function lien($nomMarque,$nomModele){
		return '<a href="modele.php?nomMarque='.$nomMarque.'&amp;nomModele='.$nomModele.'"><span>'.$nomModele.'</span>'.self::image($nomMarque, $nomModele).'</a>';
	}


	/** Méthode "image" qui retourne le code HTML d'une image composé en fonction des paramètres
	 * et en suivant le modèle suivant : <img src="images/voitures/ford_fiesta.jpg" class="voiture" alt="Ford Fiesta" title="Ford Fiesta" />
	 * Note : Cette méthode utilise la méthode "titre"
	 * Note : Le nom du fichier est en minuscule. Vous n'avez pas à vérifier la
	 * validité de la combinaison modele/marque ni l'existence du fichier
	 * @param string $nomMarque - La marque de voiture
	 * @param string $nomModele - Le modele de voiture
	 * @param string $class - La classe à donner à la balise. Valeur par défaut: "voiture". Note: Si la classe est différente de "voiture", le nom de l'image doit automatiquement être accompagné du suffixe "_tb"
	 * @return string - Le HTML de la balise <img>
	 */
	static function image($nomMarque, $nomModele, $class = "voiture"){
		return '<img src="images/voitures/'.$nomMarque.'_'.$nomModele.''.($class != "voiture"? '_tb' : '').'.jpg" class="'.$class.'" alt="'.$nomMarque.' '.$nomModele.'" title="'.self::titre($nomModele, $nomMarque,'strong').'" />';
	}


	/** Méthode "listeMarques" qui retourne le HTML du ul "listeMarques"
	 * contenant la liste des voitures (voir maquette, page index.php) en fonction du paramètre
	 * @param array $autos - Le array contenant les autos
	 * @return string - Le HTML du div "listeMarques"
	 */
	static public function listeMarques($autos){
		$resultat = '';
		$resultat .= '<ul class="listeMarques">';
		foreach($autos as $nomMarque => $infoMarque){
			$resultat .= '<li><a href="marque.php?nomMarque='.$nomMarque.'">'.$nomMarque.'</a>';
			$resultat .= self::listeModeles($nomMarque,$infoMarque);
			$resultat .= '</li>';
		}
		$resultat .= '</ul>';
		return $resultat; // PAS FINI
	}
	//listesModeles();
	// foreach($autos[$nomAuto] as $idModeleAuto => $nomModeleAuto){ //function listeModele($idAuto, $nomAuto);
	// 	$resultat .= '<li><a href="modele.php?nomMarque='.key($autos).'&amp;nomModele='.key($nomAuto).'"><img class="tb"';
	// 	$resultat .= 'src="images/voitures/'.key($autos).'_'.$nomModeleAuto.'_tb.jpg" alt="'.key($nomAuto).' '.$nomModeleAuto.'"';
	// 	$resultat .= 'title="'.key($nomAuto).' '.key($nomAuto).'" /><span>'.key($nomAuto).'</span></a></li>';
	// 	//listesModeles($nomAuto, $auto[$nomAuto]);
	// 	// <ul class="listeModeles">
	// 	// 	<li><a href="modele.php?nomMarque=Ferrari&amp;nomModele=California"><img class="tb"
	// 	// 				src="images/voitures/ferrari_california_tb.jpg" alt="Ferrari California"
	// 	// 				title="Ferrari California" /><span>California</span></a></li>
	// 	// </ul>
	// }
	//tableau = [
		//1 porte,
 //2 char,
 //];

	 /** Méthode "listeModeles" qui retourne le HTML du ul "listeModeles"
	 * contenant la liste des voitures (voir maquette, page index.php) en fonction des paramètres
	 * @param array $nomMarque - Le nom de la marque à parcourir
	 * @param array $autosMarque - Le array contenant les autos
	 * @return string - Le HTML du ul "listeModeles"
	 */
	static public function listeModeles($nomMarque,$autosMarque){
		$resultat = '';
		$resultat .= '<ul class="listeModeles">';
		foreach($autosMarque as $nomModele => $infoModele){
			$resultat.='<li><a href="modele.php?nomMarque='.$nomMarque.'&amp;nomModele='.$nomModele.'"><img class="tb"';
			$resultat.='src="images/voitures/'.$nomMarque.'_'.$nomModele.'_tb.jpg" alt="'.$nomMarque.' '.$nomModele.'"';
			$resultat.='title="'.$nomMarque.' '.$nomModele.'" /><span>'.$nomModele.'</span></a></li>';
		}
		$resultat .= '</ul>';
		return $resultat;
	}
	


	/**	Méthode "ligne" qui retourne une ligne (<tr>) du tableau des caractéristiques
	 * en fonction des paramètres (voir maquette, page modele.php)
	 * @param string $etiquette - Le contenu de la première cellule
	 * @param string $contenu - Le contenu de la deuxième cellule
	 * @param string - Le HTML du tr
	 */
	static public function ligne($etiquette, $contenu){
		$resultat = '<tr>';
		$resultat .= '<td class="etiquette">'.$etiquette.'</td><br>';
		$resultat .= '<td>'.$contenu.'</td>';
		$resultat .= '</tr><br>';


		return $resultat;
	}


	/** Méthode "ligne_puissance" qui retourne lao ligne de la puissance (2e ligne) de la viture
	 * en lui donnant le format adéquat (voir maquette, page modele.php)
	 * Note : Cette méthode utilise la méthode "ligne"
	 * @param array $voiture - Le array représentant la voiture (un modèle)
	 * @param string - Le HTML du tr
	 */
	static public function ligne_puissance($voiture){
		$t_puissance = explode(':',$voiture['puissance']);
		$resultat = $t_puissance[0].' ch @ '.$t_puissance[1];
		$resultat = self::ligne('Puissance :', $resultat);

		return $resultat;
	}


	/** Méthode "ligne_couple" qui retourne la ligne du couple de la voiture (3e ligne)
	 * en lui donnant le format adéquat (Note : Utilise la méthode "ligne")
	 * Note : Cette méthode utilise la méthode "ligne"
	 * @param array $voiture - Le array représentant la voiture (un modèle)
	 * @param string - Le HTML du tr
	 */
	static public function ligne_couple($voiture){
		$t_couple = explode(':',$voiture['couple']);
		$resultat = $t_couple[0].' lb-pi @ '.$t_couple[1].' tr/min';
		$resultat = self::ligne('Couple :', $resultat);

		return $resultat;
	}

	/** Méthode "ligne_transmissions" qui retourne la ligne des transmissions disponibles (voir maquette, page modele.php)
	 * Note : Cette méthode utilise la méthode "ligne"
	 * @param array $voiture - Le array représentant la voiture
	 * @return string - Le HTML du tr
	 */
	static public function ligne_transmissions($voiture){
		$t_transmissions = $voiture['transmissions'];
		$infoTransmissions = '';
		$infoTransmissions .= '<ul class="transmissions">';
		foreach($t_transmissions as $idTransmissions => $typeTransmissions) $infoTransmissions .= '<li>'.$typeTransmissions.'</li>';
		$infoTransmissions .= '</ul>';
		$resultat = self::ligne('Transmissions :', $infoTransmissions);
		
		return $resultat;
	}

	/** Méthode "ligne_consommation" qui retourne la ligne de la consommation (en ville et sur autoroute) de la voiture (voir maquette, page modele.php)
	 * Note : Cette méthode utilise la méthode "ligne"
	 * @param array $voiture - Le array représentant la voiture
	 * @return string - Le HTML du tr
	 */
	static public function ligne_consommation($voiture){
		$t_consommation = $voiture['consommation'];
		$infoConsommation = '';
		$infoConsommation .= '<ul class="consommation">';
		foreach($t_consommation as $idconsommation => $typeconsommation) $infoconsommation .= '<li>'.$typeconsommation.'</li>';
		$infoConsommation .= '</ul>';
		$resultat = self::ligne('Consommation :', $infoConsommation);
		
		return $resultat;



		// $resultat = '';
		// $resultat .= '<tr>';
		// $resultat .= '<td class="etiquette">Consommation : </td>';
		// $resultat .= '<td>';
		// $resultat .= '<ul class="consommation">';
		// $resultat .= '<li>Ville : 16.9 litres/100 km</li>';
		// $resultat .= '<li>Autoroute : 10.6 litres/100 km</li>';
		// $resultat .= '</ul>';
		// $resultat .= '</td>';
		// $resultat .= '</tr>';
	}
	

	/** Méthode "affichageVoiture" qui retourne le div "voiture" contenant la description d'une voiture
	 * en fonction des paramètres (voir maquette, page modele.php)
	 * Note : Cette méthode utilise des méthodes créées précédemment
	 * @param array $voiture - Le array représentant la voiture
	 * @param string $nomMarque - La marque à rechercher
	 * @param string $nomModele - Le modele à rechercher dans la marque
	 * @param string - Le HTML du div "voiture"
	 */
	static public function affichageVoiture($voiture, $nomMarque, $nomModele){
		$resultat = self::image($nomMarque, $nomModele);
		$resultat .= '<h2>Prix de base</h2>';
		$resultat .= '<div class="prix">'.$voiture[$nomMarque][$nomModele]['prix'].'$</div>';
		$resultat .= '<h2>Caractéristiques</h2>';
		$resultat .= self::ligne('Moteur : ',$voiture[$nomMarque][$nomModele]['moteur']);
		$resultat .= self::ligne_puissance($voiture[$nomMarque][$nomModele]);
		$resultat .= self::ligne_couple($voiture[$nomMarque][$nomModele]);
		$resultat .= self::ligne_transmissions($voiture[$nomMarque][$nomModele]);
		$resultat .= self::ligne_consommation($voiture[$nomMarque][$nomModele]);
		
		return $resultat;
		
		// $resultat = '';
		// $resultat .= '';
		// $resultat .= '<div class="voiture"><img class="voiture" src="images/voitures/ferrari_california.jpg"';
		// $resultat .= 'alt="Ferrari California" title="Ferrari California" />';
		// $resultat .= '<h2>Prix de base</h2>';
		// $resultat .= '<div class="prix">192000 $</div>';
		// $resultat .= '<h2>Caractéristiques</h2>';
		// $resultat .= '<table class="caracteristiques">';
		// $resultat .= '<tr>';
		// $resultat .= '<td class="etiquette">Moteur : </td>';
		// $resultat .= '<td>V8 4,3 litres</td>';
		// $resultat .= '</tr>';
		// $resultat .= '<tr>';
		// $resultat .= '<td class="etiquette">Puissance : </td>';
		// $resultat .= '<td>460 ch @ 7750 tr/min</td>';
		// $resultat .= '</tr>';
		// $resultat .= '<tr>';
		// $resultat .= '<td class="etiquette">Couple : </td>';
		// $resultat .= '<td>358 lb-pi @ 5000 tr/min</td>';
		// $resultat .= '</tr>';
		// $resultat .= '<tr>';
		// $resultat .= '<td class="etiquette">Transmissions : </td>';
		// $resultat .= '<td>';
		// $resultat .= '<ul class="transmissions">';
		// $resultat .= '<li>Séquentielle</li>';
		// $resultat .= '<li>Manuelle, 6 rapports</li>';
		// $resultat .= '</ul>';
		// $resultat .= '</td>';
		// $resultat .= '</tr>';
		// $resultat .= '<tr>';
		// $resultat .= '<td class="etiquette">Consommation : </td>';
		// $resultat .= '<td>';
		// $resultat .= '<ul class="consommation">';
		// $resultat .= '<li>Ville : 16.9 litres/100 km</li>';
		// $resultat .= '<li>Autoroute : 10.6 litres/100 km</li>';
		// $resultat .= '</ul>';
		// $resultat .= '</td>';
		// $resultat .= '</tr>';
		// $resultat .= '</table>';
		// $resultat .= '</div>';
	}

}