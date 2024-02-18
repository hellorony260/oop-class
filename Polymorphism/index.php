<?php
abstract class Animal
{
    public abstract function makeSound();
}

class Dog extends Animal
{
    public function makeSound()
    {
        return 'Gheu Gheu';
    }
}

$dog = new Dog();
echo $dog->makeSound();

class Cat extends Animal
{
    public function makeSound()
    {
        return 'Meow Meow';
    }
}
$cat = new Cat();
echo $cat->makeSound();
