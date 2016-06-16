<?php

namespace NSEPBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use NSEPBundle\Entity\Assignment;
use NSEPBundle\Entity\Course;
use NSEPBundle\Form\AssignmentType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Ob\HighchartsBundle\Highcharts\Highchart;

/**
 * Assignment controller.
 *
 * @Route("/user/course/mycourses/assignments")
 */
class AssignmentController extends Controller
{
    /**
     * Lists all Assignment entities.
     *
     * @Route("/", name="assignment_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $assignments = $em->getRepository('NSEPBundle:Assignment')->findAll();

        return $this->render('assignment/index.html.twig', array(
            'assignments' => $assignments,
        ));




    }


    /**
     * Finds and displays a Assignment entity.
     *
     * @Route("/assignmentlist", name="course_assignments")
     */
    public function courseassignmentAction(Request $request)
    {

        //$cid=$request->request->get('id');
        $cid=$request->query->get('id');

        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery(
            "SELECT a FROM NSEPBundle\Entity\Assignment a JOIN a.course c WHERE c.id=$cid"
        );

        $assignments = $query->getResult();
        return $this->render('assignment/index.html.twig', array(
            'assignments' => $assignments,
            'cid' => $cid,
        ));


    }


    /**
     * Creates a new Assignment entity.
     *
     * @Route("/new", name="assignment_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {



        $cid = (int)($request->query->get('cid'));
        //var_dump($id);
        $assignment = new Assignment();


        $em = $this->getDoctrine()->getManager();
        $course = $em->getRepository('NSEPBundle:Course')->find($cid);

        //var_dump($course);
        //$form = $this->createForm('NSEPBundle\Form\AssignmentType', $assignment);

        $form = $this->createFormBuilder($assignment)
            ->add('assignmentid',TextType::class,array('label' => 'Assignment ID', 'attr' => array('placeholder'=>'Assignment ID','class' => 'form-control col-sm-2')))
            ->add('assignmentname',TextType::class,array('label' => 'Assignment Name', 'attr' => array('placeholder'=>'Assignment Name','class' => 'form-control col-sm-2')))
            ->add('assignmentdescription',TextType::class,array('label' => 'Assignment Description', 'attr' => array('placeholder'=>'Assignment Description','class' => 'form-control col-sm-2')))
            ->add('testinputone',TextareaType::class,array('label' => 'Test Input one','data' => 'null', 'attr' => array('placeholder'=>'Test Input one','class' => 'form-control col-sm-2')))
            ->add('testoutputone',TextareaType::class,array('label' => 'Test Output One', 'attr' => array('placeholder'=>'Test Output One','class' => 'form-control col-sm-2')))
            ->add('type',ChoiceType::class,array('choices'  => array(
                'String' => 'string',
                'Integer' => 'integer',)))
            ->add('course',ChoiceType::class,array('choices'  => array(
                $cid => $course,)))
            ->getForm();


        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($assignment);
            $em->flush();

            return $this->redirectToRoute('user_courses', array('id' => $assignment->getId()));
        }

        return $this->render('assignment/new.html.twig', array(
            'assignment' => $assignment,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Assignment entity.
     *
     * @Route("/{id}", name="assignment_show")
     * @Method("GET")
     */
    public function showAction(Assignment $assignment)
    {
        $deleteForm = $this->createDeleteForm($assignment);

        return $this->render('assignment/show.html.twig', array(
            'assignment' => $assignment,
            'delete_form' => $deleteForm->createView(),
        ));

    }

    /**
     * Displays a form to edit an existing Assignment entity.
     *
     * @Route("/{id}/edit", name="assignment_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Assignment $assignment)
    {
        $deleteForm = $this->createDeleteForm($assignment);
        $editForm = $this->createForm('NSEPBundle\Form\AssignmentType', $assignment);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($assignment);
            $em->flush();

            return $this->redirectToRoute('assignment_edit', array('id' => $assignment->getId()));
        }

        return $this->render('assignment/edit.html.twig', array(
            'assignment' => $assignment,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Assignment entity.
     *
     * @Route("/{id}", name="assignment_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Assignment $assignment)
    {
        $form = $this->createDeleteForm($assignment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($assignment);
            $em->flush();
        }

        return $this->redirectToRoute('user_courses');
    }

    /**
     * Creates a form to delete a Assignment entity.
     *
     * @param Assignment $assignment The Assignment entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Assignment $assignment)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('assignment_delete', array('id' => $assignment->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }


    /**
     * This generates graphs
     * @Route("/graphnew/{id}",name="assignment_graph")
     * @Method("GET")
     */
    public function chartAction(Assignment $assignment)
    {



        $id = $assignment->getId();
        $assignmentname = $assignment->getAssignmentname();

        $em = $this->getDoctrine()->getManager();
        $submissions = $em->getRepository('NSEPBundle:Submission')->findBy(
            array('assignment' => $assignment)
        );

        $graphmarks = array();
        foreach ($submissions as $value) {
            $marks = $value->getSubmissionmarks();
            array_push($graphmarks,$marks);
            //echo "$marks <br>";

        }

        //var_dump($graphmarks);


        // Chart
        $series = array(
            array("name" => "Marks",    "data" => $graphmarks)
        );

        $ob = new Highchart();
        $ob->chart->renderTo('linechart');  // The #id of the div where to render the chart
        $ob->title->text("".$assignmentname. " Assignment Marks Distribution");
        $ob->xAxis->title(array('text'  => "Submission Number"));
        $ob->yAxis->title(array('text'  => "Marks"));
        $ob->series($series);

        return $this->render('NSEPBundle:Default:index.html.twig', array(
            'chart' => $ob,
            'aid' => $id,
        ));
    }


}




