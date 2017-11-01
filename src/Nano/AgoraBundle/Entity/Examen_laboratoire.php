<?php

namespace Nano\AgoraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Examen_laboratoire
 *
 * @ORM\Table(name="examen_laboratoire")
 * @ORM\Entity(repositoryClass="Nano\AgoraBundle\Repository\Examen_laboratoireRepository")
 */
class Examen_laboratoire
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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

   /**
     * @ORM\OneToMany(targetEntity="Nano\AgoraBundle\Entity\Laboratoire", mappedBy="examen_laboratoire")
     * @var $laboratoire[]
     */
     private $laboratoires;

    /**
     * @ORM\OneToMany(targetEntity="Nano\AgoraBundle\Entity\Examen", mappedBy="examen_laboratoire")
     * @var $examen[]
     */
     private $examens;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Id_Laboratoire = new \Doctrine\Common\Collections\ArrayCollection();
        $this->Id_Examen = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Add idExaman
     *
     * @param \Nano\AgoraBundle\Entity\Examen $idExaman
     *
     * @return Examen_laboratoire
     */
    public function addIdExaman(\Nano\AgoraBundle\Entity\Examen $idExaman)
    {
        $this->Id_Examen[] = $idExaman;

        return $this;
    }

    /**
     * Remove idExaman
     *
     * @param \Nano\AgoraBundle\Entity\Examen $idExaman
     */
    public function removeIdExaman(\Nano\AgoraBundle\Entity\Examen $idExaman)
    {
        $this->Id_Examen->removeElement($idExaman);
    }

    /**
     * Get idExamen
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdExamen()
    {
        return $this->Id_Examen;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Examen_laboratoire
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
     * Add laboratoire
     *
     * @param \Nano\AgoraBundle\Entity\Laboratoire $laboratoire
     *
     * @return Examen_laboratoire
     */
    public function addLaboratoire(\Nano\AgoraBundle\Entity\Laboratoire $laboratoire)
    {
        $this->laboratoires[] = $laboratoire;

        return $this;
    }

    /**
     * Remove laboratoire
     *
     * @param \Nano\AgoraBundle\Entity\Laboratoire $laboratoire
     */
    public function removeLaboratoire(\Nano\AgoraBundle\Entity\Laboratoire $laboratoire)
    {
        $this->laboratoires->removeElement($laboratoire);
    }

    /**
     * Get laboratoires
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLaboratoires()
    {
        return $this->laboratoires;
    }

    /**
     * Add examen
     *
     * @param \Nano\AgoraBundle\Entity\Examen $examen
     *
     * @return Examen_laboratoire
     */
    public function addExamen(\Nano\AgoraBundle\Entity\Examen $examen)
    {
        $this->examens[] = $examen;

        return $this;
    }

    /**
     * Remove examen
     *
     * @param \Nano\AgoraBundle\Entity\Examen $examen
     */
    public function removeExamen(\Nano\AgoraBundle\Entity\Examen $examen)
    {
        $this->examens->removeElement($examen);
    }

    /**
     * Get examens
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getExamens()
    {
        return $this->examens;
    }
}
