<?php
class Account
{
    public $name;
    public $address;
    protected $balance;
    private $password;
}
// $info = new Account();
// echo $info->name = 'rony rayhan';

class Check extends Account
{
    public function balance($amount)
    {
        return "your account balance is $amount tk";
    }
}
$info = new Check();
echo $info->balance(6000);
