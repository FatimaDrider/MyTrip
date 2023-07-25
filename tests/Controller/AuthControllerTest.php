<?php

namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\HttpFoundation\Response;

class AuthControllerTest extends WebTestCase
{
    public function testRegister(): void
    {

        $response = static::createClient()->request('POST', '/api/auth/register', ['headers' => ['Accept' => 'application/json'], 'json' => [
            'email' => 'test2@gmail.com',
            'password' => 'test',

        ]]);
        $this->assertResponseIsSuccessful();
        $this->assertResponseStatusCodeSame(Response::HTTP_OK);
    }
}
