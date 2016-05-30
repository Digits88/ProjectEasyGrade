<?php

namespace NSEPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Assignment
 *
 * @ORM\Table(name="assignment")
 * @ORM\Entity(repositoryClass="NSEPBundle\Repository\AssignmentRepository")
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
     * @ORM\Column(name="assignmentid", type="string", length=255)
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
     * @var \DateTime
     *
     * @ORM\Column(name="createddate", type="datetime")
     */
    private $createddate;


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



    /**
     * Set createddate
     *
     * @param \DateTime $createddate
     *
     * @return Assignment
     */
    public function setCreateddate($createddate)
    {
        $this->createddate = $createddate;

        return $this;
    }

    /**
     * Get createddate
     *
     * @return \DateTime
     */
    public function getCreateddate()
    {
        return $this->createddate;
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
