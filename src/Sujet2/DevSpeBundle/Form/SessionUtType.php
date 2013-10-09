<?php

namespace Sujet2\DevSpeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SessionUtType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('sesLibelle', 'text') 
            ->add('dateClo', 'date' ,array('input' => 'datetime','widget' => 'single_text','format' => 'ddMMyyyy'))
            ->add('dateOuv', 'date', array(
                                                'widget' => 'single_text',
                                                'input' => 'datetime',
                                                'format' => 'dd/MM/yyyy',
                                                'attr' => array('class' => 'date'),
                                                )
            
        );
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Sujet2\DevSpeBundle\Entity\SessionUt'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sujet2_devspebundle_session';
    }
}
