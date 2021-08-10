<?php

namespace QuillStack\Output;

use QuillStack\Output\Colors\Foreground\BlackForeground;
use QuillStack\Output\Colors\Foreground\DarkGreyForeground;
use QuillStack\Output\Colors\Foreground\GreenForeground;
use QuillStack\Output\Colors\Foreground\LightRedForeground;
use QuillStack\Output\Colors\Foreground\RedForeground;

class Output implements OutputInterface
{
    const COLORS = [
        BlackForeground::class,
        DarkGreyForeground::class,
        RedForeground::class,
        LightRedForeground::class,
        GreenForeground::class,
    ];

    private static Output $instance;

    private function output(string $str): string
    {
        foreach (self::COLORS as $colorClass) {
            $str = (new $colorClass)->decorate($str);
        }

        return $str;
    }

    public function write(string $str): void
    {
        echo $this->output($str);
    }

    public function writeln(string $str): void
    {
        echo $this->output($str) . PHP_EOL;
    }

    public static function getInstance(): OutputInterface
    {
        if (!isset(static::$instance)) {
            static::$instance = new Output();
        }

        return static::$instance;
    }
}
