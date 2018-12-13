<?php

namespace App\Test\integration;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SumControllerTest extends WebTestCase
{

    public function testSumEndpointGets200()
    {
        $client = static::createClient();
        $client->request('GET', '/marta/1/2');
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    public function testSumEndpointGetCorrectSumResult()
    {
        $client = static::createClient();
        $client->request('GET', '/marta/1/2');
        $this->assertEquals((int)$client->getResponse()->getContent(), 3);
    }

    public function testSumEndpointCheckTypeHints()
    {
        $client = static::createClient();
        $client->request('GET', '/marta/a/b');
        $this->assertEquals(400, $client->getResponse()->getStatusCode());

        $client->request('GET', '/marta/1/b');
        $this->assertEquals(400, $client->getResponse()->getStatusCode());

        $client->request('GET', '/marta/a/2');
        $this->assertEquals(400, $client->getResponse()->getStatusCode());
    }
    public function testSumEndpointReturnErrorMessageBecauseTypeHints()
    {
        $client = static::createClient();
        $client->request('GET', '/marta/a/b');
        $this->assertEquals('error non numeric parameter', $client->getResponse()->getContent());
    }
}