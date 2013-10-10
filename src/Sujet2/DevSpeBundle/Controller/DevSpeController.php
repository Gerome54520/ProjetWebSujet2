<?php
// src/Sujet2/DevSpeBundle/Controller/DevSpeController.php
 
namespace Sujet2\DevSpeBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sujet2\DevSpeBundle\Entity\Contrainte;
use Sujet2\DevSpeBundle\Form\ContrainteType;
use Sujet2\DevSpeBundle\Form\SessionUtType;
use Sujet2\DevSpeBundle\Entity\SessionUt;
use Sujet2\DevSpeBundle\Entity\Parametre;
use Sujet2\DevSpeBundle\Form\ParametreType;
use Sujet2\DevSpeBundle\Form\TypePtsType;
use Sujet2\DevSpeBundle\Entity\TypePts;
use Sujet2\DevSpeBundle\Form\QuotaType;
use Sujet2\DevSpeBundle\Entity\Quota;
use Sujet2\DevSpeBundle\Form\EnseignantType;
use Sujet2\DevSpeBundle\Form\EnseignantTypeAdresse;
use Sujet2\DevSpeBundle\Entity\Enseignant;
use Symfony\Component\HttpFoundation\Session\Session;
use Sujet2\DevSpeBundle\Form\SessionUtType1;

class DevSpeController extends Controller
{

  public function profilensAction(){
    $repository = $this->getDoctrine()
                   ->getManager()
                   ->getRepository('DevSpeBundle:Enseignant');
 
    $enseignant = $repository->findOneBy(array('nom' => 'user'));
// $article est une instance de Article

return $this->render('Sujet2DevSpeBundle:Sujet2View:profilens.html.twig' ,  array( 'form' => $enseignant ));
  }
  
  public function acceuilensAction(){
    return $this->render('Sujet2DevSpeBundle:Sujet2View:acceuilens.html.twig');
  }
  
  public function acceuilgesAction(){
    return $this->render('Sujet2DevSpeBundle:Sujet2View:acceuilges.html.twig');
  }
  
  public function accueilAction(){
    return $this->render('Sujet2DevSpeBundle:Sujet2View:acceuil.html.twig');
  }
  
  
  public function phase5Action(){
      
     $repository = $this->getDoctrine()
                   ->getManager()
                   ->getRepository('Sujet2DevSpeBundle:SessionUt');
	 
	$query = $repo->createQueryBuilder ( 'l' )->where ( 'l.session = :session' )->setParameter ( 'session', 1 )->getQuery ();
			
	$lots = $query->getResult ();
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  public function phase4Action(){
  
    $repository = $this->getDoctrine()
                   ->getManager()
                   ->getRepository('Sujet2DevSpeBundle:SessionUt');
	$sessionut = $repository->find(1);
	
	$form = $this->createForm(new SessionUtType1 , $sessionut );
	 
	 //On recupere la requete
	 $request = $this->get('request');
	 
	 
	 if ( $request->getMethod() =='POST' ){
	 
	     // On fait le lien Requête <-> Formulaire
        //À partir de maintenant, la variable $Session contient les valeurs entrées dans le formulaire par le visiteur
	
        $form->bind($request);
	    $em = $this->getDoctrine()->getManager();
        $em->persist($sessionut);
        $em->flush();
	    return $this->redirect($this->generateUrl('sujet2devspe_phase5',301));
	}
	 return $this->render('Sujet2DevSpeBundle:Sujet2View:phase4.html.twig' , array( 'form' => $form->createView()));
}	 
	 
	 
	 
  public function phase3Action()
  {
    $j = 0;
    $i = 0;
     $repository = $this->getDoctrine()
                   ->getManager()
                   ->getRepository('Sujet2DevSpeBundle:Enseignant');
 
     $listeEnseignants = $repository->findAll();
	 
	 foreach ( $listeEnseignants as $enseignant ) {
	     //On cree l'objet Quota
	     $quota = new Quota();
		 $quota->setEnseignant($enseignant);
		 $listequota[$i] = $quota;
	     $form = $this->createForm(new QuotaType, $quota );
		 $sform[$i] = $form->createView();
		 $i = $i + 1;
	}
	 $fo = new Quota();
	 $f = $this->createForm(new QuotaType, $fo);
	 
	 //On recupe la requete
	 $request = $this->get('request');
	 
	 //On verifie qu'elle est de type POST
	 if ( $request->getMethod() =='POST' ){
	 
	     // On fait le lien Requête <-> Formulaire
      //À partir de maintenant, la variable $Session contient les valeurs entrées dans le formulaire par le visiteur
	// foreach ( $listequota as $quota ) { 
      $form->bind($request);
	    $em = $this->getDoctrine()->getManager();
        $em->persist($quota);
        $em->flush();
	   
	  
	   return $this->redirect($this->generateUrl('sujet2devspe_phase4',301));
	   }
	return $this->render('Sujet2DevSpeBundle:Sujet2View:phase3.html.twig' ,  array( 'form' => $sform, 'listeEnseignants' => $listeEnseignants, 'i' => $j ,'fo' => $f->createView()));
   }
   /*
    	
	}	 

     return $this->render('Sujet2DevSpeBundle:Sujet2View:phase3.html.twig' ,  array( 'form' => $form->createView() ));
  }*/
 
 
  public function phase2Action()
  {
    // On cree l'objet Contrainte
	$parametre = new Parametre();
	
	// On cree le FormBuilder grace a la methode du controlleur 
	$form = $this->createForm(new ParametreType, $parametre);
	
	//On recupere la requete
	$request = $this->get('request');
	
	// on verfie qu'ell est de type POST
	if ($request->getMethod() == 'POST') {
	
      // On fait le lien Requête <-> Formulaire
      // À partir de maintenant, la variable $Session contient les valeurs entrées dans le formulaire par le visiteur
	  
      $form->bind($request);
	    $em = $this->getDoctrine()->getManager();
        $em->persist($parametre);
        $em->flush();
	    return $this->redirect($this->generateUrl('sujet2devspe_phase3',301));	
	}	 
    return $this->render('Sujet2DevSpeBundle:Sujet2View:phase2.html.twig', array( 'form' => $form->createView() ));
  }
  
  
  public function phase1Action()
  {
    // Creation d'une session pour garder des variables de session 
	$sessionn = new Session();
	//$sessionn->start();
    // On cree l'objet Contrainte
	$session = new SessionUt();
	
	// On cree le FormBuilder grace a la methode du controlleur 
	$form = $this->createForm(new SessionUtType, $session);
	
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
	  // définit et récupère des attributs de session
	  $sessionn->set('idsession', $session->getID());
	
	return $this->redirect($this->generateUrl('sujet2devspe_phase2', 301));
	
	 }
    return $this->render('Sujet2DevSpeBundle:Sujet2View:phase1.html.twig', array( 'form' => $form->createView() ));
  
}

  public function adresse_enseignantAction()
  {
	
	 // On récupère la requête
	$repository = $this->getDoctrine()->getManager()->getRepository('Sujet2DevSpeBundle:Enseignant');
    $enseignant = $repository->find(1);
	
	// On cree le FormBuilder grace a la methode du controlleur 
	$form = $this->createForm(new EnseignantTypeAdresse, $enseignant);
	
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
		//$_SESSION['id'] = $session->getID();
	return $this->redirect($this->generateUrl('sujet2devspe_phase2', 301));
	
	 }
    return $this->render('Sujet2DevSpeBundle:Sujet2View:adresse_enseignant.html.twig', array( 'form' => $form->createView() ));
  
  }

}

?>