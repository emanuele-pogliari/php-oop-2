<?php
class Foods extends Product
{

    public $quantity;
    public $ingredients;

    function __construct($title, $description, $image, $price, $category, $quantity, $ingredients)
    {

        parent::__construct($title, $description, $image, $price, $category);

        $this->quantity = $quantity;
        $this->ingredients = $ingredients;
    }
}
