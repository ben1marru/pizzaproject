<?php

namespace Kolot\Pizzaproject;

use Kolot\Pizzaproject\MargheritaPizza;
use Kolot\Pizzaproject\PepperoniPizza;
use kolot\pizzalib\PizzaStore;
use Kolot\Pizzaproject\VeggiePizza;

class NewYorkPizzaStore extends PizzaStore
{
    public function createPizza(string $type):string
    {
        switch ($type) {
            case 'margherita':
                return new MargheritaPizza();
            case 'pepperoni':
                return new PepperoniPizza();
            case 'vegan':
                return new VeggiePizza();
        }
    }
}
