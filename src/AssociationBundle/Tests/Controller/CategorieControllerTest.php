<?php

namespace AssociationBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CategorieControllerTest extends WebTestCase
{
    public function testAddcategorie()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/addCategorie');
    }

    public function testUpdatecategorie()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/updateCategorie');
    }

    public function testGetallcategorie()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/getAllCategorie');
    }

    public function testDeletecategorie()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/deleteCategorie');
    }

}
