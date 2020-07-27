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
     * @ORM\Column(name="nb_ref", type="integer")
     */
    private $nbRef;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
     * @ORM\JoinColumn(name="id_user",referencedColumnName="id",onDelete="CASCADE")
     */
    private $user;

    /**
     * @var bool
     *
     * @ORM\Column(name="motorized", type="boolean", nullable=true)
     */
    private $motorized;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_volunteer", type="boolean", nullable=true)
     */
    private $isVolunteer;

    /**
     * @var bool
     *
     * @ORM\Column(name="is_available", type="boolean")
     */
    private $isAvailable;


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
     * Set user
     *
     * @param integer $user
     *
     * @return Benevole
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return int
     */
    public function getUser()
    {
        return $this->user;
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
}

