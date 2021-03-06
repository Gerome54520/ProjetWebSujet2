<?php
// src/Acme/SecurityBundle/Controller/SecurityController.php;
 
namespace Acme\SecurityBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
use Sujet2\DevSpeBundle\Resources\views\Sujet2View;
use Sujet2\DevSpeBundle\Entity\Assoc;
use Sujet2\DevSpeBundle\Entity\AssocRepository;
use Symfony\Component\HttpFoundation\Session\Session;

class SecurityController extends Controller
{
  public function loginAction()
  {
  // Si le visiteur est déjà identifié, on le redirige vers l'accueil
    if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
      return $this->redirect($this->generateUrl('sujet2devspe_homepage'));
    }
 
    $request = $this->getRequest();
    $session = $request->getSession();
 
    // On vérifie s'il y a des erreurs d'une précédente soumission du formulaire
    if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
      $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
    } else {
      $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
      $session->remove(SecurityContext::AUTHENTICATION_ERROR);
    }
 
    return $this->render('FOSUserBundle:Security:login.html.twig', array(
      // Valeur du précédent nom d'utilisateur entré par l'internaute
      'last_username' => $session->get(SecurityContext::LAST_USERNAME),
      'error'         => $error,
    ));
  }
  
   


 public function choixAction() {
     $user = $this->container->get('security.context')->getToken()->getUser();
     $userID = $user->getId();
     $enseignant = $this->getDoctrine()->getManager()->getRepository('Sujet2DevSpeBundle:Assoc')->getEnseignantId($userID);
	
	 $sessionn = new Session();
	 $sessionn->set('idenseignant',$enseignant );
	 
	
     if ($this->get('security.context')->isGranted('ROLE_ADMIN'))
	   return $this->render('Sujet2DevSpeBundle:Sujet2View:acceuilgestionnaire.html.twig', array ( 'idenseignant' => $sessionn->get('idenseignant')));
	 else
	   return $this->render('Sujet2DevSpeBundle:Sujet2View:acceuilenseignant.html.twig', array ( 'idenseignant' => $sessionn->get('idenseignant')));
	 }
}
?>