<?php
namespace Sujet2\DevSpeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Assoc
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Sujet2\DevSpeBundle\Entity\AssocRepository")
 */
class Assoc {
	
	/**
	 *
	 * @var integer @ORM\Column(name="id", type="integer")
	 *      @ORM\Id
	 *      @ORM\GeneratedValue(strategy="AUTO")
	 */
	private $id;
	
	/**
	* @var integer @ORM\Column(name="userId", type="integer")
	*/
	private $userId;
	
	
	/**
	 * @var integer @ORM\Column(name="enseignantId", type="integer")
	 */
	private $enseignantId;
	
	
	/**
	 * Set enseignantId
	 * @param int $enseignantId
	 */
	public function setEnseignantId($enseignantId){
		$this->enseignantId=$enseignantId;
	}
	
	/**
	 * @return integer
	 */
	public function getEnseignantId(){
		return $this->enseignantId;
	}
	
	/**
	 * Set userId
	 * @param int $userId
	 */
	public function setUserId($userId){
		$this->userId=$userId;
	}
	
	/**
	 * @return integer
	 */
	public function getUserId(){
		return $this->userId;
	}
	
}