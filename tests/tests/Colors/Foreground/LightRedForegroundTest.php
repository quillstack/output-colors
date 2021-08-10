<?php

namespace Colors\Foreground;

use QuillStack\Tests\Output\Colors\AbstractTestColor;

class LightRedForegroundTest extends AbstractTestColor
{
    public function messageProvider(): array
    {
        return [
            ['<light-red>Message</light-red>', "\e[1;31mMessage\e[0m"],
            ['<light-red></light-red>', "\e[1;31m\e[0m"],
            ['<light-red>Message', "\e[1;31mMessage\e[0m"],
            ['Message</light-red>', "Message\e[0m"],
            ['Message', 'Message'],
            ['<light-red><light-red>Message</light-red>', "\e[1;31m\e[1;31mMessage\e[0m"],
            ['Message</light-red></light-red>', "Message\e[0m\e[0m"],
            ['Message<light-red>', "Message\e[1;31m\e[0m"],
        ];
    }
}
