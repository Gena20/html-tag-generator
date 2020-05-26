<?php


declare(strict_types=1);
namespace App;


abstract class PairTag extends Tag
{
    /**
     * @var string
     */
    protected string $content;


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
     * @return $this
     */
    public function setContent(string $content): PairTag
    {
        $this->content = $content;
        return $this;
    }


    /**
     * Get view of html tag
     *
     * @return string
     */
    public function __toString(): string
    {
        $attrs = $this->makeAttrsOutput();
        $content = isset($this->content) ? $this->getContent() : '';
        return \sprintf('<%s %s>%s</%s>', static::TAG_NAME, $attrs, $content, static::TAG_NAME);
    }
}