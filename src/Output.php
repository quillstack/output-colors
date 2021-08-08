<?php

namespace QuillStack\Output;

use QuillStack\Output\Colors\Foreground\BlackForeground;
use QuillStack\Output\Colors\Foreground\DarkGreyForeground;

class Output implements OutputInterface
{
    const COLORS = [
        BlackForeground::class,
        DarkGreyForeground::class,
    ];

    private static Output $instance;

    public function write(string $str): string
    {
        foreach (self::COLORS as $colorClass) {
            $str = (new $colorClass)->decorate($str);
        }

        return $str;
    }

    public function writeln(string $str): string
    {
        return $this->write($str) . PHP_EOL;
    }

    public static function getInstance(): OutputInterface
    {
        if (!isset(Output::$instance)) {
            Output::$instance = new Output();
        }

        return Output::$instance;
    }
}
