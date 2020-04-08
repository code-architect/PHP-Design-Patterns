<?php

// base component
interface Pizza{
    public function getDesc(): string ;
}

// concrete component
class Margarita implements Pizza
{
    public function getDesc(): string
    {
        return "Margarita";
    }
}

class VeggieParadise implements Pizza
{
    public function getDesc(): string
    {
        return "Veggie Paradise";
    }
}

// Base Decorator
class PizzaToppings implements Pizza
{
    protected $pizza;

    public function __construct(Pizza $pizza)
    {
        $this->pizza = $pizza;
    }

    public function getDesc(): string
    {
        return $this->pizza->getDesc();
    }
}

// Concrete Decorator
class ExtraCheese extends PizzaToppings
{
    public function getDesc(): string
    {
        return parent::getDesc().", with Extra Cheese";
    }
}

class Jalapeno extends PizzaToppings
{
    public function getDesc(): string
    {
        return parent::getDesc().", with Extra Jalapeno";
    }
}

// client code
function makePizza(Pizza $pizza)
{
    echo "Your order: ".$pizza->getDesc();
}

$pizza = new Margarita();
$pizza = new Jalapeno($pizza);
$pizza = new ExtraCheese($pizza);

makePizza($pizza);
echo "<br>\n";

$pizza2 = new VeggieParadise();
$pizza2 = new ExtraCheese($pizza2);
$pizza2 = new Jalapeno($pizza2);

makePizza($pizza2);


