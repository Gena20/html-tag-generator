<?php


declare(strict_types=1);
namespace App\Tags;


use App\PairTag;
use App\TagInterfaces\IView;


class LITag extends PairTag implements IView
{
    protected const TAG_NAME = 'li';

    protected static array $attrs;


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
        self::$attrs = array_merge(self::$pairAttrs,  ['type', 'value']);
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


    /**
     * @return string
     */
    public function getView(): string
    {
        $attrs = $this->makeAttrsOutput(static::$attrs);
        return \sprintf('<%s %s>%s</%s>', static::TAG_NAME, $attrs, $this->content ?? '', static::TAG_NAME);
    }

}