#!/usr/local/bin/php
<?php

use QuillStack\Output\Output;

require __DIR__ . '/../vendor/autoload.php';

$output = new Output();
$output->writeln('Dark grey: <dark-grey>Dark grey</dark-grey>');
$output->writeln('Black: <black>Black</black>');
$output->writeln('Red: <red>Red</red>');
$output->writeln('Light red: <light-red>Light red</light-red>');
$output->writeln('Green: <green>Green</green>');
