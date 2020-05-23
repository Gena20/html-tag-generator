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
     */
    public function __construct($id='', $classes=[])
    {
        array_merge($this->attrs, ['type', 'label']);
        if ($id) $this->setId($id);
        if ($classes) $this->setClass($classes);
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