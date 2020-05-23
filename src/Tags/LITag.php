<?php


namespace App\Tags;


use App\PairTag;


class LITag extends PairTag
{
    protected const TAG_NAME = 'li';


    /**
     * @var string
     */
    protected string $type;

    /**
     * @var int
     */
    protected int $value;

    /**
     * ULTag constructor.
     *
     * @param string $id
     * @param array $classes
     * @param string $type
     * @param int $value
     */
    public function __construct($id='', $classes=[], $type='', $value=1)
    {
        array_merge($this->attrs, ['type', 'value']);
        if ($id) $this->setId($id);
        if ($classes) $this->setClass($classes);
        if ($type) $this->setType($type);
        if ($value) $this->setValue($value);
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
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }
}