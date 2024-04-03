<?php
class Beds extends Product
{

    public $size;

    function __construct($title, $description, $image, $price, $category, $size)
    {

        parent::__construct($title, $description, $image, $price, $category);

        $this->size = $size;
    }
}
