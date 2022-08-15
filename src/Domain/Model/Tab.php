<?php

namespace App\Domain\Model;

class Tab extends Person
{
    public const TAB = 'Tab';

    public function name(): string
    {
        return self::TAB;
    }
}