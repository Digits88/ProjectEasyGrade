<?php

namespace NSEPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity
 * @Vich\Uploadable
 */
class Submission
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
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @Vich\UploadableField(mapping="submission_image", fileNameProperty="imageName")
     *
     * @var File
     */
    private $imageFile;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @var string
     */
    private $imageName;

    /**
     * @ORM\Column(type="datetime")
     *
     * @var \DateTime
     */
    private $updatedAt;


    /**
     * @ORM\ManyToOne(targetEntity="Assignment", inversedBy="submissions")
     * @ORM\JoinColumn(name="assignment_id", referencedColumnName="id")
     */
    private $assignment;


    /**
     * @ORM\Column(type="string", length=255)
     *
     * @var string
     */
    private $status="Not Graded";

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @var string
     */
    private $sphereengineid="Null";

    /**
     * @ORM\Column(type="integer", length=255)
     *
     * @var int
     */
    private $language=0;


    /**
     * @ORM\Column(type="integer", length=255)
     *
     * @var int
     */
    private $submissionmarks=0;

    /**
     * @ORM\Column(type="integer", length=255)
     * used to store the variable of result which containing the status of compilation
     *
     * @var int
     */
    private $result=0;

    /**
     * @ORM\Column(type="integer", length=255)
     * used to keep the status variable sent by sphere engine
     *
     * @var int
     */
    private $spstatus=0;

    /**
     * @ORM\Column(type="decimal", length=255)
     * used to keep the status variable sent by sphere engine
     *
     * @var decimal
     */
    private $time=0;

    /**
     * @ORM\Column(type="integer", length=255)
     * used to keep the memory variable sent by sphere engine
     *
     * @var int
     */
    private $memory=0;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @var string
     */
    private $output="Null";


    /**
     * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
     * of 'UploadedFile' is injected into this setter to trigger the  update. If this
     * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
     * must be able to accept an instance of 'File' as the bundle will inject one here
     * during Doctrine hydration.
     *
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image
     *
     * @return Submission
     */
    public function setImageFile(File $image = null)
    {
        $this->imageFile = $image;

        if ($image) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTime('now');
        }

        return $this;
    }

    /**
     * @return File
     */
    public function getImageFile()
    {
        return $this->imageFile;
    }

    /**
     * @param string $imageName
     *
     * @return Submission
     */
    public function setImageName($imageName)
    {
        $this->imageName = $imageName;

        return $this;
    }

    /**
     * @return string
     */
    public function getImageName()
    {
        return $this->imageName;
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
     * Gets the last update time.
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Submission
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Submission
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set assignment
     *
     * @param \NSEPBundle\Entity\Assignment $assignment
     *
     * @return Submission
     */
    public function setAssignment(\NSEPBundle\Entity\Assignment $assignment = null)
    {
        $this->assignment = $assignment;

        return $this;
    }

    /**
     * Get assignment
     *
     * @return \NSEPBundle\Entity\Assignment
     */
    public function getAssignment()
    {
        return $this->assignment;
    }

    /**
     * Set sphereengineid
     *
     * @param string $sphereengineid
     *
     * @return Submission
     */
    public function setSphereengineid($sphereengineid)
    {
        $this->sphereengineid = $sphereengineid;

        return $this;
    }

    /**
     * Get sphereengineid
     *
     * @return string
     */
    public function getSphereengineid()
    {
        return $this->sphereengineid;
    }

    /**
     * Set submissionmarks
     *
     * @param integer $submissionmarks
     *
     * @return Submission
     */
    public function setSubmissionmarks($submissionmarks)
    {
        $this->submissionmarks = $submissionmarks;

        return $this;
    }

    /**
     * Get submissionmarks
     *
     * @return integer
     */
    public function getSubmissionmarks()
    {
        return $this->submissionmarks;
    }



    /**
     * Set language
     *
     * @param integer $language
     *
     * @return Submission
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return integer
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set result
     *
     * @param integer $result
     *
     * @return Submission
     */
    public function setResult($result)
    {
        $this->result = $result;

        return $this;
    }

    /**
     * Get result
     *
     * @return integer
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Set spstatus
     *
     * @param integer $spstatus
     *
     * @return Submission
     */
    public function setSpstatus($spstatus)
    {
        $this->spstatus = $spstatus;

        return $this;
    }

    /**
     * Get spstatus
     *
     * @return integer
     */
    public function getSpstatus()
    {
        return $this->spstatus;
    }

    /**
     * Set time
     *
     * @param string $time
     *
     * @return Submission
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return string
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set memory
     *
     * @param integer $memory
     *
     * @return Submission
     */
    public function setMemory($memory)
    {
        $this->memory = $memory;

        return $this;
    }

    /**
     * Get memory
     *
     * @return integer
     */
    public function getMemory()
    {
        return $this->memory;
    }

    /**
     * Set output
     *
     * @param string $output
     *
     * @return Submission
     */
    public function setOutput($output)
    {
        $this->output = $output;

        return $this;
    }

    /**
     * Get output
     *
     * @return string
     */
    public function getOutput()
    {
        return $this->output;
    }




}
