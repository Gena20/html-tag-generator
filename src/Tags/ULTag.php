<?php


declare(strict_types=1);
namespace App\Tags;

use App\PairTag;
use App\TagInterfaces\IView;
use App\TagTraits\TypeAttribute;


class ULTag extends PairTag implements IView
{
    use TypeAttribute;

    protected const TAG_NAME = 'ul';
    protected const TYPE = ['disc', 'circle', 'square'];

    protected static array $attrs;

    /**
     * ULTag constructor.
     *
     * @param string $id
     * @param array $classes
     */
    public function __construct($id='', $classes=[])
    {
        self::$attrs = array_merge(self::$pairAttrs,  ['type']);
        parent::__construct($id, $classes);
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