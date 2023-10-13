<?php

namespace Models;

class Product extends \Models\Model
{

    protected const TABLE = 'products';

    public string $title;
    public int $price;

}
