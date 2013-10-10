<?php
use Sujet2\DevSpeBundle\Entity\Etudiant;
use Sujet2\DevSpeBundle\Entity\Enseignant;
use Sujet2\DevSpeBundle\Entity\Entreprise;
use Sujet2\DevSpeBundle\Entity\Lot;
use Sujet2\DevSpeBundle\Entity\Stage;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\SecurityBundle\Entity\User;
class CsvController extends Controller {
	function moulinetteCode(string $csvpath, int $code) {
		
		// Import du fichier CSV
		if ($handle = fopen ( $csvpath ) !== FALSE) {
			
			// De CSV � Tableau
			while ( $data = fgetcsv ( $handle, "," ) !== FALSE ) {
				
				// Appelle fonction pour aller de Tableau � BDD
				toBdd ( $data, $code );
			}
		}
	}
	
	// De Tableau � BDD
	
	// Fonction si l'on choisit que l'utilisateur donne le contenu du CSV via un formulaire
	function toBdd(array $tab, int $code) {
		
		// Cas o� le code correspond � la table Etudiant
		if ($code == 1) {
			setEtudiant ( $tab );
		}
		// Cas o� le code correspond � la table Enseigant
		if ($code == 2) {
			setEnseignant ( $tab );
		}
		// Cas o� le code correspond � la table Stage
		if ($code == 3) {
			setStage ( $tab );
		}
		// Cas o� le code correspond � la table Entreprise
		if ($code == 4) {
			setEntreprise ( $tab );
		}
	}
	function setEtudiant(array $tab) {
		$em = $this->getDoctrine ()->getManager ();
		
		// On v�rifie que l'�tudiant n'existe pas d�j�, si il existe, on le met � jour avec les nouvelles donn�es re�ues
		$etudiant = $em->find ( 'Sujet2DevSpeBundle:Etudiant', $tab [0] );
		
		// S'il n'existe pas, on cr�e un nouvel �tudiant
		if ($etudiant == NULL) {
			$etudiant = new Etudiant ();
			$etudiant->setId ( $tab [0] );
		}
		
		$etudiant->setEtudNom ( $tab [1] );
		$etudiant->setEtudPrenom ( $tab [2] );
		$em->persist ( $etudiant );
		$flush ();
	}
	function setStage(array $tab) {
		$em = $this->getDoctrine ()->getManager ();
		
		// V�rification de l'existant
		$stage = $em->find ( 'Sujet2DevSpeBundle:Stage', $tab [0] );
		
		// Cr�ation si inexistant
		if ($stage == NULL) {
			$stage = new Stage ();
			$stage->setId ( $tab [0] );
			
			// R�cup�ration de tous les lots se situant dans la m�me entreprise
			$repo = $this->getDoctrine ()->getRepository ( 'Sujet2\DevSpeBundle\Sujet2DevSpeBundle:Lot' );
<<<<<<< HEAD
			$query = $repo->createQueryBuilder ( 'l' )->where ( 'l.id = :entreprise' )->setParameter ( 'entreprise', $tab [3] )->getQuery ();
=======
			$query = $repo->createQueryBuilder ( 'l' )->where ( 'l.entreprise = :entreprise' )->setParameter ( 'entreprise', $tab [3] )->getQuery ();
>>>>>>> 1044f5c55a9e9ccbbb9e2b616ae8eebea2513595
			
			$lots = $query->getResult ();
			
			// V�rification des tuteurs pour voir si le stage fait parti du m�me lot.
			if (count ( $lots ) > 0) {
				foreach ( $lots as $l ) {
					$tuteur = $l->getTutCiv () + " " + $l->getTutPrenom () + " " + $l->getTutNom ();
					
					// Si le tuteur est identique, on ajoute le stage au lot
					if ($tuteur = $tab [8]) {
						
						$stage->setLot ( $l );
						$em->persist ( $stage );
						$em->flush ();
					} 					

					// L'entreprise a deja des lots, mais le tuteur ne suit aucun stage = on cr�e un nouveau lot
					else {
						$lot = new Lot ();
						
						// D�coupe la d�nomination compl�te en Civilit�/Nom/Pr�nom
						$infos = explode ( " ", $tab [8] );
						$lot->setTutCiv ( $infos [0] );
						$lot->setTutNom ( $infos [2] );
						$lot->setTutPrenom ( $infos [1] );
						
						// R�cup�ration de l'entreprise � partir du CSV
							//R�cup entreprise <------------------------------------------------------------
						
						$lot->setEntreprise ( $tab [3] );
						
						$stage->setLot ( $lot );
						
						$em->persist ( $lot );
						$em->persist ( $stage );
						$em->flush ();
					}
				}
				
				// L'entreprise n'a aucun lot
			} else {
				$lot = new Lot ();
				
				// D�coupe la d�nomination compl�te en Civilit�/Nom/Pr�nom
				$infos = explode ( " ", $tab [8] );
				
				$lot->setTutCiv ( $infos [0] );
				$lot->setTutNom ( $infos [2] );
				$lot->setTutPrenom ( $infos [1] );
				
				// R�cup�ration de l'entreprise � partir du CSV
				$lot->setEntreprise ( $tab [3] );
				
				$stage->setLot ( $lot );
				
				$em->persist ( $lot );
				$em->persist ( $stage );
				$em->flush ();
			}
		}
	}
	function setEnseignant(array $tab) {
		$em = $this->getDoctrine ()->getManager ();
		
		$enseignant = $em->find ( 'Sujet2DevSpeBundle:Enseignant', $tab [0] );
		
		if ($enseignant == NULL) {
			
			$enseignant = new Enseignant ();
			$enseignant->setId ( $tab [0] );
			
			$user = new User ();
			$user->setPassword ( "1234" );
			$user->setUsername ( $tab [1] );
			$user->setEnseignant ( $enseignant );
			$user->setAdmin(false);
			
			$em->persist ( $user );
		}
		
		$enseignant->setEnsNom ( $tab [1] );
		$enseignant->setEnsPrenom ( $tab [2] );
		
		$em->persist ( $enseignant );
		$em->flush ();
	}
	function setEntreprise(array $tab) {
		$em = $this->getDoctrine ()->getManager ();
		
		$entreprise = $em->find ( 'Sujet2DevSpeBundle:Entreprise', $tab [0] );
		
		if ($entreprise == NULL) {
			$entreprise = new Entreprise ();
			$entreprise->setId ( $tab [0] );
		}
		
		$entreprise->setEntRS ( $tab [1] + " " + $tab [2] );
		$entreprise->setEntAdr ( $tab [3] + " " + $tab [4] );
		$entreprise->setEntCp ( $tab [5] );
		$entreprise->setEntTel ( $tab [6] );
		$entreprise->setEntVille ( $tab [7] );
		$entreprise->setEntPays ( $tab [10] );
		
		$em->persist ( $entreprise );
		$em->flush ();
	}
}





