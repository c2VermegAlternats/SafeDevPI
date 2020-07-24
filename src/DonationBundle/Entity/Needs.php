<?php

namespace DonationBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Needs
 *
 * @ORM\Table(name="needs")
 * @ORM\Entity(repositoryClass="DonationBundle\Repository\NeedsRepository")
 */
class Needs
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="category", type="string", length=255)
     */
    private $category;

    /**
     * @var int
     *
     * @ORM\Column(name="value", type="integer")
     */
    private $value;

    /**
     * @var int
     *
     * @ORM\Column(name="idNeedy", type="integer")
     */
    private $idNeedy;


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
     * @return Needs
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
     * @return Needs
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
     * Set idNeedy
     *
     * @param integer $idNeedy
     *
     * @return Needs
     */
    public function setIdNeedy($idNeedy)
    {
        $this->idNeedy = $idNeedy;
    
        return $this;
    }

    /**
     * Get idNeedy
     *
     * @return integer
     */
    public function getIdNeedy()
    {
        return $this->idNeedy;
    }

    /**
     * @var bool
     *
     * @ORM\Column(name="isDone", type="boolean")
     */
    private $isDone;

    /**
     * @return bool
     */
    public function isDone()
    {
        return $this->isDone;
    }

    /**
     * @param bool $isDone
     */
    public function setIsDone($isDone)
    {
        $this->isDone = $isDone;
        return $this;
    }
}

