<?php


namespace App\InputTags;


class InputText extends Text
{
    /**
     * @var string
     */
    protected string $pattern;


    public function __construct($id='', $classes=[], $value='')
    {
        $this->attrs = array_merge($this->attrs, ['pattern']);
        parent::__construct($id, $classes, $value);
        $this->type = "text";
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
}