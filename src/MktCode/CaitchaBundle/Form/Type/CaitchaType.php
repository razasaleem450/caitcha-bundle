<?php

namespace MktCode\CaitchaBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CaitchaType extends AbstractType
{
    private $config;

    public function __construct($config)
    {
        $this->config = $config;
    }

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add($this->config['honeypot_name'], 'honeypot')
            ->add('caitcha_timediff', 'timediff')
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults([
            'label' => false,
            'mapped' => false
        ]);
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'caitcha';
    }
}
