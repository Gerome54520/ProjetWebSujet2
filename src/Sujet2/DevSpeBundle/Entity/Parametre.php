<?php

namespace Sujet2\DevSpeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Parametre
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Sujet2\DevSpeBundle\Entity\ParametreRepository")
 */
class Parametre
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
     * @ORM\Column(name="dist_max", type="float")
     */
    private $distMax;

    /**
     * @var integer
     *
     * @ORM\Column(name="tolerance", type="integer")
     */
    private $tolerance;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;
    
    /**
     * @var object 
     * @ORM\ManyToOne(targetEntity="Sujet2\DevSpeBundle\Entity\Contrainte")
     */
    private $contrainte;
    
    /**
     * @var object 
     * @ORM\ManyToOne(targetEntity="Sujet2\DevSpeBundle\Entity\Session")
     */
    private $session;
    

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
     * Set distMax
     *
     * @param float $distMax
     * @return Parametre
     */
    public function setDistMax($distMax)
    {
        $this->distMax = $distMax;
    
        return $this;
    }

    /**
     * Get distMax
     *
     * @return float 
     */
    public function getDistMax()
    {
        return $this->distMax;
    }

    /**
     * Set tolerance
     *
     * @param integer $tolerance
     * @return Parametre
     */
    public function setTolerance($tolerance)
    {
        $this->tolerance = $tolerance;
    
        return $this;
    }

    /**
     * Get tolerance
     *
     * @return integer 
     */
    public function getTolerance()
    {
        return $this->tolerance;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return Parametre
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    
        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
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
     * Get contrainte
     * @return Sujet2\DevSpeBundle\Entity\Contrainte
     */
    public function  getContrainte(){
    	return $this->contrainte;
    }
	
	/**
	 * Set session
	 * 
	 * @param Sujet2\DevSpeBundle\Entity\Session $session        	
	 */
	public function setSession(Sujet2\DevSpeBundle\Entity\Contrainte $session) {
		$this->session = $session;
	}
	
	/**
	 * Get session
	 * 
	 * @return Sujet2\DevSpeBundle\Entity\Session
	 */
	public function getSession() {
		return $this->session;
	}
}
