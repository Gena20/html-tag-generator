<?php


declare(strict_types=1);
namespace App\Tags;

use App\PairTag;
use App\TagTraits\TypeAttribute;


class MenuTag extends PairTag
{
    use TypeAttribute;

    protected const TAG_NAME = 'menu';
    protected const TYPE = ['context', 'toolbar', 'list'];



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
        $this->attrs = array_merge($this->attrs, ['type', 'label']);
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
}