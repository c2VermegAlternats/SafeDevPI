<?php

namespace DonationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Don
 *
 * @ORM\Table(name="don")
 * @ORM\Entity(repositoryClass="DonationBundle\Repository\DonRepository")
 */
class Don
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="category", type="string", length=255)
     */
    private $category;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="integer")
     */
    private $value;

    /**
     *     * @var int

     * @ORM\Column(name="idDonnator", type="integer")
     */
    private $idDonnator;

    /**

     * @var
     * @ORM\ManyToOne(targetEntity="DonationBundle\Entity\Needs")
     * @ORM\JoinColumn(name="id_Needs",referencedColumnName="id")
     */

    private $needs;

    /**
     * @return mixed
     */
    public function getNeeds()
    {
        return $this->needs;
    }

    /**
     * @param mixed $needs
     */
    public function setNeeds($needs)
    {
        $this->needs=$needs;
            }


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set category
     *
     * @param string $category
     *
     * @return Don
     */
    public function setCategory($category)
    {
        $this->category = $category;
    
        return $this;
    }

    /**
     * Get category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set value
     *
     * @param integer $value
     *
     * @return Don
     */
    public function setValue($value)
    {
        $this->value = $value;
    
        return $this;
    }

    /**
     * Get value
     *
     * @return integer
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set idDonnator
     *
     * @param integer $idDonnator
     *
     * @return Don
     */
    public function setIdDonnator($idDonnator)
    {
        $this->idDonnator = $idDonnator;
    
        return $this;
    }

    /**
     * Get idDonnator
     *
     * @return integer
     */
    public function getIdDonnator()
    {
        return $this->idDonnator;
    }

    /**
     * Set idNeeds
     *
     * @param integer $idNeeds
     *
     * @return Don
     */
    public function setIdNeeds($idNeeds)
    {
        $this->idNeeds = $idNeeds;
    
        return $this;
    }

    /**
     * Get idNeeds
     *
     * @return integer
     */
    public function getIdNeeds()
    {
        return $this->idNeeds;
    }
}

