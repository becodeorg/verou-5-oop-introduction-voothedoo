<?php

declare(strict_types=1);

/* EXERCISE 6

Copy the classes of exercise 2.

TODO: Change the properties to private.
TODO: Make a const barname with the value 'Het Vervolg'.
TODO: Print the constant on the screen.
TODO: Create a function in beverage and use the constant.
TODO: Do the same in the beer class.
TODO: Print the output of these functions on the screen.
TODO: Make sure that every print is on a new line.

Use typehinting everywhere!
*/

define("BARNAME" , "Het Vervolg");
echo BARNAME;

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

  public function returnBeverageBarname()
  {
    return "You can buy it in our bar " .constant('BARNAME');
  }

}

$cola = new Beverage("black",2);
echo "<br>";
echo $cola->returnBeverageBarname();


class Beer extends Beverage
{
  private $name;
  private $alcoholPercentage;

  public function __construct(string $color, float $price,  string $name, float $alcoholPercentage, string $temperature = 'cold')
  {
    parent::__construct($color, $price, $temperature);
    $this->name = $name;
    $this->alcoholPercentage = $alcoholPercentage;
  }

  public function getAlcoholPercentage() 
  {
    return $this->alcoholPercentage;
  }

  public function getColor()
  {
    return $this->color;
  }

  public function changeColor(string $newColor)
  {
    $this->color = $newColor;
  }

  public function beerInfo()
  {
    return "Hi! I'm $this->name, I have an alcohol percentage of $this->alcoholPercentage % and I have a $this->color color.";
  }

  public function returnBeerBarname()
  {
    return "You can buy $this->name in our local pub, " .constant('BARNAME');
  }
}

$duvel = new Beer("blonde", 3.5, "Duvel", 8.5);
echo "<br>";
echo $duvel->returnBeerBarname();
