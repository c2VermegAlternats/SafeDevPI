<?php

namespace AssociationBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ReclamationControllerTest extends WebTestCase
{
    public function testAddreclamation()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/addReclamation');
    }

    public function testUpdatereclamation()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/updateReclamation');
    }

    public function testGetallreclamations()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/getAllReclamations');
    }

    public function testDeletereclamation()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/deleteReclamation');
    }

}
