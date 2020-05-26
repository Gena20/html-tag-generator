<?php


namespace App\InputTags;


class InputCheckbox extends Selectable
{
    public function __construct($id='', $classes=[], $value='')
    {
        parent::__construct($id, $classes. $value);
        $this->type = "checkbox";
    }
}