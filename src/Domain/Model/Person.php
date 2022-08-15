<?php

namespace App\Domain\Model;

abstract class Person
{
    abstract public function name(): string;
}