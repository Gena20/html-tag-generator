<?php


namespace App\Tags;

use App\InputTag;
use App\TagInterfaces\IView;

class InputTextTag extends InputTag implements IView
{
    protected static array $attrs;


    /**
     * @var string
     */
    protected string $value;

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
        self::$attrs = array_merge(self::$inputAttrs, ['value', 'maxlength', 'pattern', 'size']);
        parent::__construct($id, $classes);
        if ($value) $this->setValue($value);
        $this->type = "text";
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param string $value
     */
    public function setValue(string $value): void
    {
        $this->value = $value;
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


    /**
     * @return string
     */
    public function getView(): string
    {
        $attrs = $this->makeAttrsOutput(static::$attrs);
        return \sprintf('<%s %s>', static::TAG_NAME, $attrs);
    }
}