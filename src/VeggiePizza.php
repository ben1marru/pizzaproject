<?php

namespace kolot\pizzaproject;

use kolot\pizzalib\Pizza;

class VeggiePizza extends Pizza
{
    public function __construct()
    {
        parent::__construct("Вегетарианская", "Песто", ["Оливки", "Грибы", "Помидоры"]);
    }
}
