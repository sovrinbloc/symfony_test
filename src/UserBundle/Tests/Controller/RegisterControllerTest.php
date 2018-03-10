<?php

namespace UserBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class RegisterControllerTest extends WebTestCase
{
    public function testRegister()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/register');
    }

    public function testLogin()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Login');
    }

    public function testLogout()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Logout');
    }

    public function testDelete()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Delete');
    }

    public function testRecover()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Recover');
    }

    public function testProfile()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Profile');
    }

    public function testSettings()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/Settings');
    }

}
