<?php

namespace Acme\SecurityBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Entity\User as BaseUser;

/**
 * User
 * @ InheritanceType ("reuni")
 * @ORM\Table(name="sdz_user")
 * @ORM\Entity(repositoryClass="Acme\SecurityBundle\Entity\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="enseignant", type="integer")
     */
    protected $enseignant;


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
     *
     * @param integer $enseignant
     * @return User
     */
    public function setEnseignant($enseignant)
    {
        $this->enseignant = $enseignant;
    
        return $this;
    }

    /**
     * Get enseignant
     *
     * @return integer 
     */
    public function getEnseignant()
    {
        return $this->enseignant;
    }
}
