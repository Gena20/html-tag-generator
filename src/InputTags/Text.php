<?php


namespace App\InputTags;

use App\InputTag;
use App\TagTraits\StringValueAttribute;


abstract class Text extends InputTag
{
    use StringValueAttribute;


    /**
     * @var int
     */
    protected int $maxlength;

    /**
     * @var int
     */
    protected int $size;


    protected function __construct($id='', $classes=[], $value='')
    {
        $this->attrs = array_merge($this->attrs, ['value', 'maxlength', 'size']);
        parent::__construct($id, $classes);
        if ($value) $this->setValue($value);
    }


    /**
     * @return int
     */
    public function getMaxlength(): int
    {
        return $this->maxlength;
    }

    /**
     * @param int $maxlength
     */
    public function setMaxlength(int $maxlength): void
    {
        $this->maxlength = $maxlength;
    }

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * @param int $size
     */
    public function setSize(int $size): void
    {
        $this->size = $size;
    }
}