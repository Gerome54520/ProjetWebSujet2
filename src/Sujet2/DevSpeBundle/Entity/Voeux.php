<?php

namespace Sujet2\DevSpeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Voeux
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Sujet2\DevSpeBundle\Entity\VoeuxRepository")
 */
class Voeux
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var float
     *
     * @ORM\Column(name="temps_trajet", type="float")
     */
    private $tempsTrajet;

    /**
     * @var integer
     *
     * @ORM\Column(name="points", type="integer")
     */
    private $points;
    
    
    /**
     * @var object
     * @ORM\ManyToOne(targetEntity="Sujet2\DevSpeBundle\Entity\Enseignant")
     */
    private $enseignant;
    
    /**
     * @var Doctrine\Common\Collections\Collection
     * @ORM\ManyToMany(targetEntity="Sujet2\DevSpeBundle\Entity\Lot")
     */
    private $lots;
    
    /**
     * @var object
     * @ORM\ManyToOne(targetEntity="Sujet2\DevSpeBundle\Entity\LieuDepart")
     */
    private $lieuDepart;
    
    /**
     * @ORM\Column(name="distance", type="integer")
     */
    private $distance;


    public function __construct(){
    	$this->lots = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set tempsTrajet
     *
     * @param float $tempsTrajet
     * @return Voeux
     */
    public function setTempsTrajet($tempsTrajet)
    {
        $this->tempsTrajet = $tempsTrajet;
    
        return $this;
    }

    /**
     * Get tempsTrajet
     *
     * @return float 
     */
    public function getTempsTrajet()
    {
        return $this->tempsTrajet;
    }

    /**
     * Set points
     *
     * @param integer $points
     * @return Voeux
     */
    public function setPoints($points)
    {
        $this->points = $points;
    
        return $this;
    }

    /**
     * Get points
     *
     * @return integer 
     */
    public function getPoints()
    {
        return $this->points;
    }
    
    /**
     * Set enseignant
     * @param \Sujet2\DevSpeBundle\Entity\Enseignant $enseignant
     */
    public function setEnseignant(\Sujet2\DevSpeBundle\Entity\Enseignant $enseignant){
    	$this->enseignant=$enseignant;
    }
    
    /**
     * @return Sujet2\DevSpeBundle\Entity\Enseignant
     */
    public function getEnseignant(){
    	return $this->enseignant;
    }
    
    /**
     * Set lot
     * @param \Sujet2\DevSpeBundle\Entity\Lot $lot
     */
    public function addLot(\Sujet2\DevSpeBundle\Entity\Lot $lot){
    	$this->lots[]=$lot;
    }
    
    public function removeLot(\Sujet2\DevSpeBundle\Entity\Lot $lot){
    	$this->lots->removeElement($lot);
    }
    
    /**
     * @return Doctrine\Common\Collections\Collection
     */
    public function getLots(){
    	return $this->lots;
    }
    
    /**
     * Set lieu_depart
     * @param \Sujet2\DevSpeBundle\Entity\LieuDepart $lieuDepart
     */
    public function setLieuDepart(\Sujet2\DevSpeBundle\Entity\Lot $lieuDepart){
    	$this->lieuDepart=$lieuDepart;
    }
    
    /**
     * @return Sujet2\DevSpeBundle\Entity\LieuDepart
     */
    public function getLieuDepart(){
    	return $this->lieuDepart;
    }
    
    /**
     * Set distance
     * @param integer $distance
     */
    public function setDistance($distance){
    	$this->distance=$distance;
    }
    
    /**
     * Get distance
     * @return integer distance
     */
    public function getDistance(){
    	return $this->distance;
    }
}
