<?php

namespace App\Domain\Model;

class Shift extends Person
{
    public const SHIFT = 'Shift';

    public function name(): string
    {
        return self::SHIFT;
    }
}