<?php

namespace MktCode\CaitchaBundle\Form\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class Timediff extends Constraint
{
    public $message = 'You were to fast. This form should at least take %minimum_time% seconds to fill in. Presumably you are a bot!';

    public function validatedBy()
    {
        return 'mktcode_caitcha_timediff';
    }
}