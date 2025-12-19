<?php

namespace Kolot\Pizzaproject;

use kolot\pizzalib\Pizza;

class PepperoniPizza extends Pizza
{
    public function __construct()
    {
        parent::__construct("Пепперони", "Томатный соус", ["Пепперони", "Моцарелла"]);
    }
}