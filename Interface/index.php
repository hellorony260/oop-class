<?php
interface Vehicle
{
    public function baseFare();
    public function perkilo();
    public function getTotal($kilo);
}

class Bike implements Vehicle
{
    public function baseFare()
    {
        return 50;
    }
    public function perkilo()
    {
        return 10;
    }
    public function getTotal($kilo)
    {
        return $this->baseFare() + ($this->perkilo() * $kilo);
    }
}
$bike = new Bike();
echo $bike->getTotal(7);
