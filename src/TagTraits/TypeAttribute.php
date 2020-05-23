<?php


declare(strict_types=1);
namespace App\TagTraits;


trait TypeAttribute
{
    /**
     * @var string
     */
    protected string $type;


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
}