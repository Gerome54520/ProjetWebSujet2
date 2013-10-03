<?php

namespace Sujet2\DevSpeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Form\Extension\Core\ChoiceList\ObjectChoiceList;

/**
 * Lot
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Sujet2\DevSpeBundle\Entity\LotRepository")
 */
class Lot
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
     * @ORM\Column(name="tut_civ", type="string", length=3)
     */
    private $tutCiv;

    /**
     * @var string
     *
     * @ORM\Column(name="tut_nom", type="string", length=50)
     */
    private $tutNom;

    /**
     * @var string
     *
     * @ORM\Column(name="tut_prenom", type="string", length=50)
     */
    private $tutPrenom;

    /**
     * @var string
     *
     * @ORM\Column(name="tut_fonction", type="string", length=75)
     */
    private $tutFonction;

    /**
     * @var string
     *
     * @ORM\Column(name="tut_mel", type="string", length=75)
     */
    private $tutMel;

    /**
     * @var string
     *
     * @ORM\Column(name="tut_tel", type="string", length=15)
     */
    private $tutTel;

    /**
     * @var string
     *
     * @ORM\Column(name="tut_portable", type="string", length=15)
     */
    private $tutPortable;
        
    /**
     * @var object
     * @ORM\ManyToOne(targetEntity="Sujet2\DevSpeBundle\Entity\Enseignant")
     */
    private $enseignant;
    
    /**
     * @var Object
     * @ORM\ManyToOne(targetEntity="Sujet2\DevSpeBundle\Entity\Entreprise")
     */
    private $entreprise;
    
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
     * Set tutCiv
     *
     * @param string $tutCiv
     * @return Lot
     */
    public function setTutCiv($tutCiv)
    {
        $this->tutCiv = $tutCiv;
    
        return $this;
    }

    /**
     * Get tutCiv
     *
     * @return string 
     */
    public function getTutCiv()
    {
        return $this->tutCiv;
    }

    /**
     * Set tutNom
     *
     * @param string $tutNom
     * @return Lot
     */
    public function setTutNom($tutNom)
    {
        $this->tutNom = $tutNom;
    
        return $this;
    }

    /**
     * Get tutNom
     *
     * @return string 
     */
    public function getTutNom()
    {
        return $this->tutNom;
    }

    /**
     * Set tutPrenom
     *
     * @param string $tutPrenom
     * @return Lot
     */
    public function setTutPrenom($tutPrenom)
    {
        $this->tutPrenom = $tutPrenom;
    
        return $this;
    }

    /**
     * Get tutPrenom
     *
     * @return string 
     */
    public function getTutPrenom()
    {
        return $this->tutPrenom;
    }

    /**
     * Set tutFonction
     *
     * @param string $tutFonction
     * @return Lot
     */
    public function setTutFonction($tutFonction)
    {
        $this->tutFonction = $tutFonction;
    
        return $this;
    }

    /**
     * Get tutFonction
     *
     * @return string 
     */
    public function getTutFonction()
    {
        return $this->tutFonction;
    }

    /**
     * Set tutMel
     *
     * @param string $tutMel
     * @return Lot
     */
    public function setTutMel($tutMel)
    {
        $this->tutMel = $tutMel;
    
        return $this;
    }

    /**
     * Get tutMel
     *
     * @return string 
     */
    public function getTutMel()
    {
        return $this->tutMel;
    }

    /**
     * Set tutTel
     *
     * @param string $tutTel
     * @return Lot
     */
    public function setTutTel($tutTel)
    {
        $this->tutTel = $tutTel;
    
        return $this;
    }

    /**
     * Get tutTel
     *
     * @return string 
     */
    public function getTutTel()
    {
        return $this->tutTel;
    }

    /**
     * Set tutPortable
     *
     * @param string $tutPortable
     * @return Lot
     */
    public function setTutPortable($tutPortable)
    {
        $this->tutPortable = $tutPortable;
    
        return $this;
    }

    /**
     * Get tutPortable
     *
     * @return string 
     */
    public function getTutPortable()
    {
        return $this->tutPortable;
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
     * Set entreprise
     * @param \Sujet2\DevSpeBundle\Entity\Entreprise $entreprise
     */
    public function SetLot(\Sujet2\DevSpeBundle\Entity\Entreprise $entreprise){
    	$this->entreprise=$entreprise;
    }
    
    /**
     * Get entreprise
     * @return Sujet2\DevSpeBundle\Entity\Entreprise entreprise
     */
    public function getEntreprise(){
    	return $this->entreprise;
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
