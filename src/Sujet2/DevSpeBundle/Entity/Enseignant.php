<?php

namespace Sujet2\DevSpeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Enseignant
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Sujet2\DevSpeBundle\Entity\EnseignantRepository")
 */
class Enseignant
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
     * @ORM\Column(name="ens_civ", type="string", length=255)
     */
    private $ensCiv;

    /**
     * @var string
     *
     * @ORM\Column(name="ens_nom", type="string", length=5)
     */
    private $ensNom;

    /**
     * @var string
     *
     * @ORM\Column(name="ens_prenom", type="string", length=50)
     */
    private $ensPrenom;

    /**
     * @var string
     *
     * @ORM\Column(name="ens_login", type="string", length=50)
     */
    private $ensLogin;

    /**
     * @var string
     *
     * @ORM\Column(name="ens_mdp", type="string", length=255)
     */
    private $ensMdp;

    /**
     * @var string
     *
     * @ORM\Column(name="ens_adresse", type="string", length=255)
     */
    private $ensAdresse;
    
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
     * Set ensCiv
     *
     * @param string $ensCiv
     * @return Enseignant
     */
    public function setEnsCiv($ensCiv)
    {
        $this->ensCiv = $ensCiv;
    
        return $this;
    }

    /**
     * Get ensCiv
     *
     * @return string 
     */
    public function getEnsCiv()
    {
        return $this->ensCiv;
    }

    /**
     * Set ensNom
     *
     * @param string $ensNom
     * @return Enseignant
     */
    public function setEnsNom($ensNom)
    {
        $this->ensNom = $ensNom;
    
        return $this;
    }

    /**
     * Get ensNom
     *
     * @return string 
     */
    public function getEnsNom()
    {
        return $this->ensNom;
    }

    /**
     * Set ensPrenom
     *
     * @param string $ensPrenom
     * @return Enseignant
     */
    public function setEnsPrenom($ensPrenom)
    {
        $this->ensPrenom = $ensPrenom;
    
        return $this;
    }

    /**
     * Get ensPrenom
     *
     * @return string 
     */
    public function getEnsPrenom()
    {
        return $this->ensPrenom;
    }

    /**
     * Set ensLogin
     *
     * @param string $ensLogin
     * @return Enseignant
     */
    public function setEnsLogin($ensLogin)
    {
        $this->ensLogin = $ensLogin;
    
        return $this;
    }

    /**
     * Get ensLogin
     *
     * @return string 
     */
    public function getEnsLogin()
    {
        return $this->ensLogin;
    }

    /**
     * Set ensMdp
     *
     * @param string $ensMdp
     * @return Enseignant
     */
    public function setEnsMdp($ensMdp)
    {
        $this->ensMdp = $ensMdp;
    
        return $this;
    }

    /**
     * Get ensMdp
     *
     * @return string 
     */
    public function getEnsMdp()
    {
        return $this->ensMdp;
    }

    /**
     * Set ensAdresse
     *
     * @param string $ensAdresse
     * @return Enseignant
     */
    public function setEnsAdresse($ensAdresse)
    {
        $this->ensAdresse = $ensAdresse;
    
        return $this;
    }

    /**
     * Get ensAdresse
     *
     * @return string 
     */
    public function getEnsAdresse()
    {
        return $this->ensAdresse;
    }    
}
