<?php


declare(strict_types=1);
namespace App\PairTags;


use App\PairTag;
use App\TagTraits\AlignAttribute;


class Table extends PairTag
{
    use AlignAttribute;

    protected const TAG_NAME = 'table';


    /**
     * @var string
     */
    protected string $background;

    /**
     * @var string
     */
    protected string $bgcolor;

    /**
     * @var int
     */
    protected int $border;

    /**
     * @var int
     */
    protected int $cols;

    /**
     * @var int
     */
    protected int $height;

    /**
     * @var int
     */
    protected int $width;


    /**
     * TableTag constructor.
     *
     * @param string $id
     * @param array $classes
     */
    public function __construct($id='', $classes=[])
    {
        $this->attrs = array_merge($this->attrs,  ['background', 'bgcolor', 'border', 'cols', 'height', 'width']);
        parent::__construct($id, $classes);
    }

    /**
     * @return string
     */
    public function getBackground(): string
    {
        return $this->background;
    }

    /**
     * @param string $background
     */
    public function setBackground(string $background): void
    {
        $this->background = $background;
    }

    /**
     * @return string
     */
    public function getBgcolor(): string
    {
        return $this->bgcolor;
    }

    /**
     * @param string $bgcolor
     */
    public function setBgcolor(string $bgcolor): void
    {
        $this->bgcolor = $bgcolor;
    }

    /**
     * @return int
     */
    public function getBorder(): int
    {
        return $this->border;
    }

    /**
     * @param int $border
     */
    public function setBorder(int $border): void
    {
        $this->border = $border;
    }

    /**
     * @return int
     */
    public function getCols(): int
    {
        return $this->cols;
    }

    /**
     * @param int $cols
     */
    public function setCols(int $cols): void
    {
        $this->cols = $cols;
    }

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * @param int $height
     */
    public function setHeight(int $height): void
    {
        $this->height = $height;
    }

    /**
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * @param int $width
     */
    public function setWidth(int $width): void
    {
        $this->width = $width;
    }
}