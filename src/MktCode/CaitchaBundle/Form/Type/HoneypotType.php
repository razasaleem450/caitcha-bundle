<?php

namespace MktCode\CaitchaBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints\Blank;

class HoneypotType extends AbstractType
{
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults([
            'constraints' => [new Blank()],
            'attr' => [
                'tabindex' => '-1',
                'style' => 'position: absolute; top: -9999px; z-index: -1;'
            ],
            'required' => false,
            'mapped' => false,
            'label' => false
        ]);
    }

    public function getParent()
    {
        return 'text';
    }

    public function getName()
    {
        return 'honeypot';
    }
}