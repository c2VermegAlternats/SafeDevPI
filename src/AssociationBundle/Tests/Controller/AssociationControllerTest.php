<?php

namespace AssociationBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AssociationControllerTest extends WebTestCase
{
    public function testAddassociation()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/addAssociation');
    }

    public function testUpdateassociation()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/updateAssociation');
    }

    public function testGetallassociation()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/getAllAssociation');
    }

    public function testGetassociation()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/getAssociation');
    }

    public function testDeleteassociation()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/deleteAssociation');
    }

}
