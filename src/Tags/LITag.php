<?php


declare(strict_types=1);
namespace App\Tags;


use App\PairTag;
use App\TagTraits\TypeAttribute;


class LITag extends PairTag
{
    use TypeAttribute;

    protected const TAG_NAME = 'li';

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
        $this->validTypes = ['A', 'a', 'I', 'i', '1', 'disc', 'circle', 'square'];
        $this->attrs = array_merge($this->attrs,  ['type', 'value']);
        parent::__construct($id, $classes);
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
}