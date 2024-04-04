<?php

class Product
{
    public $title;
    public $description;
    public $image;
    public $price;
    public $category;

    function __construct($title, $description, $image, $price, Category $category)
    {
        $this->title = $title;
        $this->description = $description;
        $this->image = $image;
        $this->category = $category;

        if (is_numeric($price)) {
            $this->price = $price;
        } else {
            throw new Exception("Prezzo non valido");
        }
    }
}
