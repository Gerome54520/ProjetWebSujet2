<?php

namespace Sujet2\DevSpeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ContrainteType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre',    'integer' , array ('label' => 'Temps en minutes :'))
            ->add('pts',       'integer' , array ('label' => 'Points :'))
            ->add('plus' ,   'checkbox', array('required' => false))
		    ->add('typePts' , 'entity' , array( 'class'    => 'Sujet2DevSpeBundle:TypePts',
												'property' => 'libelle',
												'multiple' => false))
												
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Sujet2\DevSpeBundle\Entity\Contrainte'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sujet2_devspebundle_contrainte';
    }
}
