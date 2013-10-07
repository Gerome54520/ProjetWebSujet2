<?php

namespace Sujet2\DevSpeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contrainte
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Sujet2\DevSpeBundle\Entity\ContrainteRepository")
 */
class Contrainte {
	/**
	 *
	 * @var integer 
	 * @ORM\Column(name="id", type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;
	
	/**
	 *
	 * @var integer 
	 * @ORM\Column(name="nombre", type="integer")
	 */
	private $nombre;
	
	/**
	 *
	 * @var integer 
	 * @ORM\Column(name="pts", type="integer")
	 */
	private $pts;
	
	/**
	 *
	 * @var boolean 
	 * @ORM\Column(name="plus", type="boolean")
	 */
	private $plus;
	
	/**
	 *
	 * @var object
	 * @ORM\ManyToOne(targetEntity="Sujet2\DevSpeBundle\Entity\TypePts")
	 */
	private $typePts;
	
	
	/**
	 * Get id
	 *
	 * @return integer
	 */
	public function getId() {
		return $this->id;
	}
	
	/**
	 * Set nombre
	 *
	 * @param integer $nombre        	
	 * @return Contrainte
	 */
	public function setNombre($nombre) {
		$this->nombre = $nombre;
		
		return $this;
	}
	
	/**
	 * Get nombre
	 *
	 * @return integer
	 */
	public function getNombre() {
		return $this->nombre;
	}
	
	/**
	 * Set pts
	 *
	 * @param integer $pts        	
	 * @return Contrainte
	 */
	public function setPts($pts) {
		$this->pts = $pts;
		
		return $this;
	}
	
	/**
	 * Get pts
	 *
	 * @return integer
	 */
	public function getPts() {
		return $this->pts;
	}
	
	/**
	 * Set plus
	 *
	 * @param string $plus        	
	 * @return Contrainte
	 */
	public function setPlus($plus) {
		$this->plus = $plus;
		
		return $this;
	}
	
	/**
	 * Get plus
	 *
	 * @return string
	 */
	public function getPlus() {
		return $this->plus;
	}
	
	/**
	 * Set Contrainte
	 * @param  Sujet2\DevSpeBundle\Entity\TypePts $type_pts
	 */
	public function setTypePts(TypePts $type_pts) {
		$this->typePts = $type_pts;
	}
	
	/**
	 * @return Sujet2\DevSpeBundle\Entity\TypePts
	 */
	public function  getTypePts(){
		return $this->typePts;
	}
	
}
