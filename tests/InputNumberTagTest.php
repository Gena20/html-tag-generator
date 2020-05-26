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
        $this->assertEquals('<input type="number">', (string)$this->input);
    }

    public function testConstructor()
    {
        $this->input = new InputNumber('id', ['class']);
        $this->input->setMin(0);
        $this->input->setMax(10);
        $this->assertEquals('<input class="class" id="id" max="10" min="0" type="number">', (string)$this->input);
        return $this->input;
    }

    /**
     * @depends testConstructor
     * @param InputNumber $input
     */
    public function testSetValue(InputNumber $input)
    {
        $input->setValue(5);
        $this->assertEquals('<input class="class" id="id" value="5" max="10" min="0" type="number">', (string)$input);
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
