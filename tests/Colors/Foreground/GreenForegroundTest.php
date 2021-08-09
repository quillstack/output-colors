<?php

namespace Colors\Foreground;

use QuillStack\Tests\Output\Colors\AbstractTestColor;

class GreenForegroundTest extends AbstractTestColor
{
    public function messageProvider(): array
    {
        return [
            ['<green>Message</green>', "\e[0;32mMessage\e[0m"],
            ['<green></green>', "\e[0;32m\e[0m"],
            ['<green>Message', "\e[0;32mMessage\e[0m"],
            ['Message</green>', "Message\e[0m"],
            ['Message', 'Message'],
            ['<green><green>Message</green>', "\e[0;32m\e[0;32mMessage\e[0m"],
            ['Message</green></green>', "Message\e[0m\e[0m"],
            ['Message<green>', "Message\e[0;32m\e[0m"],
        ];
    }
}
