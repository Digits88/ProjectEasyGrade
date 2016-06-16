<?php

namespace NSEPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * Assignment
 *
 * @ORM\Table(name="assignment")
 * @ORM\Entity(repositoryClass="NSEPBundle\Repository\AssignmentRepository")
 * @UniqueEntity("assignmentid")
 */
class Assignment
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="assignmentid", type="string", length=255, unique=true)
     */
    private $assignmentid;

    /**
     * @var string
     *
     * @ORM\Column(name="assignmentname", type="string", length=255)
     */
    private $assignmentname;

    /**
     * @var string
     *
     * @ORM\Column(name="assignmentdescription", type="string", length=255)
     */
    private $assignmentdescription;




    /**
     * @ORM\ManyToOne(targetEntity="Course", inversedBy="assignments")
     * @ORM\JoinColumn(name="course_id", referencedColumnName="id")
     */
    private $course;

    /**
     * @ORM\ManyToMany(targetEntity="Student", mappedBy="assignmentid")
     */
    private $studentid;


    /**
     * @ORM\OneToMany(targetEntity="Submission", mappedBy="assignment")
     */
    private $submissions;


    /**
     * @var string
     *
     * @ORM\Column(name="testinputone", type="string", length=255)
     */
    private $testinputone='';

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type='';


    /**
     * @var string
     *
     * @ORM\Column(name="testoutputone", type="string", length=255)
     */
    private $testoutputone='';

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set assignmentid
     *
     * @param string $assignmentid
     *
     * @return Assignment
     */
    public function setAssignmentid($assignmentid)
    {
        $this->assignmentid = $assignmentid;

        return $this;
    }

    /**
     * Get assignmentid
     *
     * @return string
     */
    public function getAssignmentid()
    {
        return $this->assignmentid;
    }

    /**
     * Set assignmentname
     *
     * @param string $assignmentname
     *
     * @return Assignment
     */
    public function setAssignmentname($assignmentname)
    {
        $this->assignmentname = $assignmentname;

        return $this;
    }

    /**
     * Get assignmentname
     *
     * @return string
     */
    public function getAssignmentname()
    {
        return $this->assignmentname;
    }


    /**
     * Set assignmentdescription
     *
     * @param string $assignmentdescription
     *
     * @return Assignment
     */
    public function setAssignmentdescription($assignmentdescription)
    {
        $this->assignmentdescription = $assignmentdescription;

        return $this;
    }

    /**
     * Get assignmentdescription
     *
     * @return string
     */
    public function getAssignmentdescription()
    {
        return $this->assignmentdescription;
    }


    public function __construct() {
        $this->courseid = new ArrayCollection();
        $this->studentid = new ArrayCollection();

    }


    /**
     * Add studentid
     *
     * @param \NSEPBundle\Entity\Student $studentid
     *
     * @return Assignment
     */
    public function addStudentid(\NSEPBundle\Entity\Student $studentid)
    {
        $this->studentid[] = $studentid;

        return $this;
    }

    /**
     * Remove studentid
     *
     * @param \NSEPBundle\Entity\Student $studentid
     */
    public function removeStudentid(\NSEPBundle\Entity\Student $studentid)
    {
        $this->studentid->removeElement($studentid);
    }

    /**
     * Get studentid
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getStudentid()
    {
        return $this->studentid;
    }



    /**
     * Add submission
     *
     * @param \NSEPBundle\Entity\Submission $submission
     *
     * @return Assignment
     */
    public function addSubmission(\NSEPBundle\Entity\Submission $submission)
    {
        $this->submissions[] = $submission;

        return $this;
    }

    /**
     * Remove submission
     *
     * @param \NSEPBundle\Entity\Submission $submission
     */
    public function removeSubmission(\NSEPBundle\Entity\Submission $submission)
    {
        $this->submissions->removeElement($submission);
    }

    /**
     * Get submissions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSubmissions()
    {
        return $this->submissions;
    }


    /**
     * Set testinputone
     *
     * @param string $testinputone
     *
     * @return Assignment
     */
    public function setTestinputone($testinputone)
    {
        $this->testinputone = $testinputone;

        return $this;
    }

    /**
     * Get testinputone
     *
     * @return string
     */
    public function getTestinputone()
    {
        return $this->testinputone;
    }



    /**
     * Set testoutputone
     *
     * @param string $testoutputone
     *
     * @return Assignment
     */
    public function setTestoutputone($testoutputone)
    {
        $this->testoutputone = $testoutputone;

        return $this;
    }

    /**
     * Get testoutputone
     *
     * @return string
     */
    public function getTestoutputone()
    {
        return $this->testoutputone;
    }



    /**
     * Set type
     *
     * @param string $type
     *
     * @return Assignment
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set course
     *
     * @param \NSEPBundle\Entity\Course $course
     *
     * @return Assignment
     */
    public function setCourse(\NSEPBundle\Entity\Course $course = null)
    {
        $this->course = $course;

        return $this;
    }

    /**
     * Get course
     *
     * @return \NSEPBundle\Entity\Course
     */
    public function getCourse()
    {
        return $this->course;
    }
}
