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
        $this->$image = $image;
        $this->price = $price;
        $this->category = $category;
    }
}
