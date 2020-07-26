<?php

namespace RefugeeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Benevole
 *
 * @ORM\Table(name="benevole")
 * @ORM\Entity(repositoryClass="RefugeeBundle\Repository\BenevoleRepository")
 */
class Benevole
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
     * @ORM\Column(name="socialStatus", type="string", length=255 , nullable=true)
     */
    private $socialStatus;

    /**
     * @var int
     *
     * @ORM\Column(name="age", type="integer")
     */
    private $age;

    /**
     * @var string
     *
     * @ORM\Column(name="supplies", type="string", length=255)
     */
    private $supplies;

    /**
     * @var bool
     *
     * @ORM\Column(name="motorized", type="boolean")
     */
    private $motorized;

    /**
     * @var bool
     *
     * @ORM\Column(name="isVolunteer", type="boolean" , nullable=true)
     */
    private $isVolunteer;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set socialStatus
     *
     * @param string $socialStatus
     *
     * @return Benevole
     */
    public function setSocialStatus($socialStatus)
    {
        $this->socialStatus = $socialStatus;

        return $this;
    }

    /**
     * Get socialStatus
     *
     * @return string
     */
    public function getSocialStatus()
    {
        return $this->socialStatus;
    }

    /**
     * Set age
     *
     * @param integer $age
     *
     * @return Benevole
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set supplies
     *
     * @param string $supplies
     *
     * @return Benevole
     */
    public function setSupplies($supplies)
    {
        $this->supplies = $supplies;

        return $this;
    }

    /**
     * Get supplies
     *
     * @return string
     */
    public function getSupplies()
    {
        return $this->supplies;
    }

    /**
     * Set motorized
     *
     * @param boolean $motorized
     *
     * @return Benevole
     */
    public function setMotorized($motorized)
    {
        $this->motorized = $motorized;

        return $this;
    }

    /**
     * Get motorized
     *
     * @return bool
     */
    public function getMotorized()
    {
        return $this->motorized;
    }

    /**
     * Set isVolunteer
     *
     * @param boolean $isVolunteer
     *
     * @return Benevole
     */
    public function setIsVolunteer($isVolunteer)
    {
        $this->isVolunteer = $isVolunteer;

        return $this;
    }

    /**
     * Get isVolunteer
     *
     * @return bool
     */
    public function getIsVolunteer()
    {
        return $this->isVolunteer;
    }
}

