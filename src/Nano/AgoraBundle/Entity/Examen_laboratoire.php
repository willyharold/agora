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
     private $Id_Laboratoire;

    /**
     * @ORM\OneToMany(targetEntity="Nano\AgoraBundle\Entity\Examen", mappedBy="examen_laboratoire")
     * @var $examen[]
     */
     private $Id_Examen;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Id_Laboratoire = new \Doctrine\Common\Collections\ArrayCollection();
        $this->Id_Examen = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add idLaboratoire
     *
     * @param \Nano\AgoraBundle\Entity\Laboartoire $idLaboratoire
     *
     * @return Examen_laboratoire
     */
    public function addIdLaboratoire(\Nano\AgoraBundle\Entity\Laboartoire $idLaboratoire)
    {
        $this->Id_Laboratoire[] = $idLaboratoire;

        return $this;
    }

    /**
     * Remove idLaboratoire
     *
     * @param \Nano\AgoraBundle\Entity\Laboartoire $idLaboratoire
     */
    public function removeIdLaboratoire(\Nano\AgoraBundle\Entity\Laboartoire $idLaboratoire)
    {
        $this->Id_Laboratoire->removeElement($idLaboratoire);
    }

    /**
     * Get idLaboratoire
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdLaboratoire()
    {
        return $this->Id_Laboratoire;
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
}
