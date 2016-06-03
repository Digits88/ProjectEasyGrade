<?php

namespace NSEPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use NSEPBundle\Entity\User;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Course
 *
 * @ORM\Table(name="course")
 * @ORM\Entity(repositoryClass="NSEPBundle\Repository\CourseRepository")
 */
class Course
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
     * @ORM\Column(name="courseid", type="string", length=255)
     */
    private $courseid;

    /**
     * @var string
     *
     * @ORM\Column(name="coursename", type="string", length=255)
     */
    private $coursename;


    /**
     * @ORM\ManyToMany(targetEntity="User", mappedBy="courses")
     */
    private $users;


    /**
     * @ORM\ManyToMany(targetEntity="Student", inversedBy="courseid")
     * @ORM\JoinTable(name="course_student")
     */
    private $studentid;

    /**
     * @ORM\OneToMany(targetEntity="Assignment", mappedBy="course")
     */
    private $assignments;


    public function __construct() {
        $this->studentid = new ArrayCollection();
        $this->assignments = new ArrayCollection();
        $this->users = new ArrayCollection();
    }



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
     * Set courseid
     *
     * @param string $courseid
     *
     * @return Course
     */
    public function setCourseid($courseid)
    {
        $this->courseid = $courseid;

        return $this;
    }

    /**
     * Get courseid
     *
     * @return string
     */
    public function getCourseid()
    {
        return $this->courseid;
    }

    /**
     * Set coursename
     *
     * @param string $coursename
     *
     * @return Course
     */
    public function setCoursename($coursename)
    {
        $this->coursename = $coursename;

        return $this;
    }

    /**
     * Get coursename
     *
     * @return string
     */
    public function getCoursename()
    {
        return $this->coursename;
    }

    /**
     * Add courselecturer
     *
     * @param \NSEPBundle\Entity\User $courselecturer
     *
     * @return Course
     */
    public function addCourselecturer(\NSEPBundle\Entity\User $courselecturer)
    {
        $this->courselecturers[] = $courselecturer;

        return $this;
    }

    /**
     * Remove courselecturer
     *
     * @param \NSEPBundle\Entity\User $courselecturer
     */
    public function removeCourselecturer(\NSEPBundle\Entity\User $courselecturer)
    {
        $this->courselecturers->removeElement($courselecturer);
    }

    /**
     * Get courselecturers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCourselecturers()
    {
        return $this->courselecturers;
    }

    /**
     * Add studentid
     *
     * @param \NSEPBundle\Entity\Student $studentid
     *
     * @return Course
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
     * Add assignment
     *
     * @param \NSEPBundle\Entity\Assignment $assignment
     *
     * @return Course
     */
    public function addAssignment(\NSEPBundle\Entity\Assignment $assignment)
    {
        $this->assignments[] = $assignment;

        return $this;
    }

    /**
     * Remove assignment
     *
     * @param \NSEPBundle\Entity\Assignment $assignment
     */
    public function removeAssignment(\NSEPBundle\Entity\Assignment $assignment)
    {
        $this->assignments->removeElement($assignment);
    }

    /**
     * Get assignments
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAssignments()
    {
        return $this->assignments;
    }
}
