<?php



declare(strict_types=1);
namespace App;


abstract class Tag
{
    /**
     * @var array|string[]
     */
    protected array $attrs = ['class', 'id', 'hidden', 'title'];

    /**
     * @var array|string[]
     */
    protected array $class;

    /**
     * @var string
     */
    protected string $id;

    /**
     * @var string
     */
    protected string $title;

    /**
     * @var bool
     */
    protected bool $isHidden;

    /**
     * @return bool
     */
    public function isHidden(): bool
    {
        return $this->isHidden;
    }

    /**
     * @param bool $isHidden
     */
    public function setIsHidden(bool $isHidden): void
    {
        $this->isHidden = $isHidden;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        if (!preg_match('/^[A-Za-z]+[A-Za-z\d\-_]*/', $id)) {
            throw new \InvalidArgumentException('Invalid "id" argument was given');
        }
        $this->id = $id;
    }

    /**
     * @return string[]
     */
    public function getClass(): array
    {
        return $this->class;
    }

    /**
     * @param string[] $class
     */
    public function setClass(array $class): void
    {
        array_map(
            function ($className) {
                if (!preg_match('/[A-Za-z\d\-_]+/', $className)) {
                    throw new \InvalidArgumentException('Invalid "class" argument was given');
                }
            },
            $class
        );
        $this->class = $class;
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