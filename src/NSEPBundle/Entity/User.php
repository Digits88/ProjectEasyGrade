<?php

/**
 * Created by PhpStorm.
 * User: Yasiru
 * Date: 5/25/2016
 * Time: 5:04 PM
 */

namespace NSEPBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use NSEPBundle\Entity\Course;


/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToMany(targetEntity="Course", inversedBy="users")
     * @ORM\JoinTable(name="users_courses")
     */
    private $courses;


    public function __construct()
    {
        parent::__construct();
        $this->courses = new \Doctrine\Common\Collections\ArrayCollection();

        // your own logic
    }

    
    /**
     * Add course
     *
     * @param \NSEPBundle\Entity\Course $course
     *
     * @return User
     */
    public function addCourse(\NSEPBundle\Entity\Course $course)
    {
        $this->courses[] = $course;

        return $this;
    }

    /**
     * Remove course
     *
     * @param \NSEPBundle\Entity\Course $course
     */
    public function removeCourse(\NSEPBundle\Entity\Course $course)
    {
        $this->courses->removeElement($course);
    }

    /**
     * Get courses
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCourses()
    {
        return $this->courses;
    }
}
