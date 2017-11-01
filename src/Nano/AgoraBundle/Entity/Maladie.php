<?php

namespace Nano\AgoraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Maladie
 *
 * @ORM\Table(name="maladie")
 * @ORM\Entity(repositoryClass="Nano\AgoraBundle\Repository\MaladieRepository")
 */
class Maladie
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
     * @ORM\Column(name="photo", type="string", length=255)
     */
    private $photo;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;


    /**
     * @ORM\ManyToOne(targetEntity="Nano\AgoraBundle\Entity\Symptome_maladie", inversedBy="maladies")
     * @ORM\JoinColumn(nullable=false)
     */
    private $symptome_maladie;

    /**
     * @ORM\OneToMany(targetEntity="Nano\AgoraBundle\Entity\Utilisateur", mappedBy="maladie")
     * @var $utilisateur[]
     */
    private $utilisateurs;

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
     * @return Maladie
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
     * Set photo
     *
     * @param string $photo
     *
     * @return Maladie
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

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Maladie
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
     * Constructor
     */
    public function __construct()
    {
        $this->utilisateurs = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set symptomeMaladie
     *
     * @param \Nano\AgoraBundle\Entity\Symptome_maladie $symptomeMaladie
     *
     * @return Maladie
     */
    public function setSymptomeMaladie(\Nano\AgoraBundle\Entity\Symptome_maladie $symptomeMaladie)
    {
        $this->symptome_maladie = $symptomeMaladie;

        return $this;
    }

    /**
     * Get symptomeMaladie
     *
     * @return \Nano\AgoraBundle\Entity\Symptome_maladie
     */
    public function getSymptomeMaladie()
    {
        return $this->symptome_maladie;
    }

    /**
     * Add utilisateur
     *
     * @param \Nano\AgoraBundle\Entity\Utilisateur $utilisateur
     *
     * @return Maladie
     */
    public function addUtilisateur(\Nano\AgoraBundle\Entity\Utilisateur $utilisateur)
    {
        $this->utilisateurs[] = $utilisateur;

        return $this;
    }

    /**
     * Remove utilisateur
     *
     * @param \Nano\AgoraBundle\Entity\Utilisateur $utilisateur
     */
    public function removeUtilisateur(\Nano\AgoraBundle\Entity\Utilisateur $utilisateur)
    {
        $this->utilisateurs->removeElement($utilisateur);
    }

    /**
     * Get utilisateurs
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUtilisateurs()
    {
        return $this->utilisateurs;
    }
}
