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
     * @ORM\Column(name="social_status", type="string", length=255, nullable=true)
     */
    private $socialStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=255, nullable=true)
     */
    private $location;

    /**
     * @var int
     *
     * @ORM\Column(name="age", type="integer")
     */
    private $age;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_ref", type="integer", nullable=true)
     */
    private $nbRef;

    /**
     * @var string
     *
     * @ORM\Column(name="supplies", type="string", length=255, nullable=true)
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
     * @ORM\Column(name="is_volunteer", type="boolean")
     */
    private $isVolunteer;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_available", type="boolean")
     */
    private $isAvailable;

    /**
     * @var int
     *
     * @ORM\Column(name="id_user", type="integer")
     */
    private $idUser;


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
     * Set location
     *
     * @param string $location
     *
     * @return Benevole
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
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
     * Set nbRef
     *
     * @param integer $nbRef
     *
     * @return Benevole
     */
    public function setNbRef($nbRef)
    {
        $this->nbRef = $nbRef;

        return $this;
    }

    /**
     * Get nbRef
     *
     * @return int
     */
    public function getNbRef()
    {
        return $this->nbRef;
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

    /**
     * Set isAvailable
     *
     * @param boolean $isAvailable
     *
     * @return Benevole
     */
    public function setIsAvailable($isAvailable)
    {
        $this->isAvailable = $isAvailable;

        return $this;
    }

    /**
     * Get isAvailable
     *
     * @return bool
     */
    public function getIsAvailable()
    {
        return $this->isAvailable;
    }

    /**
     * Set idUser
     *
     * @param integer $idUser
     *
     * @return Benevole
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return int
     */
    public function getIdUser()
    {
        return $this->idUser;
    }
}

