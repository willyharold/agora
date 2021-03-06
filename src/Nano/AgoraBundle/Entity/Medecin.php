<?php

namespace Nano\AgoraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Medecin
 *
 * @ORM\Table(name="medecin1")
 * @ORM\Entity(repositoryClass="Nano\AgoraBundle\Repository\MedecinRepository")
 */
class Medecin
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
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

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
     * @var string
     *
     * @ORM\Column(name="localisation_cabinet", type="string", length=255)
     */
    private $localisationCabinet;

    /**
     * @ORM\OneToMany(targetEntity="Nano\AgoraBundle\Entity\Specialite", mappedBy="medecin")
     * @var $specialite[]
     */
     private $specialites;


    /**
     * @ORM\ManyToOne(targetEntity="Nano\AgoraBundle\Entity\Horaire", inversedBy="medecins")
     * @ORM\JoinColumn(nullable=false)
     */
    private $horaire;


    /**
     * @ORM\ManyToOne(targetEntity="Nano\AgoraBundle\Entity\Message", inversedBy="medecins")
     * @ORM\JoinColumn(nullable=false)
     */
    private $message;

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
     * @return Medecin
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
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Medecin
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return Medecin
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
     * @return Medecin
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
     * Set localisationCabinet
     *
     * @param string $localisationCabinet
     *
     * @return Medecin
     */
    public function setLocalisationCabinet($localisationCabinet)
    {
        $this->localisationCabinet = $localisationCabinet;

        return $this;
    }

    /**
     * Get localisationCabinet
     *
     * @return string
     */
    public function getLocalisationCabinet()
    {
        return $this->localisationCabinet;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Id_Specialite = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add idSpecialite
     *
     * @param \Nano\AgoraBundle\Entity\Specialite $idSpecialite
     *
     * @return Medecin
     */
    public function addIdSpecialite(\Nano\AgoraBundle\Entity\Specialite $idSpecialite)
    {
        $this->Id_Specialite[] = $idSpecialite;

        return $this;
    }

    /**
     * Remove idSpecialite
     *
     * @param \Nano\AgoraBundle\Entity\Specialite $idSpecialite
     */
    public function removeIdSpecialite(\Nano\AgoraBundle\Entity\Specialite $idSpecialite)
    {
        $this->Id_Specialite->removeElement($idSpecialite);
    }

    /**
     * Get idSpecialite
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdSpecialite()
    {
        return $this->Id_Specialite;
    }

    /**
     * Add specialite
     *
     * @param \Nano\AgoraBundle\Entity\Specialite $specialite
     *
     * @return Medecin
     */
    public function addSpecialite(\Nano\AgoraBundle\Entity\Specialite $specialite)
    {
        $this->specialites[] = $specialite;

        return $this;
    }

    /**
     * Remove specialite
     *
     * @param \Nano\AgoraBundle\Entity\Specialite $specialite
     */
    public function removeSpecialite(\Nano\AgoraBundle\Entity\Specialite $specialite)
    {
        $this->specialites->removeElement($specialite);
    }

    /**
     * Get specialites
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSpecialites()
    {
        return $this->specialites;
    }

    /**
     * Set horaire
     *
     * @param \Nano\AgoraBundle\Entity\Horaire $horaire
     *
     * @return Medecin
     */
    public function setHoraire(\Nano\AgoraBundle\Entity\Horaire $horaire)
    {
        $this->horaire = $horaire;

        return $this;
    }

    /**
     * Get horaire
     *
     * @return \Nano\AgoraBundle\Entity\Horaire
     */
    public function getHoraire()
    {
        return $this->horaire;
    }

    /**
     * Set message
     *
     * @param \Nano\AgoraBundle\Entity\Message $message
     *
     * @return Medecin
     */
    public function setMessage(\Nano\AgoraBundle\Entity\Message $message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return \Nano\AgoraBundle\Entity\Message
     */
    public function getMessage()
    {
        return $this->message;
    }
}
