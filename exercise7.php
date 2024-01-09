<?php

declare(strict_types=1);

/* EXERCISE 7

Copy your solution from exercise 6

TODO: Make a static property in the Beverage class that can only be accessed from inside the class called address which has the value "Melkmarkt 9, 2000 Antwerpen".
TODO: Print the address without creating a new instant of the beverage class 2 times in two different ways.

Use typehinting everywhere!
*/

define("BARNAME" , "Het Vervolg");

class Beverage
{
  private $color;
  private $price;
  private $temperature;

  //static property
  private static $address = "Melkmarkt 9, 2000 Antwerpen";

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

  public static function returnAddress()
  {
    return self::$address;
  }

}


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


echo "<br>";
echo Beverage::returnAddress();

echo "<br>";
print_r(Beverage::returnAddress());
