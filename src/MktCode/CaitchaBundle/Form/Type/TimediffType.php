<?php

namespace MktCode\CaitchaBundle\Form\Type;

use MktCode\CaitchaBundle\Form\Validator\Constraints\TimediffValidator;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use MktCode\CaitchaBundle\Form\Validator\Constraints as CaitchaAssert;

class TimediffType extends AbstractType
{
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults([
            'constraints' => [new CaitchaAssert\Timediff()],
            'data' => time(),
            'mapped' => false
        ]);
    }

    public function getParent()
    {
        return 'hidden';
    }

    public function getName()
    {
        return 'timediff';
    }
}