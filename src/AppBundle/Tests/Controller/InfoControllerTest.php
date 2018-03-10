<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class InfoControllerTest extends WebTestCase
{
    public function testInfo()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/info');
    }

}
