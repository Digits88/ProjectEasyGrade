<?php

namespace NSEPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;



class DefaultController extends Controller
{
    /**
     * This routes different users to different places in when login
     * @Route("/" , name="user_homepage")
     */
    public function indexAction()
    {
        $uname=$this->getUser()->getUsername();

        if($uname == 'adminuser'){
            return $this->redirectToRoute('user_index');
        }
        else{
            return $this->redirectToRoute('user_courses');
        }
    }


    /**
     * Get user username to display in the side bar
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
