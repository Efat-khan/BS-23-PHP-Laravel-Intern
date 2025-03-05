<?php
namespace App\Product;
class Product
{
    public $name;
    public $price;
    public $quantity;
    public function __construct($name, $price, $quantity)
    {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }
    function get_name()
    {
        return $this->name;
    }
    function get_price()
    {
        return $this->price;
    }
    function get_quantity()
    {
        return $this->quantity;
    }
}
class ProductCategory
{
    public $name;
    public $products;
    public function __construct($name, $products)
    {
        $this->name = $name;
        $this->products = $products;
    }
    function get_name()
    {
        return $this->name;
    }
    function get_products()
    {
        return $this->products;
    }
}
?>