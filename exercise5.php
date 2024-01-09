<?php

declare(strict_types=1);

/* EXERCISE 5

Copy the class of exercise 1.

TODO: Change the properties to private.
TODO: Fix the errors without using getter and setter functions.
TODO: Change the price to 3.5 euro and print it also on the screen on a new line.
*/


class Beverage
{
  private $color;
  private $price;
  private $temperature;

  public function __construct(string $color, float $price, string $temperature = 'cold')
  {
    $this->color = $color;
    $this->price = $price;
    $this->temperature = $temperature;
  }

  public function getInfo()
  {
    return "This beverage is $this->temperature and $this->color";
  }  

  public function changePrice(float $newPrice)
  {
    $this->price = $newPrice;
  }

  public function seePrice()
  {
    return $this->price;
  }

}

$cola = new Beverage("black",2);

echo $cola->getInfo()."<br>";


//change price
$cola->changePrice(3.5);
echo $cola->seePrice();

