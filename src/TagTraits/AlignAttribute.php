<?php


declare(strict_types=1);
namespace App\TagTraits;


trait AlignAttribute
{
    /**
     * @var string
     */
    protected string $alignType;

    protected array $validAlignTypes = ['left', 'center', 'right'];


    /**
     * @return string
     */
    public function getAlignType(): string
    {
        return $this->alignType;
    }

    /**
     * @param string $alignType
     */
    public function setAlignType(string $alignType): void
    {
        if (!in_array($alignType, $this->validAlignTypes)) {
            throw new \InvalidArgumentException(
                'Argument must be one of: '.implode(', ', $this->validAlignTypes)
            );
        }
        $this->alignType = $alignType;
    }
}