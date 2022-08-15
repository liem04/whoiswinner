<?php

namespace App\Infrastructure;

use App\Domain\Service\RemoverService;

class ZeroRemover implements RemoverService
{
    public function remove(int $number): int
    {
        return (int)str_replace("0", '', (string)$number);
    }
}