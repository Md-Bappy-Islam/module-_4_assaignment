<?php

class product
{
    private int $id;
    private string $name;
    private float $price;
    public function __construct($id, $name, $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }
    public function getFormattedPrice()
    {
        return number_format($this->price, 2);
    }
    public function showDetails()
    {
        print("Product Details \n");
        print("- ID:" . " " . $this->id . "\n");
        print("- Name:" . " " . $this->name . "\n");
        print("- Price:" . " " . "$" . $this->getFormattedPrice() . "\n");
    }
}
$product = new product(1, "T_shirt", 19.98888888);
$product->showDetails();
