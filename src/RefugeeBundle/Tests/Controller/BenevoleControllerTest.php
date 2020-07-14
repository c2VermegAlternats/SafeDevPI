<?php

namespace RefugeeBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class BenevoleControllerTest extends WebTestCase
{
    public function testAdd()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/add');
    }

    public function testGetall()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/getAll');
    }

    public function testGetbenevole()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/getBenevole');
    }

    public function testUpdatebenevole()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/updateBenevole');
    }

    public function testDelete()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/delete');
    }

}
