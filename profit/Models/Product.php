<?php

namespace Models;

class Product extends \profit\Models\Model
{

    protected const TABLE = 'products';

    public string $title;
    public int $price;

}
