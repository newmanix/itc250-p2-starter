<?php
/**
 * pizza-array.php
 *
 * Creates an array of pizzas for food truck
 *
 * @package FoodTruck
 * @author Bill Newman <williamnewman@gmail.com>
 * @version 0.1 2016/07/20
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @todo none
 */

include 'Pizza.php';

$pizzas[] = new Pizza('Pepperoni','Large',19.99);
$pizzas[] = new Pizza('Combination','Medium',17.99);
$pizzas[] = new Pizza('Cheese','small',15.99);
