<?php

namespace Nano\AgoraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Examen_rdv
 *
 * @ORM\Table(name="examen_rdv")
 * @ORM\Entity(repositoryClass="Nano\AgoraBundle\Repository\Examen_rdvRepository")
 */
class Examen_rdv
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
     * @ORM\Column(name="resultat", type="string", length=255)
     */
    private $resultat;

    /**
     * @var int
     *
     * @ORM\Column(name="etat", type="integer")
     */
    private $etat;

    /**
     * @ORM\OneToMany(targetEntity="Nano\AgoraBundle\Entity\Rdv", mappedBy="examen_rdv")
     * @var $rdv[]
     */
     private $rdvs;

     /**
     * @ORM\OneToMany(targetEntity="Nano\AgoraBundle\Entity\Examen", mappedBy="examen_rdv")
     * @var $examen[]
     */
     private $examens;
    
      /**
     * @ORM\OneToMany(targetEntity="Nano\AgoraBundle\Entity\Laboratoire", mappedBy="examen_rdv")
     * @var $laboratoire[]
     */
     private $laboratoires;


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
     * Set resultat
     *
     * @param string $resultat
     *
     * @return Examen_rdv
     */
    public function setResultat($resultat)
    {
        $this->resultat = $resultat;

        return $this;
    }

    /**
     * Get resultat
     *
     * @return string
     */
    public function getResultat()
    {
        return $this->resultat;
    }

    /**
     * Set etat
     *
     * @param integer $etat
     *
     * @return Examen_rdv
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
        $this->Id_Rdv = new \Doctrine\Common\Collections\ArrayCollection();
        $this->Id_Examen = new \Doctrine\Common\Collections\ArrayCollection();
        $this->Id_Laboratoire = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add idRdv
     *
     * @param \Nano\AgoraBundle\Entity\Rdv $idRdv
     *
     * @return Examen_rdv
     */
    public function addIdRdv(\Nano\AgoraBundle\Entity\Rdv $idRdv)
    {
        $this->Id_Rdv[] = $idRdv;

        return $this;
    }

    /**
     * Remove idRdv
     *
     * @param \Nano\AgoraBundle\Entity\Rdv $idRdv
     */
    public function removeIdRdv(\Nano\AgoraBundle\Entity\Rdv $idRdv)
    {
        $this->Id_Rdv->removeElement($idRdv);
    }

    /**
     * Get idRdv
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getIdRdv()
    {
        return $this->Id_Rdv;
    }

    /**
     * Add idExaman
     *
     * @param \Nano\AgoraBundle\Entity\Examen $idExaman
     *
     * @return Examen_rdv
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
     * Add idLaboratoire
     *
     * @param \Nano\AgoraBundle\Entity\Laboratoire $idLaboratoire
     *
     * @return Examen_rdv
     */
    public function addIdLaboratoire(\Nano\AgoraBundle\Entity\Laboratoire $idLaboratoire)
    {
        $this->Id_Laboratoire[] = $idLaboratoire;

        return $this;
    }

    /**
     * Remove idLaboratoire
     *
     * @param \Nano\AgoraBundle\Entity\Laboratoire $idLaboratoire
     */
    public function removeIdLaboratoire(\Nano\AgoraBundle\Entity\Laboratoire $idLaboratoire)
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
     * Add rdv
     *
     * @param \Nano\AgoraBundle\Entity\Rdv $rdv
     *
     * @return Examen_rdv
     */
    public function addRdv(\Nano\AgoraBundle\Entity\Rdv $rdv)
    {
        $this->rdvs[] = $rdv;

        return $this;
    }

    /**
     * Remove rdv
     *
     * @param \Nano\AgoraBundle\Entity\Rdv $rdv
     */
    public function removeRdv(\Nano\AgoraBundle\Entity\Rdv $rdv)
    {
        $this->rdvs->removeElement($rdv);
    }

    /**
     * Get rdvs
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRdvs()
    {
        return $this->rdvs;
    }

    /**
     * Add examen
     *
     * @param \Nano\AgoraBundle\Entity\Examen $examen
     *
     * @return Examen_rdv
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

    /**
     * Add laboratoire
     *
     * @param \Nano\AgoraBundle\Entity\Laboratoire $laboratoire
     *
     * @return Examen_rdv
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
}
