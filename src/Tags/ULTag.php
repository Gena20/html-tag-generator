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
     * ULTag constructor.
     *
     * @param string $id
     * @param array $classes
     */
    public function __construct($id='', $classes=[])
    {
        $this->attrs = array_merge($this->attrs,  ['type']);
        parent::__construct($id, $classes);
    }
}