<?php

namespace App\Tags;

use PHPUnit\Framework\TestCase;
use App\PairTags\UL;
use App\PairTags\LI;

class ULTagTest extends TestCase
{
    /**
     * @var UL
     */
    protected UL $ul;

    protected function setUp(): void
    {
        $this->ul = new UL;
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
        $LIs = [(new LI())->setContent('1'), (new LI())->setContent('2')];
        $this->ul->setList($LIs);
        $this->assertSame($this->ul->getView(), '<ul ><li >1</li>
<li >2</li></ul>');
        return $this->ul;
    }

    /**
     * @depends testSetList
     * @param UL $ul
     */
    public function testClearList(UL $ul)
    {
        $ul->clearList();
        $this->assertEmpty($ul->getContent());
    }

    public function testAddLI()
    {
        $this->ul->addLI((new LI())->setContent('1'));
        $this->assertSame($this->ul->getView(), '<ul ><li >1</li></ul>');
    }
}
