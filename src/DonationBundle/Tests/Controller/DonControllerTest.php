<?php

namespace DonationBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DonControllerTest extends WebTestCase
{
    public function testAdddon()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/addDon');
    }

    public function testUpdatedon()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/updateDon');
    }

    public function testDeletedon()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/deleteDon');
    }

    public function testGetdon()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/getDon');
    }

    public function testGetalldon()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/getAllDon');
    }

}
