<?php

namespace Colors\Foreground;

use PHPUnit\Framework\TestCase;

class BlackForegroundTest extends TestCase
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
            ['<black>Message</black>', "\e[0;30mMessage\e[0m"],
            ['<black></black>', "\e[0;30m\e[0m"],
            ['<black>Message', "\e[0;30mMessage\e[0m"],
            ['Message</black>', "Message\e[0m"],
            ['Message', 'Message'],
            ['<black><black>Message</black>', "\e[0;30m\e[0;30mMessage\e[0m"],
            ['Message</black></black>', "Message\e[0m\e[0m"],
            ['Message<black>', "Message\e[0;30m\e[0m"],
        ];
    }
}
