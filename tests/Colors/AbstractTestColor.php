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
        $this->expectOutputString($expected);
        write($message);
    }
}
