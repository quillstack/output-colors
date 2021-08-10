<?php

namespace Colors\Foreground;

use QuillStack\Tests\Output\Colors\AbstractTestColor;

class RedForegroundTest extends AbstractTestColor
{
    public function messageProvider(): array
    {
        return [
            ['<red>Message</red>', "\e[0;31mMessage\e[0m"],
            ['<red></red>', "\e[0;31m\e[0m"],
            ['<red>Message', "\e[0;31mMessage\e[0m"],
            ['Message</red>', "Message\e[0m"],
            ['Message', 'Message'],
            ['<red><red>Message</red>', "\e[0;31m\e[0;31mMessage\e[0m"],
            ['Message</red></red>', "Message\e[0m\e[0m"],
            ['Message<red>', "Message\e[0;31m\e[0m"],
        ];
    }
}
