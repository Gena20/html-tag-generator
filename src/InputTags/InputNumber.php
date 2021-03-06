<?php


namespace App\InputTags;

use App\InputTag;


class InputNumber extends InputTag
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
        if (isset($this->min) && $value < $this->min ||
            isset($this->max) && $value > $this->max)
            throw new \InvalidArgumentException('Argument "value" out of max or min');
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