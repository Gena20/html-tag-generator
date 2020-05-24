<?php

namespace App\Tags;


use PHPUnit\Framework\TestCase;

class MenuTagTest extends TestCase
{
    /**
     * @var MenuTag
     */
    protected MenuTag $ul;

    protected function setUp(): void
    {
        $this->ul = new MenuTag;
    }

    public function testEmptyTag()
    {
        $this->assertSame($this->ul->getView(), '<menu ></menu>');
    }

    public function testSetId()
    {
        $this->ul->setId("ul-tag");
        $this->assertSame($this->ul->getView(), '<menu id="ul-tag"></menu>');
    }

    public function testSetInvalidId()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->ul->setId("1ul-tag");
    }

    public function testSetClass()
    {
        $this->ul->setClass(['first', '2second']);
        $this->assertSame($this->ul->getView(), '<menu class="first 2second"></menu>');
    }

    public function testSetInvalidClass()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->ul->setClass(['первый', '2second']);
    }

    public function testSetType()
    {
        $this->ul->setType('list');
        $this->assertSame($this->ul->getView(), '<menu type="list"></menu>');
    }

    public function testSetInvalidType()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->ul->setType('list1');
    }

    public function testSetLabel()
    {
        $this->ul->setLabel("someLabel");
        $this->assertSame($this->ul->getView(), '<menu label="someLabel"></menu>');
    }

    public function testSetContent()
    {
        $this->ul->setContent('<someContent>');
        $this->assertSame($this->ul->getView(), '<menu >&lt;someContent&gt;</menu>');
    }

    public function testConstructor()
    {
        $this->ul = new MenuTag('id', ['class']);
        $this->assertSame($this->ul->getView(), '<menu class="class" id="id"></menu>');
        return $this->ul;
    }

    /**
     * @depends testConstructor
     * @param MenuTag $ul
     */
    public function testAllAttributes(MenuTag $ul)
    {
        $ul->setType("list");
        $ul->setLabel("label");
        $ul->setHidden(true);
        $ul->setTitle("title");
        $this->assertSame($ul->getView(), '<menu class="class" id="id" hidden="1" title="title" type="list" label="label"></menu>');
    }
}
