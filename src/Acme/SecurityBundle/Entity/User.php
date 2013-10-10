<?php
// src/Acme/SecurityBundle/Entity/User.php
 
namespace Acme\SecurityBundle\Entity;
 
use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
<<<<<<< HEAD
=======
use Doctrine\DBAL\Types\BooleanType;
>>>>>>> 1044f5c55a9e9ccbbb9e2b616ae8eebea2513595
 
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
<<<<<<< HEAD
=======
  
  
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
  

>>>>>>> 1044f5c55a9e9ccbbb9e2b616ae8eebea2513595
}
