<?php


namespace App\Tags;

use App\InputTag;
use App\TagInterfaces\IView;

class InputNumberTag extends InputTag implements IView
{
    /**
     * @var int
     */
    protected int $value;

    /**
     * @var int
     */
    protected int $max;

    /**
     * @var int
     */
    protected int $min;


    public function __construct($id='', $classes=[], $value=0)
    {
        $this->attrs = array_merge($this->attrs, ['value', 'max', 'min']);
        parent::__construct($id, $classes);
        if ($value) $this->setValue($value);
        $this->type = "number";
    }


    /**
     * @return string
     */
    public function getView(): string
    {
        $attrs = $this->makeAttrsOutput();
        return \sprintf('<%s %s>', static::TAG_NAME, $attrs);
    }

    /**
     * @return int
     */
    public function getValue(): int
    {
        return $this->value;
    }

    /**
     * @param int $value
     */
    public function setValue(int $value): void
    {
        $this->value = $value;
    }

    /**
     * @return int
     */
    public function getMax(): int
    {
        return $this->max;
    }

    /**
     * @param int $max
     */
    public function setMax(int $max): void
    {
        $this->max = $max;
    }

    /**
     * @return int
     */
    public function getMin(): int
    {
        return $this->min;
    }

    /**
     * @param int $min
     */
    public function setMin(int $min): void
    {
        $this->min = $min;
    }


}