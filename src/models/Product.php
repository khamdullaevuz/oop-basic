<?php

namespace Khamdullaevuz\App\Models;

class Product
{
    protected string $name;
    protected int $price;

    function __construct(string $_name, int $_price){
        $this->name = $_name;
        $this->price = $_price;
    }
}