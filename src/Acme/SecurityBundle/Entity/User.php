<?php
// src/Acme/SecurityBundle/Entity/User.php
 
namespace Acme\SecurityBundle\Entity;
use FOS\UserBundle\Model\User as BaseUser; 

use Doctrine\ORM\Mapping as ORM;

use Doctrine\DBAL\Types\BooleanType;
 
/**
 * @ORM\Entity
 * @ORM\Table(name="sdz_user")
 */
class User extends BaseUser
{
  /**
   * @ORM\Id
   * @ORM\Column(type="integer")
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  protected $id;

  /**
   * @var object
   * @ORM\OneToOne(targetEntity="Sujet2\DevSpeBundle\Entity\Enseignant", cascade={"persist"})
   */
  private $enseignant;
  
  /**
   * @var boolean
   */  
  private $admin;
  
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
   * @param boolean $admin
   */
  public function setAdmin($admin)  {
  	$this->admin = $admin;
  }
  
  /**
   * @return boolean
   */
  public function getAdmin(){
  	return $this->admin;
  }
  
}
