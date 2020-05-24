<?php


declare(strict_types=1);
namespace App;


use App\TagInterfaces\IView;


class PairTag extends Tag
{
    /**
     * @var string
     */
    protected string $content;

    protected static array $pairAttrs = ['class', 'id', 'hidden', 'title'];

    /**
     * PairTag constructor.
     * @param string $id
     * @param array $classes
     */
    protected function __construct($id='', $classes=[])
    {
        if ($id) $this->setId($id);
        if ($classes) $this->setClass($classes);
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return htmlspecialchars($this->content);
    }

    /**
     * @param string $content
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }

}