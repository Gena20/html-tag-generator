<?php


declare(strict_types=1);
namespace App;


use App\TagInterfaces\IViewer;


class PairTag extends Tag implements IViewer
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
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getView(): string
    {
        $attrs = $this->makeAttrsOutput();
        $content = isset($this->content) ? $this->getContent() : '';
        return \sprintf('<%s %s>%s</%s>', static::TAG_NAME, $attrs, $content, static::TAG_NAME);
    }
}