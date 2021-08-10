<?php

namespace QuillStack\Tests\Output\Colors;

use PHPUnit\Framework\TestCase;

class AbstractTestColor extends TestCase
{
    /**
     * @dataProvider messageProvider
     */
    public function testWiteMessage(string $message, string $expected)
    {
        $this->expectOutputString($expected);
        write($message);
    }

    /**
     * @dataProvider messageProvider
     */
    public function testWritelnMessage(string $message, string $expected)
    {
        $this->expectOutputString($expected . PHP_EOL);
        writeln($message);
    }
}
