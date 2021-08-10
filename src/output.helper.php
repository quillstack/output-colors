<?php

use Quillstack\Output\Output;

if (!function_exists('write')) {
    function write(string $str): void
    {
        Output::getInstance()->write($str);
    }
}

if (!function_exists('writeln')) {
    function writeln(string $str): void
    {
        Output::getInstance()->writeln($str);
    }
}
