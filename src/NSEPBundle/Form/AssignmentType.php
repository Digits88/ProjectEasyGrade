<?php

namespace NSEPBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class AssignmentType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('assignmentid',TextType::class,array('label' => 'Assignment ID', 'attr' => array('placeholder'=>'Assignment ID','class' => 'form-control col-sm-2')))
            ->add('assignmentname',TextType::class,array('label' => 'Assignment Name', 'attr' => array('placeholder'=>'Assignment Nam','class' => 'form-control col-sm-2')))
            ->add('assignmentdescription',TextType::class,array('label' => 'Assignment Description', 'attr' => array('placeholder'=>'Assignment Description','class' => 'form-control col-sm-2')))
            ->add('createddate', DateType::class,array('label' => 'Created Date','attr' =>array('disabled' =>'true','class'=>'form-control')))
            ->add('courseid',null,array('label' => 'Course', 'attr' => array('class' => 'form-control')))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'NSEPBundle\Entity\Assignment'
        ));
    }
}
