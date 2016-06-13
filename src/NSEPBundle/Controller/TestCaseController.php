<?php

namespace NSEPBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use NSEPBundle\Entity\TestCase;
use NSEPBundle\Form\TestCaseType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
/**
 * TestCase controller.
 *
 * @Route("/testcase")
 */
class TestCaseController extends Controller
{
    /**
     * Lists all TestCase entities.
     *
     * @Route("/", name="testcase_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $testCases = $em->getRepository('NSEPBundle:TestCase')->findAll();

        return $this->render('testcase/index.html.twig', array(
            'testCases' => $testCases,
        ));
    }

    /**
     * Creates a new TestCase entity.
     *
     * @Route("/new", name="testcase_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $testCase = new TestCase();
        //$form = $this->createForm('NSEPBundle\Form\TestCaseType', $testCase);

        $form = $this->createFormBuilder($testCase)
            ->add('imageFile', FileType::class, array('label' => 'Choose File',
                'data_class' => 'Symfony\Component\HttpFoundation\File\File',
                'attr' => array('class' => 'sonata-medium-file')
            ))
            ->getForm();


        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($testCase);
            $em->flush();

            return $this->redirectToRoute('testcase_show', array('id' => $testCase->getId()));
        }

        return $this->render('testcase/new.html.twig', array(
            'testCase' => $testCase,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TestCase entity.
     *
     * @Route("/{id}", name="testcase_show")
     * @Method("GET")
     */
    public function showAction(TestCase $testCase)
    {
        $deleteForm = $this->createDeleteForm($testCase);

        return $this->render('testcase/show.html.twig', array(
            'testCase' => $testCase,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing TestCase entity.
     *
     * @Route("/{id}/edit", name="testcase_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, TestCase $testCase)
    {
        $deleteForm = $this->createDeleteForm($testCase);
        $editForm = $this->createForm('NSEPBundle\Form\TestCaseType', $testCase);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($testCase);
            $em->flush();

            return $this->redirectToRoute('testcase_edit', array('id' => $testCase->getId()));
        }

        return $this->render('testcase/edit.html.twig', array(
            'testCase' => $testCase,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a TestCase entity.
     *
     * @Route("/{id}", name="testcase_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, TestCase $testCase)
    {
        $form = $this->createDeleteForm($testCase);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($testCase);
            $em->flush();
        }

        return $this->redirectToRoute('testcase_index');
    }

    /**
     * Creates a form to delete a TestCase entity.
     *
     * @param TestCase $testCase The TestCase entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TestCase $testCase)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('testcase_delete', array('id' => $testCase->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
