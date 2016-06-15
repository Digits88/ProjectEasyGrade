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

        $assignment = $submission->getAssignment()->getId();

        if ($submission->getStatus() == 'Pending') {

            $spid = $submission->getSphereengineid();

            $responsedata = Json_decode(file_get_contents("http://4a1a254e.compilers.sphere-engine.com/api/v3/submissions/".$spid."?access_token=0bb470cbea77cab6f0a128bb0eead774&withcmpinfo=true&withSource=true&withOutput=true"));

            //var_dump($responsedata->output);
            $em = $this->getDoctrine()->getManager();
            $submission = $em->getRepository('NSEPBundle:Submission')->find($id);
            $type = $submission->getAssignment()->getType();

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

            $out = $submission->getOutput();

            if((strcmp("integer",$type))== 0)
                $testoutput = (int)($submission->getAssignment()->getTestoutputone());
            elseif((strcmp("integer",$type))!==0)
                $testoutput = ($submission->getAssignment()->getTestoutputone());



            //var_dump($testoutput);
            //var_dump($out);

            if($testoutput == $out){
                $submission->setSubmissionmarks(100);

            }
            else {
                $submission->setSubmissionmarks(0);
            }

        } else if ($submission->getStatus() == 'Not Graded' or $submission->getStatus() == 'Graded') {
            $ch = curl_init();

            $sub = file_get_contents("submissions/".$submission->getImageName());
            $lang = $submission->getLanguage();

            $type = $submission->getAssignment()->getType();

            if((strcmp("integer",$type))== 0)
                $input = (int)($submission->getAssignment()->getTestinputone());
            elseif((strcmp("integer",$type))!==0)
                $input = ($submission->getAssignment()->getTestinputone());


            //var_dump($input);

            curl_setopt($ch, CURLOPT_URL, 'http://4a1a254e.compilers.sphere-engine.com/api/v3/submissions?access_token=9af50a60bc23e532ace4043c0895b024');
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, "sourceCode=$sub&language=$lang&input=$input");
            curl_setopt($ch, CURLOPT_HEADER, false);
            $result = curl_exec($ch);

            curl_close($ch);
            $response = json_decode($result, true);
            //var_dump($response);

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


        return $this->redirectToRoute('submissions_all',['id' => $assignment]);

        //var_dump($assignment);
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

        $aid = $request->query->get('id');
        $em = $this->getDoctrine()->getManager();
        $assignment = $em->getRepository('NSEPBundle:Assignment')->find($aid);
        $cid = $assignment->getCourse()->getId();

        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
            "SELECT a FROM NSEPBundle\Entity\Submission a JOIN a.assignment c WHERE c.id=:cid"
        )->setParameter('cid', $aid);

        $products = $query->getResult();
        return $this->render('submission/index.html.twig', array(
            'submissions' => $products,
            'aid' => $cid,
            'id' => $aid,
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


        $cid = (int)($request->query->get('id'));

        $em = $this->getDoctrine()->getManager();
        $assignment = $em->getRepository('NSEPBundle:Assignment')->find($cid);
        //var_dump($cid);

        $form = $this->createFormBuilder($submission)
            ->add('imageFile', FileType::class, array('label' => 'Choose File',
                'data_class' => 'Symfony\Component\HttpFoundation\File\File',
                'attr' => array('class' => 'sonata-medium-file')
            ))
            ->add('language',ChoiceType::class,array('choices'  => array(
                'Java' => 10,
                'Python' => 4,
                'C#' => 27,
                'Ruby' => 17,
                'C' => 11,
                'C++' => 1,)))
            ->add('assignment',ChoiceType::class,array('choices'  => array(
                $cid => $assignment,)))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($submission);
            $em->flush();

            return $this->redirectToRoute('submission_new', array('id'=> $cid));
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

        return $this->redirectToRoute('user_courses');
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
