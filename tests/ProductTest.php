<?php

use PHPUnit\Framework\TestCase;
use Khamdullaevuz\App\Controllers\ProductController;

class ProductTest extends TestCase
{
    public function testCalculateAmountCorrectWork(): void
    {
        $product = new ProductController("Apple", 1000);
        $amount = $product->getAmount(100);
        $this->assertEquals($amount, 100000);
    }
}
