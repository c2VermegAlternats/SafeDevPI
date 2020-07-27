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
     * @var string
     *
     * @ORM\Column(name="description", type="string", nullable=true)
     */
    private $description;

    /**
     * @var int
     *
     *@ORM\ManyToOne(targetEntity="AssociationBundle\Entity\Association")
     * @ORM\JoinColumn(name="id_association",referencedColumnName="id",
    nullable=true, onDelete="CASCADE")
     */
    private $idAssociation;

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
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Reclamation
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
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

