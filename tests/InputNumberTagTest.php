<?php

namespace App\Tags;

use PHPUnit\Framework\TestCase;
use App\InputTags\InputNumber;

class InputNumberTagTest extends TestCase
{
    /**
     * @var InputNumber
     */
    protected InputNumber $input;

    protected function setUp(): void
    {
        $this->input = new InputNumber;
    }

    public function testEmptyTag()
    {
        $this->assertSame($this->input->getView(), '<input type="number">');
    }

    public function testConstructor()
    {
        $this->input = new InputNumber('id', ['class']);
        $this->input->setMin(0);
        $this->input->setMax(10);
        $this->assertSame($this->input->getView(), '<input class="class" id="id" max="10" min="0" type="number">');
        return $this->input;
    }

    /**
     * @depends testConstructor
     * @param InputNumber $input
     */
    public function testSetValue(InputNumber $input)
    {
        $input->setValue(5);
        $this->assertSame($input->getView(), '<input class="class" id="id" value="5" max="10" min="0" type="number">');
    }

    /**
     * @depends testConstructor
     * @param InputNumber $input
     */
    public function testSetInvalidValue(InputNumber $input)
    {
        $this->expectException(\InvalidArgumentException::class);
        $input->setValue(11);
    }
}
