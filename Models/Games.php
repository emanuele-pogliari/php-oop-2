<?php
class Games extends Product
{

    public $material;

    function __construct($title, $description, $image, $price, $category, $material)
    {

        parent::__construct($title, $description, $image, $price, $category);

        $this->material = $material;
    }
}
