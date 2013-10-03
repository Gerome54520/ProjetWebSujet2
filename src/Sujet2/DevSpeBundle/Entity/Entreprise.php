<?php

namespace Sujet2\DevSpeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Form\Extension\Core\ChoiceList\ObjectChoiceList;

/**
 * Entreprise
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Sujet2\DevSpeBundle\Entity\EntrepriseRepository")
 */
class Entreprise
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
     * @ORM\Column(name="ent_rs", type="string", length=75)
     */
    private $entRs;

    /**
     * @var string
     *
     * @ORM\Column(name="ent_adr", type="string", length=100)
     */
    private $entAdr;

    /**
     * @var string
     *
     * @ORM\Column(name="ent_cp", type="string", length=10)
     */
    private $entCp;

    /**
     * @var string
     *
     * @ORM\Column(name="ent_ville", type="string", length=30)
     */
    private $entVille;

    /**
     * @var string
     *
     * @ORM\Column(name="ent_pays", type="string", length=30)
     */
    private $entPays;

    /**
     * @var string
     *
     * @ORM\Column(name="ent_tel", type="string", length=15)
     */
    private $entTel;

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
     * Set entRs
     *
     * @param string $entRs
     * @return Entreprise
     */
    public function setEntRs($entRs)
    {
        $this->entRs = $entRs;
    
        return $this;
    }

    /**
     * Get entRs
     *
     * @return string 
     */
    public function getEntRs()
    {
        return $this->entRs;
    }

    /**
     * Set entAdr
     *
     * @param string $entAdr
     * @return Entreprise
     */
    public function setEntAdr($entAdr)
    {
        $this->entAdr = $entAdr;
    
        return $this;
    }

    /**
     * Get entAdr
     *
     * @return string 
     */
    public function getEntAdr()
    {
        return $this->entAdr;
    }

    /**
     * Set entCp
     *
     * @param string $entCp
     * @return Entreprise
     */
    public function setEntCp($entCp)
    {
        $this->entCp = $entCp;
    
        return $this;
    }

    /**
     * Get entCp
     *
     * @return string 
     */
    public function getEntCp()
    {
        return $this->entCp;
    }

    /**
     * Set entVille
     *
     * @param string $entVille
     * @return Entreprise
     */
    public function setEntVille($entVille)
    {
        $this->entVille = $entVille;
    
        return $this;
    }

    /**
     * Get entVille
     *
     * @return string 
     */
    public function getEntVille()
    {
        return $this->entVille;
    }

    /**
     * Set entPays
     *
     * @param string $entPays
     * @return Entreprise
     */
    public function setEntPays($entPays)
    {
        $this->entPays = $entPays;
    
        return $this;
    }

    /**
     * Get entPays
     *
     * @return string 
     */
    public function getEntPays()
    {
        return $this->entPays;
    }

    /**
     * Set entTel
     *
     * @param string $entTel
     * @return Entreprise
     */
    public function setEntTel($entTel)
    {
        $this->entTel = $entTel;
    
        return $this;
    }

    /**
     * Get entTel
     *
     * @return string 
     */
    public function getEntTel()
    {
        return $this->entTel;
    }    
}
