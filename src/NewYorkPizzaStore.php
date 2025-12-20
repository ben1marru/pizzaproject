<?php

namespace kolot\pizzaproject;

use Kolot\Pizzaproject\MargheritaPizza;
use Kolot\Pizzaproject\PepperoniPizza;
use Kolot\Pizzalib\PizzaStore;
use Kolot\Pizzaproject\VeggiePizza;

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
