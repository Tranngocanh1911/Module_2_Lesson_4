<?php


class Fan
{
    const slow = 1;
    const medium = 2;
    const fast = 3;
    private $speed;
    private $on;
    private $radius;
    private $color;

    public function __construct($radius = 5, $color = 'blue', $speed = self::slow, $on = false)
    {
        $this->speed = $speed;
        $this->on = $on;
        $this->radius = $radius;
        $this->color = $color;
    }


    public function getSpeed(): int
    {
        return $this->speed;
    }
    public function setSpeed(int $speed): void
    {
        $this->speed = $speed;
    }

    public function isOn(): bool
    {
        return $this->on;
    }

    public function setOn(bool $on): void
    {
        $this->on = $on;
    }

    public function getRadius(): int
    {
        return $this->radius;
    }

    public function setRadius(int $radius): void
    {
        $this->radius = $radius;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

public function toString(){
        if (self::isOn() === true) {
            echo 'Fan is on: <br>'.$this->getSpeed().' Speed <br>'. $this->getColor().' Color <br>'.$this->getRadius().' Radius <br>';
        } else {
            echo 'Fan is off: <br>'.$this->getSpeed().' Speed <br>'. $this->getColor().' Color <br>'.$this->getRadius().' Radius';
        }
}
}
