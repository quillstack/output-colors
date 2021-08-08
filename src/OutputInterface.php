<?php

namespace QuillStack\Output;

interface OutputInterface
{
    public function write(string $str): string;
    public function writeln(string $str): string;
}
