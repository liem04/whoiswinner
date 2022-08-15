<?php

namespace App\Domain\Model;

use App\Domain\Service\RemoverService;

interface Removable
{
    public function remove(RemoverService $remover): Expression;
}