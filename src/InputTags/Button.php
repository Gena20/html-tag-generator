<?php


namespace App\InputTags;

use App\InputTag;
use App\TagTraits\StringValueAttribute;


abstract class Button extends InputTag
{
    use StringValueAttribute;


    protected function __construct($id='', $classes=[], $value='')
    {
        $this->attrs = array_merge($this->attrs, ['value']);
        parent::__construct($id, $classes);
        if ($value) $this->setValue($value);
    }
}