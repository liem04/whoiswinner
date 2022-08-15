<?php

namespace App\Application;

use App\Domain\Model\Expression;
use App\Domain\Model\Person;
use App\Domain\Model\Shift;
use App\Domain\Model\Tab;
use App\Domain\Service\RemoverService;

class WhoIsWinnerDetector
{
    public function __construct(
        private readonly RemoverService $remover
    ) {
    }

    public function detect(Expression $expression): Person
    {
        if ($this->tabIsCorrect($expression)) {
            return new Tab();
        }

        return new Shift();
    }

    private function tabIsCorrect(Expression $expression): bool
    {
        $removedExpression = $expression->remove($this->remover);

        return $removedExpression->calculate() === $this->remover->remove($expression->calculate());
    }
}