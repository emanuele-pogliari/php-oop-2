<?php

require_once __DIR__ . '/Traits/Sizeable.php';
class Foods extends Product
{

    use Sizeable;

    public $quantity;
    public $ingredients;

    function __construct($title, $description, $image, $price, $category, $quantity, $ingredients, $sizeSmall, $sizeBig)
    {

        parent::__construct($title, $description, $image, $price, $category);

        $this->quantity = $quantity;
        $this->sizeSmall = $sizeSmall;
        $this->sizeBig = $sizeBig;
        $this->ingredients = $ingredients;
    }
}
