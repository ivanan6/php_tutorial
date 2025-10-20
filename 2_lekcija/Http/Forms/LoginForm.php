<?php

namespace Http\Forms;

use Core\ValidationException;
use Core\Validator;

class LoginForm
{
    protected $errors = [];
    protected $attributes;
    public function __construct($attributes)
    {
        $this->attributes = $attributes;
        if (!Validator::email($attributes['email'])) {
            $this->errors['email'] = 'Please provide a valid email address.';
        }

        if (!Validator::string($attributes['password'])) {
            $this->errors['password'] = 'Please provide a valid password.';
        }
    }


    public static function validate($attributes)
    {
        $instance = new static($attributes);
        if ($instance->failed()) {

            $instance->throw();
        } else {
            return $instance;
        }

        //return $instance->failed() ? $instance->throw() : $instance;
    }

    public function errors()
    {
        return $this->errors;
    }

    public function error($field, $message)
    {
        $this->errors[$field] = $message;
        return $this;
    }

    public function failed()

    {

        return count($this->errors);
    }
    public function throw()

    {

        ValidationException::throw($this->errors(), $this->attributes);
    }
}
