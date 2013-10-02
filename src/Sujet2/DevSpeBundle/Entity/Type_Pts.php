<?php

namespace Sujet2\DevSpeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Type_Pts
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Sujet2\DevSpeBundle\Entity\Type_PtsRepository")
 */
class Type_Pts {
	/**
	 *
	 * @var integer @ORM\Column(name="id", type="integer")
	 *      @ORM\Id
	 *      @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;
	
	/**
	 *
	 * @var string @ORM\Column(name="libelle", type="string", length=40)
	 */
	private $libelle;
	
	/**
	 *
	 * @var object 
	 * @ORM\ManyToOne(targetEntity="Sujet2\DevSpeBundle\Entity\Contrainte")
	 */
	private $contrainte;
	
	/**
	 * Get id
	 *
	 * @return integer
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 * Set libelle
	 *
	 * @param string $libelle        	
	 * @return Type_Pts
	 */
	public function setLibelle($libelle) {
		$this->libelle = $libelle;
		
		return $this;
	}
	
	/**
	 * Get libelle
	 *
	 * @return string
	 */
	public function getLibelle() {
		return $this->libelle;
	}
	
	/**
	 * Set Contrainte
	 * @param Sujet2\DevSpeBundle\Entity\Contrainte $contrainte
	 */
	public function setContrainte(Sujet2\DevSpeBundle\Entity\Contrainte $contrainte) {
		$this->contrainte = $contrainte;
	}
	
	/**
	 * @return Sujet2\DevSpeBundle\Entity\Contrainte
	 */
	public function  getContrainte(){
		return $this->contrainte;
	}
	
}
