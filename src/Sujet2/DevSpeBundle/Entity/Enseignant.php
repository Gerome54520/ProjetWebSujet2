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
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="ens_civ", type="string", length=10, nullable=true)
     */
    private $ensCiv;

    /**
     * @var string
     *
     * @ORM\Column(name="ens_nom", type="string", length=50)
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
     * @ORM\Column(name="numRue", type="string", length=10, nullable=true)
     */
    private $numRue;
    
    
    /**
     * @var string
     * @ORM\Column(name="rue", type="string", length=50, nullable=true)
     */
    private $rue;
    
    /**
     * @var string
     * @ORM\Column(name="codePost", type="string", length=10, nullable=true)
     */
    private $codePost;
    
    /**
     * @var string
     * @ORM\Column(name="ville", type="string", length=50, nullable=true)
     */
    private $ville;
    
    /**
     * @var string
     * @ORM\Column(name="pays", type="string", length=50, nullable=true)
     */
    private $pays;
    
    
    /**
     * Set id
     * @param int $id
     * @return \Sujet2\DevSpeBundle\Entity\Enseignant
     */
    public function setId($id){
    	$this->id=$id;
    	return $this;
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
     * Set numRue
     *
     * @param string $numRue
     * @return Enseignant
     */
    public function setnumRue($numRue)
    {
        $this->numRue = $numRue;
    
        return $this;
    }

    /**
     * Get numRue
     * @return string 
     */
    public function getnumRue()
    {
        return $this->numRue;
    }    
    

    public function setRue($Rue)
    {
    	$this->Rue = $Rue;
    
    	return $this;
    }    

    public function getRue()
    {
    	return $this->Rue;
    }
    
    public function setCodePost($codePost)
    {
    	$this->codePost = $codePost;
    
    	return $this;
    }
    
    public function getCodePost()
    {
    	return $this->codePost;
    }
    
    public function setPays($pays)
    {
    	$this->pays = $pays;
    
    	return $this;
    }
    
    public function getpays()
    {
    	return $this->pays;
    }
    
    public function setVille($ville)
    {
    	$this->ville = $ville;
    
    	return $this;
    }
    
    public function getVille()
    {
    	return $this->ville;
    }
}
