# MktCodeCaitchaBundle

This bundle adds a form type for invisible bot protection with honeypot and time diff methods.

> caitcha: completely automated invisible test to tell computers and humans apart

## Installation

Install with composer:

    require: {
        "mktcode/caitcha-bundle": "1.1"
    }

Register the bundle in `app/AppKernel.php`:

    $bundles = array(
        // ...
        new MktCode\CaitchaBundle\MktCodeCaitchaBundle(),
    );

## Configuration

You have two possible options to configure this Bundle. One is the honeypot field name, the other one is the minimum
amount of time it has to take to fill in a caitcha-protected form.

    # app/config/config.yml
    mktcode_caitcha:
        honeypot_name: "my_honeypot_field" # defaults to "honey"
        minimum_time: 10 # defaults to 10

## Usage

In your FormType just add a caitcha field:

    $builder->add('caitcha', 'caitcha');

## Contribution

This is my first shared symfony bundle, so feel free to address any deployment/dependency issues whatsoever.
Also if there are other methods (I know there are...) that definitely must be implemented let me know.
