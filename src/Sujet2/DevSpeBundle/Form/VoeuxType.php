<?php

namespace Sujet2\DevSpeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class VoeuxType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('lots' , 'entity' , array( 'class' => 'Sujet2DevSpeBundle:Lot',
            'property' => 'entreprise.entrs',
            'multiple' => false,
            'expanded' => false))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Sujet2\DevSpeBundle\Entity\Voeux'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sujet2_devspebundle_voeux';
    }
}
