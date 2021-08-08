<?php

namespace Colors\Foreground;

use QuillStack\Tests\Output\Colors\AbstractTestColor;

class DarkGreyForegroundTest extends AbstractTestColor
{
    public function messageProvider(): array
    {
        return [
            ['<dark-grey>Message</dark-grey>', "\e[1;30mMessage\e[0m"],
            ['<dark-grey></dark-grey>', "\e[1;30m\e[0m"],
            ['<dark-grey>Message', "\e[1;30mMessage\e[0m"],
            ['Message</dark-grey>', "Message\e[0m"],
            ['Message', 'Message'],
            ['<dark-grey><dark-grey>Message</dark-grey>', "\e[1;30m\e[1;30mMessage\e[0m"],
            ['Message</dark-grey></dark-grey>', "Message\e[0m\e[0m"],
            ['Message<dark-grey>', "Message\e[1;30m\e[0m"],
        ];
    }
}
