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

/**
 * Course controller.
 *
 * @Route("/test/assignment/")
 */


class TestingController extends Controller
{

    /**
     * Finds and displays a Course entity.
     *
     * @Route("/{id}", name="test_show")
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
     * @Route("/grade/{id}", name="test_grade")
     * @Method("GET")
     */
    public function gradeAction(Submission $submission)
    {

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'http://4a1a254e.compilers.sphere-engine.com/api/v3/languages?access_token=9af50a60bc23e532ace4043c0895b024');
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "");
        $result = curl_exec($ch);


        $response = json_decode($result);
        print_r($result);
        //print_r($response);

        /*$ret = file_get_contents('http://4a1a254e.compilers.sphere-engine.com/api/v3/languages?access_token=9af50a60bc23e532ace4043c0895b024');
        var_dump($ret);*/


        curl_close($ch);


        //echo file_get_contents("submissions/HelloWorld.java");

        //var_dump();
        //return $this->redirectToRoute('course_index');
    }



}