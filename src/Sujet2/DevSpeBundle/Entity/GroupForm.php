<?php
namespace Sujet2\DevSpeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

 class GroupForm
 {
     protected $ balises;

     public function __ construct ()
     {
         $this -> balises = new ArrayCollection ();
     }

     public function getTags()
     {
         return $ this ->balises;
     }
 }
 ?>