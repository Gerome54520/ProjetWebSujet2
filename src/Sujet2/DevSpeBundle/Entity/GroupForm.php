<?php

namespace Sujet2\DevSpeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GroupForm
 *
 * @ORM\Entity(repositoryClass="Sujet2\DevSpeBundle\Entity\GroupFormRepository")
 */
class GroupForm
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
     * @var array
     */
    private $balises;


	public function __construct ()
     {
         $this->balises = new \Doctrine\Common\Collections\ArrayCollection();
     }
	 
	public function getTags()
     {
         return $this ->balises;
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
     * Set balises
     *
     * @param array $balises
     * @return GroupForm
     */
    public function setBalises($balises)
    {
        $this->balises = $balises;
    
        return $this;
    }

    /**
     * Get balises
     *
     * @return array 
     */
    public function getBalises()
    {
        return $this->balises;
    }
}
