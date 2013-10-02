<?php

namespace Sujet2\DevSpeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etudiant
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Sujet2\DevSpeBundle\Entity\EtudiantRepository")
 */
class Etudiant
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
     * @ORM\Column(name="etud_civ", type="string", length=5)
     */
    private $etudCiv;

    /**
     * @var string
     *
     * @ORM\Column(name="etud_nom", type="string", length=30)
     */
    private $etudNom;

    /**
     * @var string
     *
     * @ORM\Column(name="etud_prenom", type="string", length=20)
     */
    private $etudPrenom;

    /**
     * @var string
     *
     * @ORM\Column(name="etud_mel", type="string", length=50)
     */
    private $etudMel;


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
     * Set etudCiv
     *
     * @param string $etudCiv
     * @return Etudiant
     */
    public function setEtudCiv($etudCiv)
    {
        $this->etudCiv = $etudCiv;
    
        return $this;
    }

    /**
     * Get etudCiv
     *
     * @return string 
     */
    public function getEtudCiv()
    {
        return $this->etudCiv;
    }

    /**
     * Set etudNom
     *
     * @param string $etudNom
     * @return Etudiant
     */
    public function setEtudNom($etudNom)
    {
        $this->etudNom = $etudNom;
    
        return $this;
    }

    /**
     * Get etudNom
     *
     * @return string 
     */
    public function getEtudNom()
    {
        return $this->etudNom;
    }

    /**
     * Set etudPrenom
     *
     * @param string $etudPrenom
     * @return Etudiant
     */
    public function setEtudPrenom($etudPrenom)
    {
        $this->etudPrenom = $etudPrenom;
    
        return $this;
    }

    /**
     * Get etudPrenom
     *
     * @return string 
     */
    public function getEtudPrenom()
    {
        return $this->etudPrenom;
    }

    /**
     * Set etudMel
     *
     * @param string $etudMel
     * @return Etudiant
     */
    public function setEtudMel($etudMel)
    {
        $this->etudMel = $etudMel;
    
        return $this;
    }

    /**
     * Get etudMel
     *
     * @return string 
     */
    public function getEtudMel()
    {
        return $this->etudMel;
    }
}
