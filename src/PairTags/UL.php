<?php


declare(strict_types=1);
namespace App\PairTags;

use App\PairTag;
use App\TagTraits\TypeAttribute;


class UL extends PairTag
{
    use TypeAttribute;

    protected const TAG_NAME = 'ul';

    /**
     * @var array|LI[]
     */
    protected array $list = [];


    /**
     * ULTag constructor.
     *
     * @param string $id
     * @param array $classes
     */
    public function __construct($id='', $classes=[])
    {
        $this->validTypes = ['disc', 'circle', 'square'];
        $this->attrs = array_merge($this->attrs,  ['type']);
        parent::__construct($id, $classes);
        $this->content = '';
    }

    /**
     * @param array|LI[] $LIs
     */
    public function setList(array $LIs): void
    {
        $this->list = [];
        foreach ($LIs as $li)
            $this->list[] = $li;
    }

    /**
     * Clear $list
     */
    public function clearList()
    {
        $this->list = [];
    }

    /**
     * @param LI $li
     * @return $this
     */
    public function addLI(LI $li)
    {
        $this->list[] = $li;
        return $this;
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