<?php

namespace AssociationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Association
 *
 * @ORM\Table(name="association")
 * @ORM\Entity(repositoryClass="AssociationBundle\Repository\AssociationRepository")
 */
class Association
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
     * @ORM\Column(name="nom_a", type="string", length=255, nullable=true)
     */
    private $nom_a;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=255, nullable=true)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=255, nullable=true)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255, nullable=true)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_president", type="string", length=255, nullable=true)
     */
    private $nom_president;

    /**
     * @var float
     *
     * @ORM\Column(name="budget", type="float", nullable=true)
     */
    private $budget;

    /**
     * @var int
     *

     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
     * @ORM\JoinColumn(name="id_user",referencedColumnName="id",
    nullable=true,onDelete="CASCADE")
     */
    private $id_user;

    /**
     * @var string
     *
     * @ORM\Column(name="categoriet", type="string", length=255, nullable=true)
     */
    private $categorie;
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
     * Set nomA
     *
     * @param string $nomA
     *
     * @return Association
     */
    public function setNomA($nom_a)
    {
        $this->nom_a = $nom_a;

        return $this;
    }

    /**
     * Get nomA
     *
     * @return string
     */
    public function getNomA()
    {
        return $this->nom_a;
    }

    /**
     * Set tel
     *
     * @param string $tel
     *
     * @return Association
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Association
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Association
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
     * Set ville
     *
     * @param string $ville
     *
     * @return Association
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Association
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set nomPresident
     *
     * @param string $nomPresident
     *
     * @return Association
     */
    public function setNomPresident($nom_president)
    {
        $this->nom_president = $nom_president;

        return $this;
    }

    /**
     * Get nomPresident
     *
     * @return string
     */
    public function getNomPresident()
    {
        return $this->nom_president;
    }

    /**
     * Set budget
     *
     * @param float $budget
     *
     * @return Association
     */
    public function setBudget($budget)
    {
        $this->budget = $budget;

        return $this;
    }

    /**
     * Get budget
     *
     * @return float
     */
    public function getBudget()
    {
        return $this->budget;
    }

    /**
     * @return int
     */
    public function getIdUser()
    {
        return $this->id_ser;
    }

    /**
     * @param int $idUser
     */
    public function setIdUser($id_user)
    {
        $this->id_user = $id_user;
    }

    /**
     * Get nomPresident
     *
     * @return string
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set categorie
     *     * @param string $categorie
     *
     * @return Association
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;
    }
}

