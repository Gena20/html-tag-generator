<?php


declare(strict_types=1);
namespace App\Tags;

use App\PairTag;
use App\TagTraits\TypeAttribute;


class ULTag extends PairTag
{
    use TypeAttribute;

    protected const TAG_NAME = 'ul';
    protected const TYPE = ['disc', 'circle', 'square'];

    /**
     * @var array|LITag[]
     */
    protected array $list;


    /**
     * ULTag constructor.
     *
     * @param string $id
     * @param array $classes
     */
    public function __construct($id='', $classes=[])
    {
        $this->attrs = array_merge($this->attrs,  ['type']);
        parent::__construct($id, $classes);
        $this->list = [];
        $this->content='';
    }

    /**
     * @param string $id
     * @param array $class
     * @param string $type
     * @param string ...$contentOfElems
     */
    public function setList($id='', $class=[], $type='', string ...$contentOfElems): void
    {
        $this->list = [];
        foreach ($contentOfElems as $contentOfElem) {
            $this->list[] = (new LITag($id, $class, $type))->setContent(htmlspecialchars($contentOfElem));
        }
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        $liTags = [];
        foreach ($this->list as $liTag) {
            $liTags[] = $liTag->getView();
        }
        return implode(PHP_EOL, $liTags);
    }
}