<?php

namespace Kolot\Pizzalib;

use Kolot\Pizzalib\MargheritaPizza;
use Kolot\Pizzalib\PepperoniPizza;
use Kolot\Pizzalib\PizzaStore;
use Kolot\Pizzalib\VeggiePizza;

class NewYorkPizzaStore extends PizzaStore
{
    public function createPizza(string $type):string
    {
        switch ($type) {
            case 'cheese':
                return new MargheritaPizza();
            case 'pepperoni':
                return new PepperoniPizza();
            case 'vegan':
                return new VeggiePizza();
        }
    }
}