<?php

namespace Nano\AgoraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Horaire
 *
 * @ORM\Table(name="horaire")
 * @ORM\Entity(repositoryClass="Nano\AgoraBundle\Repository\HoraireRepository")
 */
class Horaire
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
     * @var \DateTime
     *
     * @ORM\Column(name="lundi_debut", type="datetime")
     */
    private $lundiDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mardi_debut", type="datetime")
     */
    private $mardiDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mercredi_debut", type="datetime")
     */
    private $mercrediDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="jeudi_debut", type="datetime")
     */
    private $jeudiDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="vendredi_debut", type="datetime")
     */
    private $vendrediDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="samedi_debut", type="datetime")
     */
    private $samediDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dimanche_debut", type="datetime")
     */
    private $dimancheDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="lundi_fin", type="datetime")
     */
    private $lundiFin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mardi_fin", type="datetime")
     */
    private $mardiFin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="mercredi_fin", type="datetime")
     */
    private $mercrediFin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="jeudi_fin", type="datetime")
     */
    private $jeudiFin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="vendredi_fin", type="datetime")
     */
    private $vendrediFin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="samedi_fin", type="datetime")
     */
    private $samediFin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dimanche_fin", type="datetime")
     */
    private $dimancheFin;

    /**
     * @ORM\OneToMany(targetEntity="Nano\AgoraBundle\Entity\Medecin", mappedBy="horaire")
     * @var $medecin[]
     */
     private $medecins;

        /**
     * Constructor
     */
    public function __construct()
    {
        $this->medecins = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set lundiDebut
     *
     * @param \DateTime $lundiDebut
     *
     * @return Horaire
     */
    public function setLundiDebut($lundiDebut)
    {
        $this->lundiDebut = $lundiDebut;

        return $this;
    }

    /**
     * Get lundiDebut
     *
     * @return \DateTime
     */
    public function getLundiDebut()
    {
        return $this->lundiDebut;
    }

    /**
     * Set mardiDebut
     *
     * @param \DateTime $mardiDebut
     *
     * @return Horaire
     */
    public function setMardiDebut($mardiDebut)
    {
        $this->mardiDebut = $mardiDebut;

        return $this;
    }

    /**
     * Get mardiDebut
     *
     * @return \DateTime
     */
    public function getMardiDebut()
    {
        return $this->mardiDebut;
    }

    /**
     * Set mercrediDebut
     *
     * @param \DateTime $mercrediDebut
     *
     * @return Horaire
     */
    public function setMercrediDebut($mercrediDebut)
    {
        $this->mercrediDebut = $mercrediDebut;

        return $this;
    }

    /**
     * Get mercrediDebut
     *
     * @return \DateTime
     */
    public function getMercrediDebut()
    {
        return $this->mercrediDebut;
    }

    /**
     * Set jeudiDebut
     *
     * @param \DateTime $jeudiDebut
     *
     * @return Horaire
     */
    public function setJeudiDebut($jeudiDebut)
    {
        $this->jeudiDebut = $jeudiDebut;

        return $this;
    }

    /**
     * Get jeudiDebut
     *
     * @return \DateTime
     */
    public function getJeudiDebut()
    {
        return $this->jeudiDebut;
    }

    /**
     * Set vendrediDebut
     *
     * @param \DateTime $vendrediDebut
     *
     * @return Horaire
     */
    public function setVendrediDebut($vendrediDebut)
    {
        $this->vendrediDebut = $vendrediDebut;

        return $this;
    }

    /**
     * Get vendrediDebut
     *
     * @return \DateTime
     */
    public function getVendrediDebut()
    {
        return $this->vendrediDebut;
    }

    /**
     * Set samediDebut
     *
     * @param \DateTime $samediDebut
     *
     * @return Horaire
     */
    public function setSamediDebut($samediDebut)
    {
        $this->samediDebut = $samediDebut;

        return $this;
    }

    /**
     * Get samediDebut
     *
     * @return \DateTime
     */
    public function getSamediDebut()
    {
        return $this->samediDebut;
    }

    /**
     * Set dimancheDebut
     *
     * @param \DateTime $dimancheDebut
     *
     * @return Horaire
     */
    public function setDimancheDebut($dimancheDebut)
    {
        $this->dimancheDebut = $dimancheDebut;

        return $this;
    }

    /**
     * Get dimancheDebut
     *
     * @return \DateTime
     */
    public function getDimancheDebut()
    {
        return $this->dimancheDebut;
    }

    /**
     * Set lundiFin
     *
     * @param \DateTime $lundiFin
     *
     * @return Horaire
     */
    public function setLundiFin($lundiFin)
    {
        $this->lundiFin = $lundiFin;

        return $this;
    }

    /**
     * Get lundiFin
     *
     * @return \DateTime
     */
    public function getLundiFin()
    {
        return $this->lundiFin;
    }

    /**
     * Set mardiFin
     *
     * @param \DateTime $mardiFin
     *
     * @return Horaire
     */
    public function setMardiFin($mardiFin)
    {
        $this->mardiFin = $mardiFin;

        return $this;
    }

    /**
     * Get mardiFin
     *
     * @return \DateTime
     */
    public function getMardiFin()
    {
        return $this->mardiFin;
    }

    /**
     * Set mercrediFin
     *
     * @param \DateTime $mercrediFin
     *
     * @return Horaire
     */
    public function setMercrediFin($mercrediFin)
    {
        $this->mercrediFin = $mercrediFin;

        return $this;
    }

    /**
     * Get mercrediFin
     *
     * @return \DateTime
     */
    public function getMercrediFin()
    {
        return $this->mercrediFin;
    }

    /**
     * Set jeudiFin
     *
     * @param \DateTime $jeudiFin
     *
     * @return Horaire
     */
    public function setJeudiFin($jeudiFin)
    {
        $this->jeudiFin = $jeudiFin;

        return $this;
    }

    /**
     * Get jeudiFin
     *
     * @return \DateTime
     */
    public function getJeudiFin()
    {
        return $this->jeudiFin;
    }

    /**
     * Set vendrediFin
     *
     * @param \DateTime $vendrediFin
     *
     * @return Horaire
     */
    public function setVendrediFin($vendrediFin)
    {
        $this->vendrediFin = $vendrediFin;

        return $this;
    }

    /**
     * Get vendrediFin
     *
     * @return \DateTime
     */
    public function getVendrediFin()
    {
        return $this->vendrediFin;
    }

    /**
     * Set samediFin
     *
     * @param \DateTime $samediFin
     *
     * @return Horaire
     */
    public function setSamediFin($samediFin)
    {
        $this->samediFin = $samediFin;

        return $this;
    }

    /**
     * Get samediFin
     *
     * @return \DateTime
     */
    public function getSamediFin()
    {
        return $this->samediFin;
    }

    /**
     * Set dimancheFin
     *
     * @param \DateTime $dimancheFin
     *
     * @return Horaire
     */
    public function setDimancheFin($dimancheFin)
    {
        $this->dimancheFin = $dimancheFin;

        return $this;
    }

    /**
     * Get dimancheFin
     *
     * @return \DateTime
     */
    public function getDimancheFin()
    {
        return $this->dimancheFin;
    }

    /**
     * Add medecin
     *
     * @param \Nano\AgoraBundle\Entity\Medecin $medecin
     *
     * @return Horaire
     */
    public function addMedecin(\Nano\AgoraBundle\Entity\Medecin $medecin)
    {
        $this->medecins[] = $medecin;

        return $this;
    }

    /**
     * Remove medecin
     *
     * @param \Nano\AgoraBundle\Entity\Medecin $medecin
     */
    public function removeMedecin(\Nano\AgoraBundle\Entity\Medecin $medecin)
    {
        $this->medecins->removeElement($medecin);
    }

    /**
     * Get medecins
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMedecins()
    {
        return $this->medecins;
    }

}
