<?php

namespace Khamdullaevuz\App\Traits;

trait ProductTrait
{
    public function calculateAmount(int $price, int $count): int
    {
        return $price * $count;
    }
}