<?php


declare(strict_types=1);
namespace App\Tags;

use App\PairTag;
use App\TagInterfaces\IView;

class MenuTag extends PairTag implements IView
{
    protected const TAG_NAME = 'menu';
    protected const TYPE = ['context', 'toolbar', 'list'];


    /**
     * @var string
     */
    protected string $type;

    /**
     * @var string
     */
    protected string $label;


    /**
     * MenuTag constructor.
     *
     * @param string $id
     * @param array $classes
     */
    public function __construct($id='', $classes=[])
    {
        array_merge($this->attrs, ['type', 'label']);
        $this->setId($id);
        $this->setClass($classes);
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        if (!in_array($type, static::TYPE)) {
            throw new \InvalidArgumentException(
                'Argument must be one of: '.implode(', ', static::TYPE)
            );
        }
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @param string $label
     */
    public function setLabel(string $label): void
    {
        $this->label = $label;
    }


    /**
     * @return string
     */
    public function getView(): string
    {
        $attrs = $this->makeAttrsOutput();
        return \sprintf('<%s %s>%s</%s>', static::TAG_NAME, $attrs, $this->content ?? '', static::TAG_NAME);
    }

    /**
     * @return string
     */
    protected function makeAttrsOutput(): string
    {
        $output = [];
        array_map(
            function ($attr) use (&$output) {
                if (isset($this->$attr)) {
                    $outputStr =  is_array($this->$attr) ? implode(' ', $this->$attr) : $this->$attr;
                    $output[] = \sprintf('%s="%s"',$attr, $outputStr);
                }
            },
            $this->attrs
        );
        return implode(' ', $output);
    }
}