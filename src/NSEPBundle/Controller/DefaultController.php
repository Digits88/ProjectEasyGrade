<?php

namespace NSEPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use NSEPBundle\Entity\Submission;
use NSEPBundle\Entity\User;

class DefaultController extends Controller
{
    /**
     * This routes different users to different places in when login
     * @Route("/")
     */
    public function indexAction()
    {
        $uname=$this->getUser()->getUsername();

        if($uname == 'adminuser'){
            //$rolelll=5;
            return $this->redirectToRoute('user_index');
        }
        else{
            //$rolelll=6;
            return $this->redirectToRoute('user_courses');
        }



        //return $this->render('NSEPBundle:Default:index.html.twig');
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
