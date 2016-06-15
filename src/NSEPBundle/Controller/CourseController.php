<?php

namespace NSEPBundle\Controller;

use Doctrine\ORM\Query\ResultSetMapping;
use NSEPBundle\Entity\User;
use Symfony\Component\Console\Logger\ConsoleLogger;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use NSEPBundle\Entity\Course;
use NSEPBundle\Entity\Assignment;
use NSEPBundle\Entity\Submission;
use NSEPBundle\Form\CourseType;
use Doctrine\ORM\Query;

/**
 * Course controller.
 *
 * @Route("/user/course")
 */
class CourseController extends Controller
{
    /**
     * Lists all Course entities.
     *
     * @Route("/admin/allcourses", name="course_index")
     * @Method("GET")
     */
    public function indexAction()
    {

        $em = $this->getDoctrine()->getManager();

        $courses = $em->getRepository('NSEPBundle:Course')->findAll();



        return $this->render('course/index.html.twig', array(
            'courses' => $courses,
        ));
    }


    /**
     * Finds and displays a Course entity.
     *
     * @Route("/mycourses", name="user_courses")
     */
    public function usercourseAction()
    {

        $cid=$this->getUser()->getId();


        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery(
            "SELECT a FROM NSEPBundle\Entity\Course a JOIN a.users u WHERE u.id=$cid"
        );

        $courses = $query->getResult();
        return $this->render('course/index.html.twig', array(
            'courses' => $courses,
        ));


    }








    /**
     * Creates a new Course entity.
     *
     * @Route("/new", name="course_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $course = new Course();
        $form = $this->createForm('NSEPBundle\Form\CourseType', $course);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            //var_dump($course);
            $em = $this->getDoctrine()->getManager();
            $em->persist($course);
            $em->flush();

            return $this->redirectToRoute('user_courses', array('id' => $course->getId()));
        }

        return $this->render('course/new.html.twig', array(
            'course' => $course,
            'form' => $form->createView(),


        ));
    }

    /**
     * Finds and displays a Course entity.
     *
     * @Route("/{id}", name="course_show")
     * @Method("GET")
     */
    public function showAction(Course $course)
    {
        $deleteForm = $this->createDeleteForm($course);

        return $this->render('course/show.html.twig', array(
            'course' => $course,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Course entity.
     *
     * @Route("/{id}/edit", name="course_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Course $course)
    {
        $deleteForm = $this->createDeleteForm($course);
        $editForm = $this->createForm('NSEPBundle\Form\CourseType', $course);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($course);
            $em->flush();

            return $this->redirectToRoute('course_show', array('id' => $course->getId()));
        }

        return $this->render('course/edit.html.twig', array(
            'course' => $course,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Course entity.
     *
     * @Route("/{id}", name="course_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Course $course)
    {
        $form = $this->createDeleteForm($course);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($course);
            $em->flush();
        }

        return $this->redirectToRoute('user_courses');
    }

    /**
     * Creates a form to delete a Course entity.
     *
     * @param Course $course The Course entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Course $course)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('course_delete', array('id' => $course->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }





}
