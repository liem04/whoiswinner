<?php

namespace App\Domain\Model;

use App\Domain\Service\RemoverService;

class SumExpression extends Expression
{
    public function __construct(
        public readonly int $a,
        public readonly int $b,
    ) {
    }

    public function calculate(): int
    {
        return $this->a + $this->b;
    }

    public function remove(RemoverService $remover): Expression
    {
        return new SumExpression($remover->remove($this->a), $remover->remove($this->b));
    }
}