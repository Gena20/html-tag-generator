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