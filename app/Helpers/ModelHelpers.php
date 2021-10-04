<?php

namespace App\Helpers;

trait ModelHelpers
{
    public function matches(self $model): bool
    {
        return $this->id() === $model->id();
    }
}
