<?php


namespace App\Tags;

use App\Tag;
use App\TagInterfaces\IView;


class InputTag extends Tag
{
    protected const TAG_NAME = 'input';

    protected static array $inputAttrs = ['class', 'id', 'hidden', 'title',
        'name', 'disabled', 'form', 'required', 'readonly', 'type'];

    /**
     * @var string
     */
    protected string $name;

    /**
     * @var bool
     */
    protected bool $disabled;

    /**
     * @var string
     */
    protected string $form;

    /**
     * @var bool
     */
    protected bool $required;

    /**
     * @var bool
     */
    protected bool $readonly;

    /**
     * @var string
     */
    protected string $type;


    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return bool
     */
    public function isDisabled(): bool
    {
        return $this->disabled;
    }

    /**
     * @param bool $disabled
     */
    public function setDisabled(bool $disabled): void
    {
        $this->disabled = $disabled;
    }

    /**
     * @return string
     */
    public function getForm(): string
    {
        return $this->form;
    }

    /**
     * @param string $form
     */
    public function setForm(string $form): void
    {
        $this->form = $form;
    }

    /**
     * @return bool
     */
    public function isRequired(): bool
    {
        return $this->required;
    }

    /**
     * @param bool $required
     */
    public function setRequired(bool $required): void
    {
        $this->required = $required;
    }

    /**
     * @return bool
     */
    public function isReadonly(): bool
    {
        return $this->readonly;
    }

    /**
     * @param bool $readonly
     */
    public function setReadonly(bool $readonly): void
    {
        $this->readonly = $readonly;
    }


}