<?php
require_once __DIR__ . '/Traits/Sizeable.php';
class Beds extends Product
{
    use Sizeable;

    public $size;

    function __construct($title, $description, $image, $price, $category,  $sizeSmall, $sizeMedium, $sizeBig)
    {

        parent::__construct($title, $description, $image, $price, $category);

        $this->sizeSmall = $sizeSmall;
        $this->sizeMedium = $sizeMedium;
        $this->sizeBig = $sizeBig;
    }
}
