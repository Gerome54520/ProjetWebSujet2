<?php

namespace Sujet2\DevSpeBundle\Entity;

class GroupForm{

// Attributs

private $tabform; //Tableau de form

private $length; //Taille du tableau ou Nombre de form

private $entityManager; //Sauvegarde l'entity Manager


//Constructeur

public function __construct( $em ){
    	$this->tabform = new \Doctrine\Common\Collections\ArrayCollection();
		$this->length = 0;
		$this->entityManager = $em;
    }

//Methodes	

public function addForm( $form ){
   $this->tabform[$this->getLength()] = $form;
   $this->setLength($this->getLength() + 1 );
   }
   
public function createView(){
   for ( i=0 ; i < $this->getLength() ; i++ ){
       $this->tabform{i] = tabform[i]->createView();
	}
}

public function ToBdd(){

 for ( i = 0 ; i < $this->getLength(); i++ ){
        $this->tabform[i]->bind($request); 
        $this->getEm()->persist($quota);
        $this->getEm()->flush();
 }
}

public function getEm()[
   return $this->entityManager; 
}

public function getLength(){
   return $this->length;
 }
 
public function setLength( $j ) {
  return $this->length = $j ;
}




























?>