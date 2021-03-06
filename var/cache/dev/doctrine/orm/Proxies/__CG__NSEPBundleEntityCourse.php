<?php

namespace Proxies\__CG__\NSEPBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Course extends \NSEPBundle\Entity\Course implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'NSEPBundle\\Entity\\Course' . "\0" . 'id', '' . "\0" . 'NSEPBundle\\Entity\\Course' . "\0" . 'courseid', '' . "\0" . 'NSEPBundle\\Entity\\Course' . "\0" . 'coursename', '' . "\0" . 'NSEPBundle\\Entity\\Course' . "\0" . 'users', '' . "\0" . 'NSEPBundle\\Entity\\Course' . "\0" . 'studentid', '' . "\0" . 'NSEPBundle\\Entity\\Course' . "\0" . 'assignments'];
        }

        return ['__isInitialized__', '' . "\0" . 'NSEPBundle\\Entity\\Course' . "\0" . 'id', '' . "\0" . 'NSEPBundle\\Entity\\Course' . "\0" . 'courseid', '' . "\0" . 'NSEPBundle\\Entity\\Course' . "\0" . 'coursename', '' . "\0" . 'NSEPBundle\\Entity\\Course' . "\0" . 'users', '' . "\0" . 'NSEPBundle\\Entity\\Course' . "\0" . 'studentid', '' . "\0" . 'NSEPBundle\\Entity\\Course' . "\0" . 'assignments'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Course $proxy) {
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
    public function setCourseid($courseid)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCourseid', [$courseid]);

        return parent::setCourseid($courseid);
    }

    /**
     * {@inheritDoc}
     */
    public function getCourseid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCourseid', []);

        return parent::getCourseid();
    }

    /**
     * {@inheritDoc}
     */
    public function setCoursename($coursename)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCoursename', [$coursename]);

        return parent::setCoursename($coursename);
    }

    /**
     * {@inheritDoc}
     */
    public function getCoursename()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCoursename', []);

        return parent::getCoursename();
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
    public function addAssignment(\NSEPBundle\Entity\Assignment $assignment)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAssignment', [$assignment]);

        return parent::addAssignment($assignment);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAssignment(\NSEPBundle\Entity\Assignment $assignment)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAssignment', [$assignment]);

        return parent::removeAssignment($assignment);
    }

    /**
     * {@inheritDoc}
     */
    public function getAssignments()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAssignments', []);

        return parent::getAssignments();
    }

    /**
     * {@inheritDoc}
     */
    public function addUser(\NSEPBundle\Entity\User $user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addUser', [$user]);

        return parent::addUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function removeUser(\NSEPBundle\Entity\User $user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeUser', [$user]);

        return parent::removeUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsers()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsers', []);

        return parent::getUsers();
    }

}
