<?php

use QuillStack\Output\Output;

if (!function_exists('output')) {
    function output(string $str): string
    {
        return Output::getInstance()->colorize($str);
    }
}
