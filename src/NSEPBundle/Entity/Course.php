<?php

namespace NSEPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Course
 *
 * @ORM\Table(name="course")
 * @ORM\Entity(repositoryClass="NSEPBundle\Repository\CourseRepository")
 * @UniqueEntity("courseid")
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
     * @ORM\Column(name="courseid", type="string", length=255, unique=true)
     */
    private $courseid;

    /**
     * @var string
     *
     * @ORM\Column(name="coursename", type="string", length=255)
     */
    private $coursename;


    /**
     * @ORM\ManyToMany(targetEntity="User", inversedBy="courses")
     * @ORM\JoinTable(name="users_courses")
     */
    private $users;


    /**
     * @ORM\ManyToMany(targetEntity="Student", inversedBy="courseid")
     * @ORM\JoinTable(name="course_student")
     */
    private $studentid="";

    /**
     * @ORM\OneToMany(targetEntity="Assignment", mappedBy="course")
     */
    private $assignments="";


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




    /**
     * Add user
     *
     * @param \NSEPBundle\Entity\User $user
     *
     * @return Course
     */
    public function addUser(\NSEPBundle\Entity\User $user)
    {
        $this->users[] = $user;

        return $this;
    }

    /**
     * Remove user
     *
     * @param \NSEPBundle\Entity\User $user
     */
    public function removeUser(\NSEPBundle\Entity\User $user)
    {
        $this->users->removeElement($user);
    }

    /**
     * Get users
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsers()
    {
        return $this->users;
    }
}
