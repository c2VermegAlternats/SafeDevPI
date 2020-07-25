<?php

namespace AssociationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 *
 * @ORM\Table(name="categorie")
 * @ORM\Entity(repositoryClass="AssociationBundle\Repository\CategorieRepository")
 */
class Categorie
{/**
 * @var int
 *
 * @ORM\Column(name="idC", type="integer")
 * @ORM\Id
 * @ORM\GeneratedValue(strategy="AUTO")
 */
    private $idC;

    /**
     * @var string
     *
     * @ORM\Column(name="name_categorie", type="text", length=255, nullable=true)
     */
    private $name_categorie;


    /**
     * Get id
     *
     * @return int
     */
    public function getIdC()
    {
        return $this->idC;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Categorie
     */
    public function setName($name_categorie)
    {
        $this->name_categorie = $name_categorie;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name_categorie;
    }
}

