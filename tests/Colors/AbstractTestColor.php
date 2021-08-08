<?php

namespace QuillStack\Tests\Output\Colors;

use PHPUnit\Framework\TestCase;

class AbstractTestColor extends TestCase
{
    /**
     * @dataProvider messageProvider
     */
    public function testMessage(string $message, string $expected)
    {
        $this->assertEquals($expected, write($message));
        $this->assertEquals($expected . PHP_EOL, writeln($message));
    }
}
