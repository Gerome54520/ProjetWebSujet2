<?php

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\ORM\Query\Expr\Select;
use Doctrine\ORM\Query\AST\WhereClause;
use Sujet2\DevSpeBundle\Entity\SessionUt;

class Calculateur extends Controller{
	
	function calcul ($id){
		
		$em = $this->getDoctrine()->getEntityManager();
		$voeux = $em->find('Sujet2\DevSpeBundle\Sujet2DevSpeBundle:Voeux', $id);
		
				$ajout = false;
				$point = 0;
		
		$lot = $voeux[0]->getLot();
		
		
		//Requête pour récupérer les contraintes dans tableaucontrainte + leur nombre
			
		$sessions = $em->createQueryBuilder()->select('s')->from('Sujet2\DevSpeBundle\Sujet2DevSpeBundle:SessionUt', 's')->where('s.lot = :lot')->setParameter('lot', $lot->getId())->getQuery()->getResult();
		$paramId = $sessions[0]->getParametre()->getId();

		$contraintesTps = $em->createQueryBuilder()->select('c')->from('Sujet2\DevSpeBundle\Sujet2DevSpeBundle:Contrainte', 'c')->where ('c.Parametre= :id')->setParameter('id', $paramId)->andWhere('c.typePts = :type')->setParameter('type', 1)->orderBy('c.pts', 'DESC')->getQuery()->getResult();
		$nombreContrTps = count($contraintesTps);
		
		$contraintesSuivi = $em->createQueryBuilder()->select('c')->from('Sujet2\DevSpeBundle\Sujet2DevSpeBundle:Contrainte', 'c')->where ('c.Parametre= :id')->setParameter('id', $paramId)->andWhere('c.typePts = :type')->setParameter('type', 2)->orderBy('c.pts', 'DESC')->getQuery()->getResult();
	
					
		// Requête pour récupérer le nombre de stage du lot dans la variable nombrestage
		$nombreStage = getNombreStage($id);
	 	
		//Récupérer les kilomètres maxi dans distanceMaxi dans paramètre
		$distanceMax = $sessions[0]->getParametre()->getDistMax();
		
		//Récupérer dans Voeux le temps du trajet
		$tps = $voeux->getTempsTrajet();
		$km = $voeux->getDistance();
		
		$demi = $em->createQueryBuilder()->select('c')->from('Sujet2\DevSpeBundle\Sujet2DevSpeBundle:Contrainte', 'c')->where('c.plus = :plus')->setParameter('plus', true)->getQuery()->getResult();
					
			for($i = 1; $i<$nombreStage; $i++){
				$point = $point + $contraintesSuivi[i-1];
			
				if ($km<$distanceMaxi){
					if ($tps > $contraintesTps[$nombreContrTps]->getNombre()){
						$point = $point + $contraintesTps[$nombreContrTps]->getPts();
						$tps = $tps -  $contraintesTps[$nombreContrTps]->getNombre();
						
						while(tps>0){
							$point = $point + $demi[0];				
							$tps = $tps - 30;
						}
					}
					else {
						for ($j = 1 ; $j<$nombreContrTps;$i++){
							if($tps<$contraintesTps[j]->getNombre && !$ajout){
								$point = $point + $contraintesTps[j]->getPts();
								$ajout = true;
							}
						}
					}
				}
				
				
			}
			return $point;
	}
	
	function getNombreStage($id){
		
		$em = $this->getDoctrine()->getEntityManager();			
		$stages= $em->getRepository('Sujet2\DevSpeBundle\Sujet2DevSpeBundle:Stage')->findBy(array('lot' => $id->getId()));
		$nombre = count($stages);
	
		
		return nombre;
	}
}