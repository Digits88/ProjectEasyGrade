<?php
/**
 * Created by PhpStorm.
 * User: Yasiru
 * Date: 6/1/2016
 * Time: 12:20 PM
 */

namespace NSEPBundle\Controller;

use Doctrine\ORM\Query\ResultSetMapping;
use Symfony\Component\Console\Logger\ConsoleLogger;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use NSEPBundle\Entity\Course;
use NSEPBundle\Entity\User;
use NSEPBundle\Entity\Assignment;
use NSEPBundle\Entity\Submission;
use NSEPBundle\Form\CourseType;
use Doctrine\ORM\Query;
use Symfony\Component\HttpFoundation\Response;

/**
 * Course controller.
 *
 * @Route("/test/assignment")
 */


class TestingController extends Controller
{

    /**
     * Finds and displays a Course entity.
     *
     * @Route("/qwerty/{id}", name="test_show")
     * @Method("GET")
     */
    public function showAction(Course $course)
    {
        $em = $this->getDoctrine()->getManager();
        //$cid=2;
        $query = $em->createQuery(
            "SELECT a FROM NSEPBundle\Entity\Assignment a JOIN a.course c WHERE c.id=:cid"
        )->setParameter('cid', $course);

        $products = $query->getResult();
        return $this->render('assignment/index.html.twig', array(
            'assignments' => $products,
        ));

        var_dump($products);

    }

    /**
     * Finds and displays a Course entity.
     *
     * @Route("/testing/{id}", name="test_courseshow")
     * @Method("GET")
     */
    public function showcourseAction(User $user)
    {
        $em = $this->getDoctrine()->getManager();
        $cid=2;
        $query = $em->createQuery(
            "SELECT a FROM NSEPBundle\Entity\Course a JOIN a.user c WHERE c.id=:cid"
        )->setParameter('cid', $cid);

        $products = $query->getResult();
        /*return $this->render('assignment/index.html.twig', array(
            'assignments' => $products,
        ));*/

        var_dump($products);

    }



    /**
     * Finds and displays a Course entity.
     *
     * @Route("/submission/{id}", name="test_showass")
     * @Method("GET")
     */
    public function showassignmentAction(Assignment $assignment)
    {


        $em = $this->getDoctrine()->getManager();
        //$cid=2;
        $query = $em->createQuery(
            "SELECT a FROM NSEPBundle\Entity\Submission a JOIN a.assignment c WHERE c.id=:cid"
        )->setParameter('cid', $assignment);

        $products = $query->getResult();
        return $this->render('submission/index.html.twig', array(
            'submissions' => $products,
        ));

        //var_dump($products);

    }

    /**
     * Grade all Submission entities.
     *
     * @Route("/grade", name="test_grade")
     */
    public function gradeAction(Request $request)
    {
        $id=$request->query->get('id'); //this is used for GET requests
        //$id = $request->request->get('id');   //this is used for POST requests
        //$id=1;


        $state = "FAIL:".$id;

        $em = $this->getDoctrine()->getManager();
        $submission = $em->getRepository('NSEPBundle:Submission')->find($id);

        if($submission->getStatus()=='Pending'){

            $spid = $submission->getSphereengineid();

            //print_r($spid);
            $ch = curl_init();


            //var_dump('test');
            curl_setopt($ch, CURLOPT_URL, 'http://4a1a254e.compilers.sphere-engine.com/api/v3/submissions/47250420?access_token=0bb470cbea77cab6f0a128bb0eead774');
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch,  CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS,"withOutput=true&withInput=true&withStderr=true&withCmpinfo=true");
            curl_setopt($ch, CURLOPT_HEADER, false);
            $result = curl_exec($ch);

            curl_close($ch);
            var_dump($result);
            $response=json_decode($result,true);
            //print_r($response['id']);
            //$sphereengineID = $response['id'];
            print_r($response);

            /*$em = $this->getDoctrine()->getManager();
            $submission = $em->getRepository('NSEPBundle:Submission')->find($id);*/

            if (!$submission) {
                throw $this->createNotFoundException(
                    'No product found for id '.$id
                );
            }


            //$submission->setStatus("Pending");

        }

        else if($submission->getStatus()=='Not Graded'){
            $ch = curl_init();

            $sub = file_get_contents("submissions/test13.c");
            $lang = 11;

            //$lg = $submission->getLanguage();

            curl_setopt($ch, CURLOPT_URL, 'http://4a1a254e.compilers.sphere-engine.com/api/v3/submissions?access_token=9af50a60bc23e532ace4043c0895b024');
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch,  CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS,"sourceCode=$sub&language=$lang");
            curl_setopt($ch, CURLOPT_HEADER, false);
            $result = curl_exec($ch);

            curl_close($ch);
            $response=json_decode($result,true);
            //print_r($response['id']);
            $sphereengineID = $response['id'];

            $em = $this->getDoctrine()->getManager();
            $submission = $em->getRepository('NSEPBundle:Submission')->find($id);

            if (!$submission) {
                throw $this->createNotFoundException(
                    'No product found for id '.$id
                );
            }

            $submission->setSphereengineid($sphereengineID);
            $submission->setStatus("Pending");
        }






        $em->flush();


        //return $this->redirectToRoute('submission_index');
        //return new Response($state);
    }

    /**
     * Fetch status of  Submission entities.
     *
     * @Route("/grade/status/{id}", name="test_status")
     * @Method("GET")
     */
    public function statusAction(Submission $submission)
    {

        $ch = curl_init();


        $subid=47083353;

        curl_setopt($ch, CURLOPT_URL, 'http://4a1a254e.compilers.sphere-engine.com/api/v3/submissions/47083353?access_token=9af50a60bc23e532ace4043c0895b024');
        curl_setopt($ch, CURLOPT_POST, 1);
        //curl_setopt($ch, CURLOPT_POSTFIELDS,"subid=$subid");
        $result = curl_exec($ch);
        $response = json_decode($result);
        curl_close($ch);

        //var_dump();
        //return $this->redirectToRoute('course_index');
    }

    /**
     * Finds and displays a Course entity.
     *
     * @Route("/test/m2m", name="test_co")
     */
    public function m2mAction()
    {
        //$user = $this->container->get('security.context')->getToken()->getUser();
        $cid=$this->getUser()->getId();


        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery(
            "SELECT a FROM NSEPBundle\Entity\Course a JOIN a.users u WHERE u.id=$cid"
        );

        $products = $query->getResult();
        return $this->render('course/index.html.twig', array(
            'courses' => $products,
        ));

        //var_dump($products);

    }





}