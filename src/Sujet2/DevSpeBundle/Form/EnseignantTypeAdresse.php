<?php

namespace Sujet2\DevSpeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class EnseignantTypeAdresse extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
<<<<<<< HEAD
            ->add('ensAdresse','text',array('label'=>"Saisir votre adresse :"))

=======
<<<<<<< HEAD
            ->add('ensAdresse','text',array('label'=>"Saisir votre adresse :"))
=======
            ->add('ensAdresse','text', array ( 'label' => 'Votre nouvelle adresse:'))
>>>>>>> 39153aa81a69b5cfddb33c90bc1dc53cc81bf1c5
>>>>>>> 7b160890c23327ebb462a8a50dbf4f283bf22bb5
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Sujet2\DevSpeBundle\Entity\Enseignant'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'sujet2_devspebundle_enseignant';
    }
}
