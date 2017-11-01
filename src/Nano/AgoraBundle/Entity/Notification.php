<?php

namespace Nano\AgoraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notification
 *
 * @ORM\Table(name="notification")
 * @ORM\Entity(repositoryClass="Nano\AgoraBundle\Repository\NotificationRepository")
 */
class Notification
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
     * @ORM\OneToMany(targetEntity="Nano\AgoraBundle\Entity\Utilisateur", mappedBy="notification")
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
     * Set contenu
     *
     * @param string $contenu
     *
     * @return Notification
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
     * Constructor
     */
    public function __construct()
    {
        $this->Id_Utilisateur = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add idUtilisateur
     *
     * @param \Nano\AgoraBundle\Entity\Utilisateur $idUtilisateur
     *
     * @return Notification
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
}
