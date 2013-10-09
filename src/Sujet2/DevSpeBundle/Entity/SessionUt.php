<?php

namespace Sujet2\DevSpeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SessionUt
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Sujet2\DevSpeBundle\Entity\SessionUtRepository")
 */
class SessionUt
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
     * @var string
     *
     * @ORM\Column(name="ses_libelle", type="string", length=255)
     */
    private $sesLibelle;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ses_actif", type="boolean")
     */
    private $sesActif;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_clo", type="datetime")
     */
    private $dateClo;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_ouv", type="datetime")
     */
    private $dateOuv;
        
    /**
     * @var object
     * @ORM\ManyToOne(targetEntity="Sujet2\DevSpeBundle\Entity\Parametre")
     */
    private $parametre;
    
    /**
     * @var Doctrine\Common\Collections\Collection
     * @ORM\ManyToMany(targetEntity="Sujet2\DevSpeBundle\Entity\Lot")
     */
    private $lots;
    
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
     * Set sesLibelle
     *
     * @param string $sesLibelle
     * @return Session
     */
    public function setSesLibelle($sesLibelle)
    {
        $this->sesLibelle = $sesLibelle;
    
        return $this;
    }

    /**
     * Get sesLibelle
     *
     * @return string 
     */
    public function getSesLibelle()
    {
        return $this->sesLibelle;
    }

    /**
     * Set sesActif
     *
     * @param boolean $sesActif
     * @return Session
     */
    public function setSesActif($sesActif)
    {
        $this->sesActif = $sesActif;
    
        return $this;
    }

    /**
     * Get sesActif
     *
     * @return boolean 
     */
    public function getSesActif()
    {
        return $this->sesActif;
    }

    /**
     * Set dateClo
     *
     * @param \DateTime $dateClo
     * @return Session
     */
    public function setDateClo($dateClo)
    {
        $this->dateClo = $dateClo;
    
        return $this;
    }

    /**
     * Get dateClo
     *
     * @return \DateTime 
     */
    public function getDateClo()
    {
        return $this->dateClo;
    }

    /**
     * Set dateOuv
     *
     * @param \DateTime $dateClo
     * @return Session
     */
    public function setDateOuv($dateOuv)
    {
    	$this->dateOuv = $dateOuv;
    
    	return $this;
    }
    
    /**
     * Get dateOuv
     *
     * @return \DateTime
     */
    public function getDateOuv()
    {
    	return $this->dateOuv;
    }
    
    /**
     * Set Parametre
     * @param Sujet2\DevSpeBundle\Entity\Parametre $parametre
     */
    public function setParametre(Sujet2\DevSpeBundle\Entity\Parametre $parametre) {
    	$this->parametre = $parametre;
    }
    
    /**
     * Get parametre
     * @return Sujet2\DevSpeBundle\Entity\Parametre
     */
    public function  getParametre(){
    	return $this->parametre;
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
    
    
}
