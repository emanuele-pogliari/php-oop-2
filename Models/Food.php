<?php

require_once __DIR__ . '/Traits/Sizeable.php';
class Foods extends Product
{

    use Sizeable;

    public $quantity;
    public $ingredients;

    function __construct($title, $description, $image, $price, $category, $quantity, $ingredients, $quantitySmall, $quantityBig)
    {

        parent::__construct($title, $description, $image, $price, $category);

        $this->quantity = $quantity;
        $this->quantitySmall = $quantitySmall;
        $this->quantityBig = $quantityBig;
        $this->ingredients = $ingredients;
    }
}
