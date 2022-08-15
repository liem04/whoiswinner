<?php

namespace App\Domain\Service;

interface RemoverService
{
    public function remove(int $number): int;
}