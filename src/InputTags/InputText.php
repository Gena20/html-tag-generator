<?php


namespace App\InputTags;

use App\InputTag;
use App\TagTraits\StringValueAttribute;

class InputText extends InputTag
{
    use StringValueAttribute;


    /**
     * @var int
     */
    protected int $maxlength;

    /**
     * @var string
     */
    protected string $pattern;

    /**
     * @var int
     */
    protected int $size;


    public function __construct($id='', $classes=[], $value='')
    {
        $this->attrs = array_merge($this->attrs, ['value', 'maxlength', 'pattern', 'size']);
        parent::__construct($id, $classes);
        if ($value) $this->setValue($value);
        $this->type = "text";
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
     * @return string
     */
    public function getPattern(): string
    {
        return $this->pattern;
    }

    /**
     * @param string $pattern
     */
    public function setPattern(string $pattern): void
    {
        $this->pattern = $pattern;
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