<?php
// src/Sujet2/DevSpeBundle/Controller/DevSpeController.php
 
namespace Sujet2\DevSpeBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sujet2\DevSpeBundle\Entity\Contrainte;
use Sujet2\DevSpeBundle\Form\ContrainteType;
use Sujet2\DevSpeBundle\Form\SessionType;
use Sujet2\DevSpeBundle\Entity\Session;

class DevSpeController extends Controller
{
 
 
  public function phase2Action()
  {
    // On cree l'objet Contrainte
	$contrainte = new Contrainte();
	
	// On cree le FormBuilder grace a la methode du controlleur 
	$form = $this->createForm(new ContrainteType, $contrainte);
	 
    return $this->render('Sujet2DevSpeBundle:Sujet2View:phase2.html.twig', array( 'form' => $form->createView() ));
  }
  
  
  public function phase1Action()
  {
    // On cree l'objet Contrainte
	$session = new Session();
	
	// On cree le FormBuilder grace a la methode du controlleur 
	$form = $this->createForm(new SessionType, $session);
	 
    return $this->render('Sujet2DevSpeBundle:Sujet2View:phase1.html.twig', array( 'form' => $form->createView() ));
  
}
}

?>