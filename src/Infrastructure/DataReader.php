<?php

namespace App\Infrastructure;

use App\Domain\Model\Expression;
use App\Domain\Model\SumExpression;

class DataReader
{
    public function read(): Expression
    {
        $input = readline();
        [$a, $b] = explode(' ', $input);

        return new SumExpression($a, $b);
    }
}