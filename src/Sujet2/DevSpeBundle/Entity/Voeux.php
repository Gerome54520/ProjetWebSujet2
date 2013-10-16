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
     * @ORM\Column(name="temps_trajet", type="float")
     */
    private $tempsTrajet;

    /**
     * @var integer
     * @ORM\Column(name="points", type="integer")
     */
    private $points;
    
    
    /**
     * @var object
     * @ORM\ManyToOne(targetEntity="Sujet2\DevSpeBundle\Entity\Enseignant")
     */
    private $enseignant;
    
    /**
     * @var object
     * @ORM\ManyToOne(targetEntity="Sujet2\DevSpeBundle\Entity\Lot")
     */
    private $lot;
    
    /**
     * @var object
     * @ORM\ManyToOne(targetEntity="Sujet2\DevSpeBundle\Entity\LieuDepart")
     */
    private $lieuDepart;
    
    /**
     * @ORM\Column(name="distance", type="integer")
     */
    private $distance;

    
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
    public function setEnseignant($enseignant){
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
    public function setLot($lot){
    	$this->lot=$lot;
        }
        
    /**
     * @return Doctrine\Common\Collections\Collection
     */
    public function getLot(){
    	return $this->lot;
    }
    
    /**
     * Set lieu_depart
     * @param \Sujet2\DevSpeBundle\Entity\LieuDepart $lieuDepart
     */
    public function setLieuDepart($lieuDepart){
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
