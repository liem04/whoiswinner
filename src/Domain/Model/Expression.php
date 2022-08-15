<?php

namespace App\Domain\Model;

abstract class Expression implements Removable
{
    abstract public function calculate(): mixed;
}