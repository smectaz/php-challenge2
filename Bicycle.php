<?php

class Bicycle
{
    private string $color;

    private int $CurrentSpeed;

    private int $nbSeats = 1;

    private int $nbWheels = 2;





public function getColor(): string
{
    return $this->color;
}

public function setColor(string $color): void
{
    $this->color = $color;
}

public function getCurrentSpeed(): int
{
    return $this->CurrentSpeed;
}

public function setCurrentSpeed(int $CurrentSpeed): void
{
    if($CurrentSpeed >= 0) {
        $this->CurrentSpeed = $CurrentSpeed;
    }
}

public function getnbSeats(): int
{
    return $this->nbSeats;
}

public function setnbSeats(int $nbSeats): void
{
    $this->nbSeats = $nbSeats;
}

public function getnbWheels(): int
{
    return $this->nbWheels;
}

public function setnbWheels(int $nbWheels): void
{
    $this->nbWheels = $nbWheels;
}

public function forward(): string
{
    $this->CurrentSpeed = 5;

    return "Go !";
}

public function brake(): string
{
   $sentence = "";
   while ($this->CurrentSpeed > 0) {
       $this->CurrentSpeed--;
       $sentence .= "Brake !!!";
   }
   
   $sentence .= "I'm stopped !";
   
   return $sentence;
}
}
