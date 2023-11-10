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

        if (strlen($password) < $this->options['minLength']) {
            $errors['minLength'] = 'too small';
        }

        if ($this->options['containNumbers'] && !preg_match('/\d/', $password)) {
            $errors['containNumbers'] = 'should contain at least one number';
        }

        return $errors;
    }
}