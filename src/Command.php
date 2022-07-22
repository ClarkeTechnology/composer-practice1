<?php

namespace Clarketechnology\ComposerPractice1;

class Command
{

    public function greet(string $greet = 'Hello World'): string
    {
        return $greet;
    }
}