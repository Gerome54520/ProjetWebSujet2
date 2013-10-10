<?php

namespace Sujet2\DevSpeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Admin
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Sujet2\DevSpeBundle\Entity\AdminRepository")
 */
class Admin
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
     * @var object
     * @ORM\ManyToOne(targetEntity="Sujet2\DevSpeBundle\Entity\Enseignant")
     */
    private $enseignant;

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
}
