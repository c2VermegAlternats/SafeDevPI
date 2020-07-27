<?php

namespace DonationBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class NeedsControllerTest extends WebTestCase
{
    public function testAddneeds()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/addNeeds');
    }

    public function testDeleteneeds()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/deleteNeeds');
    }

    public function testUpdateneeds()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/updateNeeds');
    }

    public function testGetneeds()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/getNeeds');
    }

    public function testGetallneeds()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/getAllNeeds');
    }

}
