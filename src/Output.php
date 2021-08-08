<?php

namespace QuillStack\Output;

use QuillStack\Output\Colors\Foreground\BlackForeground;
use QuillStack\Output\Colors\Foreground\DarkGreyForeground;

class Output
{
    const COLORS = [
        BlackForeground::class,
        DarkGreyForeground::class,
    ];

    private static Output $instance;

    public function colorize(string $str): string
    {
        foreach (self::COLORS as $colorClass) {
            $str = (new $colorClass)->decorate($str);
        }

        return $str;
    }

    public static function getInstance(): Output
    {
        if (!isset(Output::$instance)) {
            Output::$instance = new Output();
        }

        return Output::$instance;
    }
}
