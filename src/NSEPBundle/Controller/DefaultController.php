<?php

namespace NSEPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('NSEPBundle:Default:index.html.twig');
    }


    /**
     * Get user username
     * @return string $username
     */
    public function usernameAction()
    {
        if( $this->container->get( 'security.authorization_checker' )->isGranted( 'IS_AUTHENTICATED_FULLY' ) )
        {
            $user = $this->container->get('security.token_storage')->getToken()->getUser();
            $username = $user->getUsername();
        }
        return new Response($username);
    }
}
