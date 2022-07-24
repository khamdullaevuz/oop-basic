<?php

require __DIR__.'/vendor/autoload.php';

use Khamdullaevuz\App\Controllers\ProductController;

$apple = new ProductController("Apple", 1000);
echo $apple->getAmount(100);