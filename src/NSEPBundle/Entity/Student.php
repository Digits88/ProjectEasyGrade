<?php

namespace NSEPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Student
 *
 * @ORM\Table(name="student")
 * @ORM\Entity(repositoryClass="NSEPBundle\Repository\StudentRepository")
 */
class Student
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
     * @ORM\Column(name="studentid", type="string", length=255)
     */
    private $studentid;

    /**
     * @var string
     *
     * @ORM\Column(name="studentname", type="string", length=255)
     */
    private $studentname;

    /**
     * @var string
     *
     * @ORM\Column(name="batchid", type="string", length=255)
     */
    private $batchid;

    /**
     * @ORM\ManyToMany(targetEntity="Course", mappedBy="studentid")
     */
    private $courseid;

    /**
     * @ORM\ManyToMany(targetEntity="Assignment", inversedBy="studentid")
     * @ORM\JoinTable(name="student_assignment")
     */
    private $assignmentid;


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
     * Set studentid
     *
     * @param string $studentid
     *
     * @return Student
     */
    public function setStudentid($studentid)
    {
        $this->studentid = $studentid;

        return $this;
    }

    /**
     * Get studentid
     *
     * @return string
     */
    public function getStudentid()
    {
        return $this->studentid;
    }

    /**
     * Set studentname
     *
     * @param string $studentname
     *
     * @return Student
     */
    public function setStudentname($studentname)
    {
        $this->studentname = $studentname;

        return $this;
    }

    /**
     * Get studentname
     *
     * @return string
     */
    public function getStudentname()
    {
        return $this->studentname;
    }

    /**
     * Set batchid
     *
     * @param string $batchid
     *
     * @return Student
     */
    public function setBatchid($batchid)
    {
        $this->batchid = $batchid;

        return $this;
    }

    /**
     * Get batchid
     *
     * @return string
     */
    public function getBatchid()
    {
        return $this->batchid;
    }

    public function __construct() {
        $this->courseid = new ArrayCollection();
        $this->assignmentid = new ArrayCollection();
    }

}

