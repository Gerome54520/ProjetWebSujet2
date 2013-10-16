<?php

namespace Sujet2\DevSpeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stage
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Sujet2\DevSpeBundle\Entity\StageRepository")
 */
class Stage
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
     * @ORM\Column(name="stage_comment", type="string", length=255, nullable=true)
     */
    private $stageComment;
    
    /** 
     * @var object
     * @ORM\OneToOne(targetEntity="Sujet2\DevSpeBundle\Entity\Etudiant", cascade={"persist"})
     */
    private $etudiant;


    /**
     * Set id
     * @param int $id
     * @return \Sujet2\DevSpeBundle\Entity\Stage
     */
    public function setId($id){
    	$this->	id = $id;
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
     * Set stageComment
     *
     * @param string $stageComment
     * @return Stage
     */
    public function setStageComment($stageComment)
    {
        $this->stageComment = $stageComment;
    
        return $this;
    }

    /**
     * Get stageComment     
     * @return string 
     */
    public function getStageComment()
    {
        return $this->stageComment;
    }
    
    /**
     * Set etudiant
     * @param \Sujet2\DevSpeBundle\Entity\Etudiant $etudiant
     */
    public function setEtudiant(\Sujet2\DevSpeBundle\Entity\Etudiant $etudiant){
    	$this->etudiant= $etudiant;
    }
    
    /**
     * @return \Sujet2\DevSpeBundle\Entity\Etudiant
     */
    public function getEtudiant(){
    	return $this->etudiant;
    }    
}
