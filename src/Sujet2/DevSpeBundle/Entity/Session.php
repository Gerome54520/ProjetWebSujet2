<?php

namespace Sujet2\DevSpeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Session
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Sujet2\DevSpeBundle\Entity\SessionRepository")
 */
class Session
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
     * @var unknown
     * @ORM\ManyToOne(targetEntity="Sujet2\DevSpeBundle\Entity\Lot")
     */
    private $lot;


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
     * Set lot
     * @param \Sujet2\DevSpeBundle\Entity\Lot $lot
     */
    public function setLot(\Sujet2\DevSpeBundle\Entity\Lot $lot){
    	$this->lot=$lot;
    }
    
    /**
     * @return Sujet2\DevSpeBundle\Entity\Lot
     */
    public function getLot(){
    	return $this->lot;
    }
}
