<?php

namespace Nano\AgoraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Symptome_maladie
 *
 * @ORM\Table(name="symptome_maladie")
 * @ORM\Entity(repositoryClass="Nano\AgoraBundle\Repository\Symptome_maladieRepository")
 */
class Symptome_maladie
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="caracteristique", type="text")
     */
    private $caracteristique;

   /**
     * @ORM\OneToMany(targetEntity="Nano\AgoraBundle\Entity\Maladie", mappedBy="symptomes")
     * @var $maladie[]
     */
     private $Id_Maladie;

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
     * Set nom
     *
     * @param string $nom
     *
     * @return Symptome_maladie
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set caracteristique
     *
     * @param string $caracteristique
     *
     * @return Symptome_maladie
     */
    public function setCaracteristique($caracteristique)
    {
        $this->caracteristique = $caracteristique;

        return $this;
    }

    /**
     * Get caracteristique
     *
     * @return string
     */
    public function getCaracteristique()
    {
        return $this->caracteristique;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Id_Maladie = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add idMaladie
     *
     * @param \Nano\AgoraBundle\Entity\Maladie $idMaladie
     *
     * @return Symptome_maladie
     */
    public function addIdMaladie(\Nano\AgoraBundle\Entity\Maladie $idMaladie)
    {
        $this->Id_Maladie[] = $idMaladie;

        return $this;
    }

    /**
     * Remove idMaladie
     *
     * @param \Nano\AgoraBundle\Entity\Maladie $idMaladie
     */
    public function removeIdMaladie(\Nano\AgoraBundle\Entity\Maladie $idMaladie)
    {
        $this->Id_Maladie->removeElement($idMaladie);
    }

    /**
     * Get idMaladie
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdMaladie()
    {
        return $this->Id_Maladie;
    }
}
