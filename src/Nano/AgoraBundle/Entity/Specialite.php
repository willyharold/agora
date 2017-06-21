<?php

namespace Nano\AgoraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Specialite
 *
 * @ORM\Table(name="specialite")
 * @ORM\Entity(repositoryClass="Nano\AgoraBundle\Repository\SpecialiteRepository")
 */
class Specialite
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
     * @ORM\Column(name="designation", type="string", length=255)
     */
    private $designation;

    /**
     * @var int
     *
     * @ORM\Column(name="prix_rdv", type="integer")
     */
    private $prixRdv;

    /**
     * @var int
     *
     * @ORM\Column(name="prix_domicile", type="integer")
     */
    private $prixDomicile;

    /**
     * @var int
     *
     * @ORM\Column(name="pourcentage", type="integer")
     */
    private $pourcentage;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255)
     */
    private $photo;

   

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
     * Set designation
     *
     * @param string $designation
     *
     * @return Specialite
     */
    public function setDesignation($designation)
    {
        $this->designation = $designation;

        return $this;
    }

    /**
     * Get designation
     *
     * @return string
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * Set prixRdv
     *
     * @param integer $prixRdv
     *
     * @return Specialite
     */
    public function setPrixRdv($prixRdv)
    {
        $this->prixRdv = $prixRdv;

        return $this;
    }

    /**
     * Get prixRdv
     *
     * @return int
     */
    public function getPrixRdv()
    {
        return $this->prixRdv;
    }

    /**
     * Set prixDomicile
     *
     * @param integer $prixDomicile
     *
     * @return Specialite
     */
    public function setPrixDomicile($prixDomicile)
    {
        $this->prixDomicile = $prixDomicile;

        return $this;
    }

    /**
     * Get prixDomicile
     *
     * @return int
     */
    public function getPrixDomicile()
    {
        return $this->prixDomicile;
    }

    /**
     * Set pourcentage
     *
     * @param integer $pourcentage
     *
     * @return Specialite
     */
    public function setPourcentage($pourcentage)
    {
        $this->pourcentage = $pourcentage;

        return $this;
    }

    /**
     * Get pourcentage
     *
     * @return int
     */
    public function getPourcentage()
    {
        return $this->pourcentage;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Specialite
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
     * Set photo
     *
     * @param string $photo
     *
     * @return Specialite
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }
}
