<?php

namespace Kolot\Pizzaproject;

use kolot\pizzalib\Pizza;

class MargheritaPizza extends Pizza
{
    public function __construct()
    {
        parent::__construct("Пицца Маргарита", "Томатный соус", ["Моцарелла", "Базилик"]);
    }
}
