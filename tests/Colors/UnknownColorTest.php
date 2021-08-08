<?php

namespace Colors;

use PHPUnit\Framework\TestCase;

class UnknownColorTest extends TestCase
{
    /**
     * @dataProvider messageProvider
     */
    public function testMessage(string $message, string $expected)
    {
        $this->assertEquals($expected, output($message));
    }

    public function messageProvider(): array
    {
        return [
            ['<unknown>Message</unknown>', '<unknown>Message</unknown>'],
            ['<unknown></unknown>', '<unknown></unknown>'],
            ['<unknown>Message', '<unknown>Message'],
            ['Message</unknown>', 'Message</unknown>'],
            ['Message', 'Message'],
            ['<unknown><unknown>Message</unknown>', '<unknown><unknown>Message</unknown>'],
            ['Message</unknown></unknown>', 'Message</unknown></unknown>'],
            ['Message<unknown>', 'Message<unknown>'],
        ];
    }
}
