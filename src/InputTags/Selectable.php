<?php


namespace App\InputTags;

use App\InputTag;
use App\TagTraits\StringValueAttribute;


abstract class Selectable extends InputTag
{
    use StringValueAttribute;


    /**
     * @var bool
     */
    protected bool $checked;


    protected function __construct($id='', $classes=[], $value='')
    {
        $this->attrs = array_merge($this->attrs, ['value', 'checked']);
        parent::__construct($id, $classes);
        if ($value) $this->setValue($value);
    }

    /**
     * @return bool
     */
    public function isChecked(): bool
    {
        return $this->checked;
    }

    /**
     * @param bool $checked
     */
    public function setChecked(bool $checked): void
    {
        $this->checked = $checked;
    }
}