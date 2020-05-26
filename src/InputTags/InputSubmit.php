<?php


namespace App\InputTags;


class InputSubmit extends Button
{
    public function __construct($id='', $classes=[], $value='')
    {
        parent::__construct($id, $classes, $value);
        $this->type = 'submit';
    }
}