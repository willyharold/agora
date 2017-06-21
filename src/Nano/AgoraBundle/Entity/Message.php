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
     * @ORM\OneToMany(targetEntity="Nano\AgoraBundle\Entity\Utilisateur", mappedBy="messages")
     * @var $utilisateur[]
     */
     private $Id_Utilisateur;

     /**
     * @ORM\OneToMany(targetEntity="Nano\AgoraBundle\Entity\Medecin", mappedBy="messages")
     * @var $medecin[]
     */
     private $Id_Medecin;

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
     * Add idUtilisateur
     *
     * @param \Nano\AgoraBundle\Entity\Utilisateur $idUtilisateur
     *
     * @return Message
     */
    public function addIdUtilisateur(\Nano\AgoraBundle\Entity\Utilisateur $idUtilisateur)
    {
        $this->Id_Utilisateur[] = $idUtilisateur;

        return $this;
    }

    /**
     * Remove idUtilisateur
     *
     * @param \Nano\AgoraBundle\Entity\Utilisateur $idUtilisateur
     */
    public function removeIdUtilisateur(\Nano\AgoraBundle\Entity\Utilisateur $idUtilisateur)
    {
        $this->Id_Utilisateur->removeElement($idUtilisateur);
    }

    /**
     * Get idUtilisateur
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdUtilisateur()
    {
        return $this->Id_Utilisateur;
    }

    /**
     * Add idMedecin
     *
     * @param \Nano\AgoraBundle\Entity\Medecin $idMedecin
     *
     * @return Message
     */
    public function addIdMedecin(\Nano\AgoraBundle\Entity\Medecin $idMedecin)
    {
        $this->Id_Medecin[] = $idMedecin;

        return $this;
    }

    /**
     * Remove idMedecin
     *
     * @param \Nano\AgoraBundle\Entity\Medecin $idMedecin
     */
    public function removeIdMedecin(\Nano\AgoraBundle\Entity\Medecin $idMedecin)
    {
        $this->Id_Medecin->removeElement($idMedecin);
    }

    /**
     * Get idMedecin
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdMedecin()
    {
        return $this->Id_Medecin;
    }
}
