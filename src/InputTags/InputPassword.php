<?php


namespace App\InputTags;


class InputPassword extends Text
{
    public function __construct($id='', $classes=[], $value='')
    {
        parent::__construct($id, $classes, $value);
        $this->type = "password";
    }
}