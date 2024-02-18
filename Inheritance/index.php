<?php
class Account
{
    public function deposite($amount)
    {
        return "depositing $amount tk in you account";
    }
}
// $info = new Account();
// echo $info->deposite(500);
class Check extends Account
{
    public function withdraw($amount)
    {
        return "withdrawing $amount tk from your account";
    }
}
$check = new Check();
echo $check->deposite(300) . PHP_EOL;
echo $check->withdraw(100);
