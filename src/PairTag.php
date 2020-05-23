<?php


namespace App;


use App\TagInterfaces\IView;


class PairTag extends Tag implements IView
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

    /**
     * @return string
     */
    public function getView(): string
    {
        $attrs = $this->makeAttrsOutput();
        return \sprintf('<%s %s>%s</%s>', static::TAG_NAME, $attrs, $this->content ?? '', static::TAG_NAME);
    }
}