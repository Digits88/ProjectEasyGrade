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
use NSEPBundle\Form\CourseType;
use Doctrine\ORM\Query;

/**
 * Course controller.
 *
 * @Route("/test")
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
     * @Route("/submission/{id}", name="test_show")
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
        /*return $this->render('assignment/index.html.twig', array(
            'assignments' => $products,
        ));*/

        var_dump($products);

    }


}