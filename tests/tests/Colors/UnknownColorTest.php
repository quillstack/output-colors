<?php

namespace Colors;

use QuillStack\Tests\Output\Colors\AbstractTestColor;

class UnknownColorTest extends AbstractTestColor
{
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
