<?php
namespace Vfs\Node;

use Vfs\Test\UnitTestCase;

class FileTest extends UnitTestCase
{
    public function testInstance()
    {
        $file = new File();

        $this->assertInstanceOf('Vfs\Node\FileInterface', $file);
        $this->assertInstanceOf('Vfs\Node\NodeInterface', $file);
        $this->assertInstanceOf('Vfs\Node\StatInterface', $file);
    }

    public function testGetContent()
    {
        $file = new File('foo');

        $this->assertEquals('foo', $file->getContent());
    }

    public function testSetContent()
    {
        $file = new File('');
        $file->setContent('foo');

        $this->assertEquals('foo', $file->getContent());
    }

    public function testToString()
    {
        $file = new File('foo');

        $this->assertEquals('foo', (string) $file);
    }

    public function testGetDateAccessed()
    {
        $file = new File();

        $this->assertInstanceOf('DateTime', $file->getDateAccessed());
    }

    public function testGetDateCreated()
    {
        $file = new File();

        $this->assertInstanceOf('DateTime', $file->getDateCreated());
    }

    public function testGetDateModified()
    {
        $file = new File();

        $this->assertInstanceOf('DateTime', $file->getDateModified());
    }

    public function testGetMode()
    {
        $file = new File();

        $this->assertEquals(0170000 & 0100000, $file->getMode());
    }

    public function testGetSize()
    {
        $file = new File('foo');

        $this->assertEquals(3, $file->getSize());
    }
}
