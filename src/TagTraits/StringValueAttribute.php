<?php


declare(strict_types=1);
namespace App\TagTraits;


trait StringValueAttribute
{
    /**
     * @var string
     */
    protected string $value;

    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }

    /**
     * @param string $value
     */
    public function setValue(string $value): void
    {
        $this->value = $value;
    }
}
