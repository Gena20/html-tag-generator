<?php

namespace App\Tags;

use PHPUnit\Framework\TestCase;

class InputNumberTagTest extends TestCase
{
    /**
     * @var InputNumberTag
     */
    protected InputNumberTag $input;

    protected function setUp(): void
    {
        $this->input = new InputNumberTag;
    }

    public function testEmptyTag()
    {
        $this->assertSame($this->input->getView(), '<input type="number">');
    }

    public function testConstructor()
    {
        $this->input = new InputNumberTag('id', ['class']);
        $this->input->setMin(0);
        $this->input->setMax(10);
        $this->assertSame($this->input->getView(), '<input class="class" id="id" max="10" min="0" type="number">');
        return $this->input;
    }

    /**
     * @depends testConstructor
     * @param InputNumberTag $input
     */
    public function testSetValue(InputNumberTag $input)
    {
        $input->setValue(5);
        $this->assertSame($input->getView(), '<input class="class" id="id" value="5" max="10" min="0" type="number">');
    }

    /**
     * @depends testConstructor
     * @param InputNumberTag $input
     */
    public function testSetInvalidValue(InputNumberTag $input)
    {
        $this->expectException(\InvalidArgumentException::class);
        $input->setValue(11);
    }
}
