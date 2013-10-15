<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\EntityRepository;

class AssocRepository extends EntityRepository
{
	function getEnseignantId($userId){
		$qb = $this->_em->createQueryBuilder();
		$qb->select(a.enseignantId)->from('Sujet2\DevSpeBundle\Sujet2DevSpeBundle:Assoc','a')->where('a.userId = :user')->setParameter('user', $userId);
		
		$enseignants = $qb->getQuery()->getResult();
		
		return $enseignants[0];		
	}
	
	function getUserId($enseignantId){
		$qb = $this->_em->createQueryBuilder();
		$qb->select(a.userId)->from('Sujet2\DevSpeBundle\Sujet2DevSpeBundle:Assoc','a')->where('a.ensId = :ens')->setParameter('ens', $enseignantId);
	
		$users = $qb->getQuery()->getResult();
	
		return $users[0];
	}	
}