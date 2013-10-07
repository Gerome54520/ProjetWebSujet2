<?php

namespace Sujet2\DevSpeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Quota
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Sujet2\DevSpeBundle\Entity\QuotaRepository")
 */
class Quota {
	/**
	 *
	 * @var integer @ORM\Column(name="id", type="integer")
	 *      @ORM\Id
	 *      @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;
	
	/**
	 *
	 * @var integer @ORM\Column(name="nb_suivi", type="integer")
	 */
	private $nbSuivi;
	
	/**
	 * @var object 
	 * @ORM\ManyToOne(targetEntity="Sujet2\DevSpeBundle\Entity\Enseignant")
	 */
	private $enseignant;
	
	/**
	 * @var object 
	 * @ORM\ManyToOne(targetEntity="Sujet2\DevSpeBundle\Entity\SessionUt")
	 */
	private $sessionUt;
	
	/**
	 * Get id
	 * @return integer
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 * Set nbSuivi
	 *
	 * @param integer $nbSuivi        	
	 * @return Quota
	 */
	public function setNbSuivi($nbSuivi) {
		$this->nbSuivi = $nbSuivi;
		
		return $this;
	}
	
	/**
	 * Get nbSuivi
	 *
	 * @return integer
	 */
	public function getNbSuivi() {
		return $this->nbSuivi;
	}
	
	/**
	 * Set sessionUt
	 *
	 * @param Sujet2\DevSpeBundle\Entity\SessionUt $sessionUt        	
	 */
	public function setSessionUt(Sujet2\DevSpeBundle\Entity\Contrainte $sessionUt) {
		$this->sessionUt = $sessionUt;
	}
	
	/**
	 * Get sessionUt
	 *
	 * @return Sujet2\DevSpeBundle\Entity\SessionUt
	 */
	public function getSessionUt() {
		return $this->sessionUt;
	}
	
	/**
	 * Set enseignant
	 * 
	 * @param \Sujet2\DevSpeBundle\Entity\Enseignant $enseignant        	
	 */
	public function setEnseignant(\Sujet2\DevSpeBundle\Entity\Enseignant $enseignant) {
		$this->enseignant = $enseignant;
	}
	
	/**
	 *
	 * @return Sujet2\DevSpeBundle\Entity\Enseignant
	 */
	public function getEnseignant() {
		return $this->enseignant;
	}
}
