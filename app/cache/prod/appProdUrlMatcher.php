<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        // sujet2devspe_acceuil
        if ($pathinfo === '/acceuil') {
            return array (  '_controller' => 'Sujet2\\DevSpeBundle\\Controller\\DevSpeController::accueilAction',  '_route' => 'sujet2devspe_acceuil',);
        }

        if (0 === strpos($pathinfo, '/Creation/phase')) {
            // sujet2devspe_phase2
            if ($pathinfo === '/Creation/phase2') {
                return array (  '_controller' => 'Sujet2\\DevSpeBundle\\Controller\\DevSpeController::phase2Action',  '_route' => 'sujet2devspe_phase2',);
            }

            // sujet2devspe_phase1
            if ($pathinfo === '/Creation/phase1') {
                return array (  '_controller' => 'Sujet2\\DevSpeBundle\\Controller\\DevSpeController::phase1Action',  '_route' => 'sujet2devspe_phase1',);
            }

            // sujet2devspe_phase3
            if ($pathinfo === '/Creation/phase3') {
                return array (  '_controller' => 'Sujet2\\DevSpeBundle\\Controller\\DevSpeController::phase3Action',  '_route' => 'sujet2devspe_phase3',);
            }

        }

        // sujet2devspe_profilenseignant
        if ($pathinfo === '/profilens') {
            return array (  '_controller' => 'Sujet2\\DevSpeBundle\\Controller\\DevSpeController::profilensAction',  '_route' => 'sujet2devspe_profilenseignant',);
        }

        // sujet2devspe_phase4
        if ($pathinfo === '/Creation/phase4') {
            return array (  '_controller' => 'Sujet2\\DevSpeBundle\\Controller\\DevSpeController::phase4Action',  '_route' => 'sujet2devspe_phase4',);
        }

        // sujet2devspe_acceuilenseignant
        if ($pathinfo === '/acceuilens') {
            return array (  '_controller' => 'Sujet2\\DevSpeBundle\\Controller\\DevSpeController::accueilensAction',  '_route' => 'sujet2devspe_acceuilenseignant',);
        }

        // sujet2devspe_adresseenseignant
        if ($pathinfo === '/profiladr') {
            return array (  '_controller' => 'Sujet2\\DevSpeBundle\\Controller\\DevSpeController::adresse_enseignantAction',  '_route' => 'sujet2devspe_adresseenseignant',);
        }

        // sujet2devspe_voeuxenseignant
        if ($pathinfo === '/voeuxens') {
            return array (  '_controller' => 'Sujet2\\DevSpeBundle\\Controller\\DevSpeController::voeux_enseignantAction',  '_route' => 'sujet2devspe_voeuxenseignant',);
        }

        // sujet2devspe_etatvoeuxenseignant
        if ($pathinfo === '/etatvoeux') {
            return array (  '_controller' => 'Sujet2\\DevSpeBundle\\Controller\\DevSpeController::etatvoeuxAction',  '_route' => 'sujet2devspe_etatvoeuxenseignant',);
        }

        // sujet2devspe_acceuilgestionnaire
        if ($pathinfo === '/acceuilges') {
            return array (  '_controller' => 'Sujet2\\DevSpeBundle\\Controller\\DevSpeController::accueilgesAction',  '_route' => 'sujet2devspe_acceuilgestionnaire',);
        }

        if (0 === strpos($pathinfo, '/Creation')) {
            // sujet2devspe_phase5
            if ($pathinfo === '/Creation/phase5') {
                return array (  '_controller' => 'Sujet2\\DevSpeBundle\\Controller\\DevSpeController::phase5Action',  '_route' => 'sujet2devspe_phase5',);
            }

            // sujet2_devspeannullersession
            if ($pathinfo === '/Creation/annuler') {
                return array (  '_controller' => 'Sujet2\\DevSpeBundle\\Controller\\DevSpeController::annulersessionAction',  '_route' => 'sujet2_devspeannullersession',);
            }

            // sujet2_devspevalidersession
            if ($pathinfo === '/Creation/valider') {
                return array (  '_controller' => 'Sujet2\\DevSpeBundle\\Controller\\DevSpeController::validersessionAction',  '_route' => 'sujet2_devspevalidersession',);
            }

        }

        // sujet2redirect
        if ($pathinfo === '/choix') {
            return array (  '_controller' => 'Acme\\SecurityBundle\\Controller\\SecurityController::choixAction',  '_route' => 'sujet2redirect',);
        }

        // sujet2devspe_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'sujet2devspe_homepage');
            }

            return array (  '_controller' => 'Sujet2\\DevSpeBundle\\Controller\\DevSpeController::indexAction',  '_route' => 'sujet2devspe_homepage',);
        }

        // sujet2devspe_visualisersession
        if ($pathinfo === '/visualiser') {
            return array (  '_controller' => 'Sujet2\\DevSpeBundle\\Controller\\DevSpeController::visualisersessionAction',  '_route' => 'sujet2devspe_visualisersession',);
        }

        // sujet2devpspe_uploadcsv
        if ($pathinfo === '/csv') {
            return array (  '_controller' => 'Sujet2\\DevSpeBundle\\Controller\\MoulinetteController::choixfichierAction',  '_route' => 'sujet2devpspe_uploadcsv',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Acme\\SecurityBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'Acme\\SecurityBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'Acme\\SecurityBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
