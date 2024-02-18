<?php
abstract class Vehicles
{
    public abstract function baseFare();
    public abstract function perkilo();
    public function getTotal($kilo)
    {
        return $this->baseFare() + ($this->perkilo() * $kilo);
    }
}
class Bike extends Vehicles
{
    public function baseFare()
    {
        return 50;
    }
    public function perkilo()
    {
        return 10;
    }
}

$bike = new Bike();
$bike->getTotal(1);
