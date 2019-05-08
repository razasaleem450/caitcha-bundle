<?php

namespace MktCode\CaitchaBundle\Form\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class TimediffValidator extends ConstraintValidator
{
    private $config;

    public function __construct($config)
    {
        $this->config = $config;
    }

    public function validate($time, Constraint $constraint)
    {
        if (time() - $time < $this->config['minimum_time']) {
            $this->context->addViolation(str_replace(
                '%minimum_time%',
                $this->config['minimum_time'],
                $constraint->message
            ));
        }
    }
}