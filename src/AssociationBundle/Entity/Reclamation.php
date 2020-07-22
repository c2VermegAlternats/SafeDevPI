<?php

namespace AssociationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reclamation
 *
 * @ORM\Table(name="reclamation")
 * @ORM\Entity(repositoryClass="AssociationBundle\Repository\ReclamationRepository")
 */
class Reclamation
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
     * @ORM\Column(name="nombre_rec", type="integer", nullable=true)
     */
    private $nombre_rec;

    /**
     * @var int
     *
     *@ORM\ManyToOne(targetEntity="AssociationBundle\Entity\Association")
     * @ORM\JoinColumn(name="idAssociation",referencedColumnName="id",
    nullable=true)
     */
    private $idAssociation;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
     * @ORM\JoinColumn(name="idUser",referencedColumnName="id",
    nullable=true,onDelete="CASCADE")
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
     * Set nombreRec
     *
     * @param integer $nombre_rec
     *
     * @return Reclamation
     */
    public function setNombreRec($nombre_rec)
    {
        $this->nombre_rec = $nombre_rec;

        return $this;
    }

    /**
     * Get nombreRec
     *
     * @return int
     */
    public function getNombreRec()
    {
        return $this->nombre_rec;
    }

    /**
     * Set idAssociation
     *
     * @param integer $idAssociation
     *
     * @return Reclamation
     */
    public function setIdAssociation($idAssociation)
    {
        $this->idAssociation = $idAssociation;

        return $this;
    }

    /**
     * Get idAssociation
     *
     * @return int
     */
    public function getIdAssociation()
    {
        return $this->idAssociation;
    }

    /**
     * Set idUser
     *
     * @param integer $idUser
     *
     * @return Reclamation
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

