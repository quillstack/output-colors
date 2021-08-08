<?php

use QuillStack\Output\Output;

if (!function_exists('write')) {
    function write(string $str): string
    {
        return Output::getInstance()->write($str);
    }
}

if (!function_exists('writeln')) {
    function writeln(string $str): string
    {
        return Output::getInstance()->writeln($str);
    }
}
