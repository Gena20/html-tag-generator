<?php


namespace App\InputTags;


class InputRadio extends Selectable
{
    public function __construct($id='', $classes=[], $value='')
    {
        parent::__construct($id, $classes. $value);
        $this->type = "radio";
    }
}