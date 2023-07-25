<?php
namespace App\Tests\unit;
use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserTest extends  TestCase{


    public function  testEmail():void
    {

        $user = new User();
        $email= "test@gmail.com";
        $user->setEmail($email);
        self::assertEquals($email,$user->getEmail());
    }



}

