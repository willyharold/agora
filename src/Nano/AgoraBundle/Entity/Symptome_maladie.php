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
     * @ORM\OneToMany(targetEntity="Nano\AgoraBundle\Entity\Maladie", mappedBy="symptome_maladie")
     * @var $Maladie[]
     */
     private $maladies;

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
     * Add malady
     *
     * @param \Nano\AgoraBundle\Entity\Maladie $malady
     *
     * @return Symptome_maladie
     */
    public function addMalady(\Nano\AgoraBundle\Entity\Maladie $malady)
    {
        $this->maladies[] = $malady;

        return $this;
    }

    /**
     * Remove malady
     *
     * @param \Nano\AgoraBundle\Entity\Maladie $malady
     */
    public function removeMalady(\Nano\AgoraBundle\Entity\Maladie $malady)
    {
        $this->maladies->removeElement($malady);
    }

    /**
     * Get maladies
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMaladies()
    {
        return $this->maladies;
    }

    public function __toString() {
        return $this->nom;
    }
}
