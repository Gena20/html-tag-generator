<?php


namespace App;


abstract class PairTag extends Tag
{
    /**
     * @var string
     */
    protected string $content;

    protected function __construct()
    {
        $this->attrs[] = 'content';
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }
}