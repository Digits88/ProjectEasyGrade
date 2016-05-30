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
     * @ORM\ManyToMany(targetEntity="Course", inversedBy="courselecturers")
     * @ORM\JoinTable(name="courselecturers_course")
     */
    private $lecturercourse;


    public function __construct()
    {
        parent::__construct();
        $this->lecturercourse = new \Doctrine\Common\Collections\ArrayCollection();
        // your own logic
    }
}