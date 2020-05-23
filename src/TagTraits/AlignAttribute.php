<?php


namespace App\TagTraits;


trait AlignAttribute
{
    /**
     * @var string
     */
    protected string $alignType;


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
        if (!in_array($type, static::ALIGN_TYPE)) {
            throw new \InvalidArgumentException(
                'Argument must be one of: '.implode(', ', static::ALIGN_TYPE)
            );
        }
        $this->type = $type;
    }
}