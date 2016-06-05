<?php

namespace NSEPBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use NSEPBundle\Entity\Submission;
use NSEPBundle\Entity\Assignment;
use NSEPBundle\Form\SubmissionType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

/**
 * Submission controller.
 *
 * @Route("/submission")
 */
class SubmissionController extends Controller
{
    /**
     * Lists all Submission entities.
     *
     * @Route("/", name="submission_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $submissions = $em->getRepository('NSEPBundle:Submission')->findAll();

        return $this->render('submission/index.html.twig', array(
            'submissions' => $submissions,
        ));
    }

    /**
     * Creates a new Submission entity.
     *
     * @Route("/new", name="submission_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $submission = new Submission();
        //$form = $this->createForm('NSEPBundle\Form\SubmissionType', $submission);


        $form = $this->createFormBuilder($submission)
            ->add('imageFile', FileType::class, array(
                'data_class' => 'Symfony\Component\HttpFoundation\File\File',
                'attr' => array('class' => 'sonata-medium-file')
            ))
            ->add('status', TextType::class,['attr'=>['class'=>'abc ghj hhh']])
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($submission);
            $em->flush();

            return $this->redirectToRoute('submission_show', array('id' => $submission->getId()));
        }

        return $this->render('submission/new.html.twig', array(
            'submission' => $submission,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Submission entity.
     *
     * @Route("/{id}", name="submission_show")
     * @Method("GET")
     */
    public function showAction(Submission $submission)
    {
        $deleteForm = $this->createDeleteForm($submission);

        return $this->render('submission/show.html.twig', array(
            'submission' => $submission,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Submission entity.
     *
     * @Route("/{id}/edit", name="submission_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Submission $submission)
    {
        $deleteForm = $this->createDeleteForm($submission);
        $editForm = $this->createForm('NSEPBundle\Form\SubmissionType', $submission);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($submission);
            $em->flush();

            return $this->redirectToRoute('submission_edit', array('id' => $submission->getId()));
        }

        return $this->render('submission/edit.html.twig', array(
            'submission' => $submission,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Submission entity.
     *
     * @Route("/{id}", name="submission_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Submission $submission)
    {
        $form = $this->createDeleteForm($submission);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($submission);
            $em->flush();
        }

        return $this->redirectToRoute('submission_index');
    }

    /**
     * Creates a form to delete a Submission entity.
     *
     * @param Submission $submission The Submission entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Submission $submission)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('submission_delete', array('id' => $submission->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    /**
     * Finds and displays a Submission entity.
     *
     * @Route("/all/{id}", name="submissions_all")
     * @Method("GET")
     */
    public function showsubmissionsAction(Assignment $assignment)
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


}
