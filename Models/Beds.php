<?php
require_once __DIR__ . '/Traits/Sizeable.php';
class Beds extends Product
{
    use Sizeable;

    public $size;

    function __construct($title, $description, $image, $price, $category, $size, $sizeSmall, $sizeBig)
    {

        parent::__construct($title, $description, $image, $price, $category);

        $this->size = $size;
        $this->sizeSmall = $sizeSmall;
        $this->sizeBig = $sizeBig;
    }
}
