<?php
require_once (__DIR__ . '/vendor/autoload.php');

use Kolot\Pizzaproject\NewYorkPizzaStore;

$pizzaStore = new NewYorkPizzaStore();
$pepperoniPizza = $pizzaStore->orderPizza("pepperoni");
echo "\n";
$veggiePizza = $pizzaStore->orderPizza("vegan");
echo "\n";
$margheritaPizza = $pizzaStore->orderPizza("margherita");
