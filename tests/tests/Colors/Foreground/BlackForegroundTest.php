<?php

namespace Colors\Foreground;

use QuillStack\Tests\Output\Colors\AbstractTestColor;

class BlackForegroundTest extends AbstractTestColor
{
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
