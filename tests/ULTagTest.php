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
        $LIs = [(new LITag())->setContent('1'), (new LITag())->setContent('2')];
        $this->ul->setList($LIs);
        $this->assertSame($this->ul->getView(), '<ul ><li >1</li>
<li >2</li></ul>');
        return $this->ul;
    }

    /**
     * @depends testSetList
     * @param ULTag $ul
     */
    public function testClearList(ULTag $ul)
    {
        $ul->clearList();
        $this->assertEmpty($ul->getContent());
    }

    public function testAddLI()
    {
        $this->ul->addLI((new LITag())->setContent('1'));
        $this->assertEquals($this->ul->getView(), '<ul ><li >1</li></ul>');
    }
}
