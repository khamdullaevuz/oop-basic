<?php

namespace Khamdullaevuz\App\Controllers;

use Khamdullaevuz\App\Models\Product;
use Khamdullaevuz\App\Traits\ProductTrait;

class ProductController extends Product
{
    use ProductTrait;

    public function getAmount(int $count): int
    {
        return $this->calculateAmount($this->price, $count);
    }
}