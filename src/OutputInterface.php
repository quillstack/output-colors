<?php

namespace QuillStack\Output;

interface OutputInterface
{
    public function write(string $str): void;
    public function writeln(string $str): void;
}
