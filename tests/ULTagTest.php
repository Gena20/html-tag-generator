<?php

namespace App\Tags;

use PHPUnit\Framework\TestCase;

class ULTagTest extends TestCase
{
    /**
     * @var ULTag
     */
    protected ULTag $ul;

    protected function setUp(): void
    {
        $this->ul = new ULTag;
    }

    public function testEmptyTag()
    {
        $this->assertSame($this->ul->getView(), '<ul ></ul>');
    }

    public function testSetType()
    {
        $this->ul->setType('circle');
        $this->assertSame($this->ul->getView(), '<ul type="circle"></ul>');
    }

    public function testSetInvalidType()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->ul->setType('list1');
    }


    public function testSetList()
    {
        $this->ul->setList('id', ['class'], 'disc', '1', '2');
        $this->assertSame($this->ul->getView(), '<ul ><li class="class" id="id" type="disc" value="1">1</li>
<li class="class" id="id" type="disc" value="1">2</li></ul>');
    }
}
