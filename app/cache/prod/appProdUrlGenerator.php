<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        'sujet2devspe_acceuil' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sujet2\\DevSpeBundle\\Controller\\DevSpeController::accueilAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/acceuil',    ),  ),  4 =>   array (  ),),
        'sujet2devspe_phase2' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sujet2\\DevSpeBundle\\Controller\\DevSpeController::phase2Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Creation/phase2',    ),  ),  4 =>   array (  ),),
        'sujet2devspe_phase1' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sujet2\\DevSpeBundle\\Controller\\DevSpeController::phase1Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Creation/phase1',    ),  ),  4 =>   array (  ),),
        'sujet2devspe_phase3' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sujet2\\DevSpeBundle\\Controller\\DevSpeController::phase3Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Creation/phase3',    ),  ),  4 =>   array (  ),),
        'sujet2devspe_profilenseignant' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sujet2\\DevSpeBundle\\Controller\\DevSpeController::profilensAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profilens',    ),  ),  4 =>   array (  ),),
        'sujet2devspe_phase4' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sujet2\\DevSpeBundle\\Controller\\DevSpeController::phase4Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Creation/phase4',    ),  ),  4 =>   array (  ),),
        'sujet2devspe_acceuilenseignant' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sujet2\\DevSpeBundle\\Controller\\DevSpeController::accueilensAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/acceuilens',    ),  ),  4 =>   array (  ),),
        'sujet2devspe_adresseenseignant' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sujet2\\DevSpeBundle\\Controller\\DevSpeController::adresse_enseignantAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profiladr',    ),  ),  4 =>   array (  ),),
        'sujet2devspe_voeuxenseignant' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sujet2\\DevSpeBundle\\Controller\\DevSpeController::voeux_enseignantAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/voeuxens',    ),  ),  4 =>   array (  ),),
        'sujet2devspe_etatvoeuxenseignant' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sujet2\\DevSpeBundle\\Controller\\DevSpeController::etatvoeuxAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/etatvoeux',    ),  ),  4 =>   array (  ),),
        'sujet2devspe_acceuilgestionnaire' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sujet2\\DevSpeBundle\\Controller\\DevSpeController::accueilgesAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/acceuilges',    ),  ),  4 =>   array (  ),),
        'sujet2devspe_phase5' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sujet2\\DevSpeBundle\\Controller\\DevSpeController::phase5Action',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Creation/phase5',    ),  ),  4 =>   array (  ),),
        'sujet2_devspeannullersession' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sujet2\\DevSpeBundle\\Controller\\DevSpeController::annulersessionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Creation/annuler',    ),  ),  4 =>   array (  ),),
        'sujet2_devspevalidersession' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sujet2\\DevSpeBundle\\Controller\\DevSpeController::validersessionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Creation/valider',    ),  ),  4 =>   array (  ),),
        'sujet2redirect' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\SecurityBundle\\Controller\\SecurityController::choixAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/choix',    ),  ),  4 =>   array (  ),),
        'sujet2devspe_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sujet2\\DevSpeBundle\\Controller\\DevSpeController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),),
        'sujet2devspe_visualisersession' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sujet2\\DevSpeBundle\\Controller\\DevSpeController::visualisersessionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/visualiser',    ),  ),  4 =>   array (  ),),
        'sujet2devpspe_uploadcsv' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sujet2\\DevSpeBundle\\Controller\\MoulinetteController::choixfichierAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/csv',    ),  ),  4 =>   array (  ),),
        'fos_user_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\SecurityBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),),
        'fos_user_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\SecurityBundle\\Controller\\SecurityController::checkAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),),
        'fos_user_security_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\SecurityBundle\\Controller\\SecurityController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),),
        'fos_user_profile_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/',    ),  ),  4 =>   array (  ),),
        'fos_user_profile_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/edit',    ),  ),  4 =>   array (  ),),
        'fos_user_registration_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/',    ),  ),  4 =>   array (  ),),
        'fos_user_registration_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/check-email',    ),  ),  4 =>   array (  ),),
        'fos_user_registration_confirm' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/register/confirm',    ),  ),  4 =>   array (  ),),
        'fos_user_registration_confirmed' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/confirmed',    ),  ),  4 =>   array (  ),),
        'fos_user_resetting_request' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/request',    ),  ),  4 =>   array (  ),),
        'fos_user_resetting_send_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/send-email',    ),  ),  4 =>   array (  ),),
        'fos_user_resetting_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/check-email',    ),  ),  4 =>   array (  ),),
        'fos_user_resetting_reset' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/resetting/reset',    ),  ),  4 =>   array (  ),),
        'fos_user_change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/change-password',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}
