<?php

namespace NSEPBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\CallbackTransformer;

class CourseType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('courseid',TextType::class,array('label' => 'Course ID', 'attr' => array('placeholder'=>'Course ID','class' => 'form-control col-sm-2')))
            ->add('coursename',TextType::class,array('label' => 'Course Name', 'attr' => array('placeholder'=>'Course Name','class' => 'form-control col-sm-2')))
            ->add('users',null,array('class' => 'NSEPBundle:User', "multiple" => "true",'label' => 'Lecturers', 'attr' => array('class' => 'form-control')))
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'NSEPBundle\Entity\Course'
        ));
    }
}
