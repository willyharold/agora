<?php

namespace Nano\AgoraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Message
 *
 * @ORM\Table(name="message")
 * @ORM\Entity(repositoryClass="Nano\AgoraBundle\Repository\MessageRepository")
 */
class Message
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
     * @ORM\Column(name="contenu", type="text")
     */
    private $contenu;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var int
     *
     * @ORM\Column(name="etat", type="integer")
     */
    private $etat;

     /**
     * @ORM\OneToMany(targetEntity="Nano\AgoraBundle\Entity\Utilisateur", mappedBy="message")
     * @var Utilisateur[]
     */
     private $utilisateurs;

     /**
     * @ORM\OneToMany(targetEntity="Nano\AgoraBundle\Entity\Medecin", mappedBy="message")
     * @var Medecin[]
     */
     private $medecins;

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
     * Set contenu
     *
     * @param string $contenu
     *
     * @return Message
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Message
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set etat
     *
     * @param integer $etat
     *
     * @return Message
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return int
     */
    public function getEtat()
    {
        return $this->etat;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Id_Utilisateur = new \Doctrine\Common\Collections\ArrayCollection();
        $this->Id_Medecin = new \Doctrine\Common\Collections\ArrayCollection();
    }



    /**
     * Add utilisateur
     *
     * @param \Nano\AgoraBundle\Entity\Utilisateur $utilisateur
     *
     * @return Message
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

    /**
     * Add medecin
     *
     * @param \Nano\AgoraBundle\Entity\Medecin $medecin
     *
     * @return Message
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
