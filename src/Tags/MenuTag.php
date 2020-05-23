<?php


declare(strict_types=1);
namespace App\Tags;

use App\PairTag;
use App\TagInterfaces\IView;
use App\TagTraits\TypeAttribute;


class MenuTag extends PairTag implements IView
{
    use TypeAttribute;

    protected const TAG_NAME = 'menu';
    protected const TYPE = ['context', 'toolbar', 'list'];

    protected static array $attrs;


    /**
     * @var string
     */
    protected string $label;


    /**
     * MenuTag constructor.
     *
     * @param string $id
     * @param array $classes
     * @param $type
     * @param $label
     */
    public function __construct($id='', $classes=[], $type = '', $label = '')
    {
        self::$attrs = array_merge(self::$pairAttrs, ['type', 'label']);
        parent::__construct($id, $classes);
        if ($type) $this->setType($type);
        if ($label) $this->setLabel($label);
    }

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @param string $label
     */
    public function setLabel(string $label): void
    {
        $this->label = $label;
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