<?php
// src/Sujet2/DevSpeBundle/Controller/DevSpeController.php
 
namespace Sujet2\DevSpeBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sujet2\DevSpeBundle\Entity\Contrainte;
use Sujet2\DevSpeBundle\Form\ContrainteType;
use Sujet2\DevSpeBundle\Form\SessionType;
use Sujet2\DevSpeBundle\Entity\Session;
use Sujet2\DevSpeBundle\Entity\Parametre;
use Sujet2\DevSpeBundle\Form\ParametreType;
class DevSpeController extends Controller
{
 
 
  public function phase2Action()
  {
    // On cree l'objet Contrainte
	$parametre = new Parametre();
	
	// On cree le FormBuilder grace a la methode du controlleur 
	$form = $this->createForm(new ParametreType, $parametre);
	 
    return $this->render('Sujet2DevSpeBundle:Sujet2View:phase2.html.twig', array( 'form' => $form->createView() ));
  }
  
  
  public function phase1Action()
  {
    // On cree l'objet Contrainte
	$session = new Session();
	
	// On cree le FormBuilder grace a la methode du controlleur 
	$form = $this->createForm(new SessionType, $session);
	
	 // On récupère la requête
    $request = $this->get('request');
	
	// On vérifie qu'elle est de type POST
    if ($request->getMethod() == 'POST') {
	
      // On fait le lien Requête <-> Formulaire
      // À partir de maintenant, la variable $Session contient les valeurs entrées dans le formulaire par le visiteur
	  
      $form->bind($request);
       $session->setSesActif(false);
           
        // On l'enregistre notre objet $session dans la base de données
        $em = $this->getDoctrine()->getManager();
        $em->persist($session);
        $em->flush();
	return $this->redirect($this->generateUrl('sujet2devspe_phase2', 301));
	
	 }
    return $this->render('Sujet2DevSpeBundle:Sujet2View:phase1.html.twig', array( 'form' => $form->createView() ));
  
}
}

?>