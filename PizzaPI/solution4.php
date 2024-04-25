<?php
class PizzaPi
{
    public function calculateDoughRequirement($pizzas, $persons)
    {
        return $pizzas * (($persons * 20) + 200);
    }
    public function calculateSauceRequirement($pizzas, $volume)
    {
      return $pizzas * 125 /$volume;
    }
    public function calculateCheeseCubeCoverage($dimension, $thickness, $diameter)
    {
        return floor(($dimension**3) / (pi() * $thickness * $diameter));
    }
    public function calculateLeftOverSlices($pizzas, $friends)
    {
        return ($pizzas * 8) % $friends;
        
    }
}