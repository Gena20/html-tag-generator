<?php

namespace App\Tags;


use PHPUnit\Framework\TestCase;

class MenuTagTest extends TestCase
{
    /**
     * @var MenuTag
     */
    protected MenuTag $menu;

    protected function setUp(): void
    {
        $this->menu = new MenuTag;
    }

    public function testEmptyTag()
    {
        $this->assertSame($this->menu->getView(), '<menu ></menu>');
    }

    public function testSetId()
    {
        $this->menu->setId("ul-tag");
        $this->assertSame($this->menu->getView(), '<menu id="ul-tag"></menu>');
    }

    public function testSetInvalidId()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->menu->setId("1ul-tag");
    }

    public function testSetClass()
    {
        $this->menu->setClass(['first', '2second']);
        $this->assertSame($this->menu->getView(), '<menu class="first 2second"></menu>');
    }

    public function testSetInvalidClass()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->menu->setClass(['первый', '2second']);
    }

    public function testSetType()
    {
        $this->menu->setType('list');
        $this->assertSame($this->menu->getView(), '<menu type="list"></menu>');
    }

    public function testSetInvalidType()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->menu->setType('list1');
    }

    public function testSetLabel()
    {
        $this->menu->setLabel("someLabel");
        $this->assertSame($this->menu->getView(), '<menu label="someLabel"></menu>');
    }

    public function testSetContent()
    {
        $this->menu->setContent('<someContent>');
        $this->assertSame($this->menu->getView(), '<menu >&lt;someContent&gt;</menu>');
    }

    public function testConstructor()
    {
        $this->menu = new MenuTag('id', ['class']);
        $this->assertSame($this->menu->getView(), '<menu class="class" id="id"></menu>');
        return $this->menu;
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
