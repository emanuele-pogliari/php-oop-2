<?php

require_once __DIR__ . '/Traits/Sizeable.php';
class Foods extends Product
{

    use Sizeable;

    public $quantity;
    public $ingredients;

    function __construct($title, $description, $image, $price, $category, $ingredients, $sizeSmall, $sizeMedium, $sizeBig)
    {

        parent::__construct($title, $description, $image, $price, $category);

        $this->sizeSmall = $sizeSmall;
        $this->sizeMedium = $sizeMedium;
        $this->sizeBig = $sizeBig;
        $this->ingredients = $ingredients;
    }
}
