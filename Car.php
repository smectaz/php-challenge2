<?php

class Car
{
    private int $nbWheels;

    private int $currentSpeed;

    private string $color;

    private int $nbSeats;

    private string $fuelType;

    private int $fuelJauge;

    public function getnbWheels(): int
    {
        return $this->nbWheels;
    }
    
    public function setnbWheels(int $nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }  

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }
    
    public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
    }

    public function getColor(): string
    {
        return $this->color;
    }
    
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getnbSeats(): int
{
    return $this->nbSeats;
}

public function setnbSeats(int $nbSeats): void
{
    $this->nbSeats = $nbSeats;
}

public function getfuelType(): string
{
    return $this->fuelType;
}

public function setfuelType(string $fuelType): void
{
    $this->fuelType = $fuelType;
}

public function getfuelJauge(): int
{
    return $this->fuelJauge;
}

public function setfuelJauge(int $fuelJauge): void
{
    $this->fuelJauge = $fuelJauge;
}

public function __construct(string $color, int $nbSeats, string $fuelType)
{
    $this->color = $color;
    $this->nbSeats = $nbSeats;
    $this->fuelType = $fuelType;
}

public function forwardCar(): string
{
    $this->currentSpeed = 110;

    return "Go !";
}
public function brakeCar(): string
{
    $sentence = "";
    while ($this->currentSpeed > 0) {
        $this->currentSpeed--;
        $sentence .= "Brake !!!";
    }

    $sentence .= "BOUM !!!! Trop court !";
    return $sentence;
}
public function startCar(): string
{
    $resultat = "C'est l'hiver ! Recommence ! Sinon Tu marche";
    return $resultat;
}
}