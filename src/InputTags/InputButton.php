<?php


namespace App\InputTags;


class InputButton extends Button
{
    public function __construct($id='', $classes=[], $value='')
    {
        parent::__construct($id, $classes, $value);
        $this->type = 'button';
    }
}