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
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
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
     * Grade all Submission entities.
     *
     * @Route("/grade", name="test_grade")
     */
    public function gradeAction(Request $request)
    {
        $id = $request->query->get('id'); //this is used for GET requests
        //$id = $request->request->get('id');   //this is used for POST requests
        //$id=1;



        $state = "FAIL:" . $id;

        $em = $this->getDoctrine()->getManager();
        $submission = $em->getRepository('NSEPBundle:Submission')->find($id);

        if ($submission->getStatus() == 'Pending') {

            $spid = $submission->getSphereengineid();


            $responsedata = Json_decode(file_get_contents("http://4a1a254e.compilers.sphere-engine.com/api/v3/submissions/".$spid."?access_token=0bb470cbea77cab6f0a128bb0eead774&withcmpinfo=true&withSource=true&withOutput=true"));


            //var_dump($responsedata);



            $em = $this->getDoctrine()->getManager();
            $submission = $em->getRepository('NSEPBundle:Submission')->find($id);

            if (!$submission) {
                throw $this->createNotFoundException(
                    'No product found for id ' . $id
                );
            }

            $submission->setResult($responsedata->result);
            $submission->setSpstatus($responsedata->status);
            $submission->setTime($responsedata->time);
            $submission->setMemory($responsedata->memory);
            $submission->setOutput($responsedata->output);
            $submission->setStatus("Graded");

        } else if ($submission->getStatus() == 'Not Graded') {
            $ch = curl_init();

            $sub = file_get_contents("submissions/".$submission->getImageName());
            $lang = $submission->getLanguage();

            //$input = (int)file_get_contents("submissions/testinputfortest14.txt");

            //$lg = $submission->getLanguage();

            curl_setopt($ch, CURLOPT_URL, 'http://4a1a254e.compilers.sphere-engine.com/api/v3/submissions?access_token=9af50a60bc23e532ace4043c0895b024');
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, "sourceCode=$sub&language=$lang");
            curl_setopt($ch, CURLOPT_HEADER, false);
            $result = curl_exec($ch);

            curl_close($ch);
            $response = json_decode($result, true);
            //print_r($response['id']);
            $sphereengineID = $response['id'];

            $em = $this->getDoctrine()->getManager();
            $submission = $em->getRepository('NSEPBundle:Submission')->find($id);

            if (!$submission) {
                throw $this->createNotFoundException(
                    'No product found for id ' . $id
                );
            }

            $submission->setSphereengineid($sphereengineID);
            $submission->setStatus("Pending");
        }


        $em->flush();


        return $this->redirectToRoute('submission_index');
        //return new Response($state);
    }



    /**
     * Finds and displays a Submission entity.
     *
     * @Route("/all", name="submissions_all")
     * @Method("GET")
     */
    public function showsubmissionsAction(Request $request)
    {

        $sid = $request->query->get('id');

        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            "SELECT a FROM NSEPBundle\Entity\Submission a JOIN a.assignment c WHERE c.id=:cid"
        )->setParameter('cid', $sid);

        $products = $query->getResult();
        return $this->render('submission/index.html.twig', array(
            'submissions' => $products,
        ));

        //var_dump($products);

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
            ->add('imageFile', FileType::class, array('label' => 'Choose File',
                'data_class' => 'Symfony\Component\HttpFoundation\File\File',
                'attr' => array('class' => 'sonata-medium-file')
            ))
            ->add('language',ChoiceType::class,array('choices'  => array(
                'Java' => 10,
                'Python' => 4,
                'Java7' => 55,)))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($submission);
            $em->flush();

            return $this->redirectToRoute('submission_index', array('id' => $submission->getId()));
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



}
