<?php

namespace EventBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation")
 * @ORM\Entity(repositoryClass="EventBundle\Repository\ReservationRepository")
 */
class Reservation
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
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="EventBundle\Entity\Event")
     * @ORM\JoinColumn(name="id_event",referencedColumnName="id",
    nullable=true,onDelete="CASCADE")
     */
    private $idEvent;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
     * @ORM\JoinColumn(name="id_user",referencedColumnName="id",
    nullable=true,onDelete="CASCADE")
     */
    private $idUser;


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
     * Set idUser
     *
     * @param integer $idUser
     *
     * @return Reservation
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

    /**
     * Set idEvent
     *
     * @param integer $idEvent
     *
     * @return Reservation
     */
    public function setIdEvent($idEvent)
    {
        $this->idEvent = $idEvent;
        return $this;
    }
    /**
     * Get idEvent
     *
     * @return int
     */
    public function getIdEvent()
    {
        return $this->idEvent;
    }
}

