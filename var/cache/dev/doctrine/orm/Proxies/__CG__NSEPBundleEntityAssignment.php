<?php

namespace Proxies\__CG__\NSEPBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Assignment extends \NSEPBundle\Entity\Assignment implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'NSEPBundle\\Entity\\Assignment' . "\0" . 'id', '' . "\0" . 'NSEPBundle\\Entity\\Assignment' . "\0" . 'assignmentid', '' . "\0" . 'NSEPBundle\\Entity\\Assignment' . "\0" . 'assignmentname', '' . "\0" . 'NSEPBundle\\Entity\\Assignment' . "\0" . 'assignmentdescription', '' . "\0" . 'NSEPBundle\\Entity\\Assignment' . "\0" . 'course', '' . "\0" . 'NSEPBundle\\Entity\\Assignment' . "\0" . 'studentid', '' . "\0" . 'NSEPBundle\\Entity\\Assignment' . "\0" . 'submissions', '' . "\0" . 'NSEPBundle\\Entity\\Assignment' . "\0" . 'imageFile', '' . "\0" . 'NSEPBundle\\Entity\\Assignment' . "\0" . 'imageName', '' . "\0" . 'NSEPBundle\\Entity\\Assignment' . "\0" . 'updatedAt'];
        }

        return ['__isInitialized__', '' . "\0" . 'NSEPBundle\\Entity\\Assignment' . "\0" . 'id', '' . "\0" . 'NSEPBundle\\Entity\\Assignment' . "\0" . 'assignmentid', '' . "\0" . 'NSEPBundle\\Entity\\Assignment' . "\0" . 'assignmentname', '' . "\0" . 'NSEPBundle\\Entity\\Assignment' . "\0" . 'assignmentdescription', '' . "\0" . 'NSEPBundle\\Entity\\Assignment' . "\0" . 'course', '' . "\0" . 'NSEPBundle\\Entity\\Assignment' . "\0" . 'studentid', '' . "\0" . 'NSEPBundle\\Entity\\Assignment' . "\0" . 'submissions', '' . "\0" . 'NSEPBundle\\Entity\\Assignment' . "\0" . 'imageFile', '' . "\0" . 'NSEPBundle\\Entity\\Assignment' . "\0" . 'imageName', '' . "\0" . 'NSEPBundle\\Entity\\Assignment' . "\0" . 'updatedAt'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Assignment $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function setImageFile(\Symfony\Component\HttpFoundation\File\File $image = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImageFile', [$image]);

        return parent::setImageFile($image);
    }

    /**
     * {@inheritDoc}
     */
    public function getImageFile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImageFile', []);

        return parent::getImageFile();
    }

    /**
     * {@inheritDoc}
     */
    public function setImageName($imageName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImageName', [$imageName]);

        return parent::setImageName($imageName);
    }

    /**
     * {@inheritDoc}
     */
    public function getImageName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImageName', []);

        return parent::getImageName();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setAssignmentid($assignmentid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAssignmentid', [$assignmentid]);

        return parent::setAssignmentid($assignmentid);
    }

    /**
     * {@inheritDoc}
     */
    public function getAssignmentid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAssignmentid', []);

        return parent::getAssignmentid();
    }

    /**
     * {@inheritDoc}
     */
    public function setAssignmentname($assignmentname)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAssignmentname', [$assignmentname]);

        return parent::setAssignmentname($assignmentname);
    }

    /**
     * {@inheritDoc}
     */
    public function getAssignmentname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAssignmentname', []);

        return parent::getAssignmentname();
    }

    /**
     * {@inheritDoc}
     */
    public function setAssignmentdescription($assignmentdescription)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAssignmentdescription', [$assignmentdescription]);

        return parent::setAssignmentdescription($assignmentdescription);
    }

    /**
     * {@inheritDoc}
     */
    public function getAssignmentdescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAssignmentdescription', []);

        return parent::getAssignmentdescription();
    }

    /**
     * {@inheritDoc}
     */
    public function addStudentid(\NSEPBundle\Entity\Student $studentid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addStudentid', [$studentid]);

        return parent::addStudentid($studentid);
    }

    /**
     * {@inheritDoc}
     */
    public function removeStudentid(\NSEPBundle\Entity\Student $studentid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeStudentid', [$studentid]);

        return parent::removeStudentid($studentid);
    }

    /**
     * {@inheritDoc}
     */
    public function getStudentid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStudentid', []);

        return parent::getStudentid();
    }

    /**
     * {@inheritDoc}
     */
    public function setCourse(\NSEPBundle\Entity\Course $course = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCourse', [$course]);

        return parent::setCourse($course);
    }

    /**
     * {@inheritDoc}
     */
    public function getCourse()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCourse', []);

        return parent::getCourse();
    }

    /**
     * {@inheritDoc}
     */
    public function addSubmission(\NSEPBundle\Entity\Submission $submission)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addSubmission', [$submission]);

        return parent::addSubmission($submission);
    }

    /**
     * {@inheritDoc}
     */
    public function removeSubmission(\NSEPBundle\Entity\Submission $submission)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeSubmission', [$submission]);

        return parent::removeSubmission($submission);
    }

    /**
     * {@inheritDoc}
     */
    public function getSubmissions()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubmissions', []);

        return parent::getSubmissions();
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', []);

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt($updatedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', [$updatedAt]);

        return parent::setUpdatedAt($updatedAt);
    }

}
