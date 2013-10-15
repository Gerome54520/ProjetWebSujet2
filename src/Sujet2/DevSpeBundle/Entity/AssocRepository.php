<?php
namespace Sujet2\DevSpeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\EntityRepository;

class AssocRepository extends EntityRepository
{
	function getEnseignantId($userId){
		$qb = $this->_em->createQueryBuilder();
		$qb->select('a')->from('Sujet2DevSpeBundle:Assoc','a')->where('a.userId = :user')->setParameter('user', $userId);
				
		$assocs = $qb->getQuery()->getSingleResult();
		
		$enseignantId = $assocs->getEnseignantId();

		
		return $enseignantId;		
	}
	
	function getUserId($enseignantId){
		$qb = $this->_em->createQueryBuilder();
		$qb->select('a')->from('Sujet2DevSpeBundle:Assoc','a')->where('a.enseignantId = :ens')->setParameter('ens', $enseignantId);
	
		$assocs = $qb->getQuery()->getSingleResult();
	    $userId = $assocs->getUserId();
		
		return $userId;
	}	
}