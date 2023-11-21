<?php

namespace App;

class PasswordValidator
{
    private $options;

    public function __construct($options = [])
    {
        $this->options = array_merge([
            'minLength' => 8,
            'containNumbers' => false
        ], $options);
    }

    public function validate($password)
    {
        $errors = [];

        $containsNumber = false;

        for ($i = 0; $i < strlen($password); $i++) {
            if (strcmp($password[$i], '0') >= 0 && strcmp($password[$i], '9') <= 0) {
                $containsNumber = true;
                break;
            }
        }

        if (strlen($password) < $this->options['minLength']) {
            $errors['minLength'] = 'too small';
        }

        if ($this->options['containNumbers'] && !$containsNumber) {
            $errors['containNumbers'] = 'should contain at least one number';
        }

        return $errors;
    }
}