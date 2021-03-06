<?php

namespace Nano\AgoraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evolution_maladie
 *
 * @ORM\Table(name="evolution_maladie")
 * @ORM\Entity(repositoryClass="Nano\AgoraBundle\Repository\Evolution_maladieRepository")
 */
class Evolution_maladie
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
     * @ORM\Column(name="plaintes", type="text")
     */
    private $plaintes;

    /**
     * @var string
     *
     * @ORM\Column(name="examen_physique", type="text")
     */
    private $examenPhysique;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_enregistrement", type="datetime")
     */
    private $dateEnregistrement;

    /**
     * @ORM\OneToMany(targetEntity="Nano\AgoraBundle\Entity\Rdv", mappedBy="evolution")
     * @var $rdv[]
     */
     private $rdvs;

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
     * Set plaintes
     *
     * @param string $plaintes
     *
     * @return Evolution_maladie
     */
    public function setPlaintes($plaintes)
    {
        $this->plaintes = $plaintes;

        return $this;
    }

    /**
     * Get plaintes
     *
     * @return string
     */
    public function getPlaintes()
    {
        return $this->plaintes;
    }

    /**
     * Set examenPhysique
     *
     * @param string $examenPhysique
     *
     * @return Evolution_maladie
     */
    public function setExamenPhysique($examenPhysique)
    {
        $this->examenPhysique = $examenPhysique;

        return $this;
    }

    /**
     * Get examenPhysique
     *
     * @return string
     */
    public function getExamenPhysique()
    {
        return $this->examenPhysique;
    }

    /**
     * Set dateEnregistrement
     *
     * @param \DateTime $dateEnregistrement
     *
     * @return Evolution_maladie
     */
    public function setDateEnregistrement($dateEnregistrement)
    {
        $this->dateEnregistrement = $dateEnregistrement;

        return $this;
    }

    /**
     * Get dateEnregistrement
     *
     * @return \DateTime
     */
    public function getDateEnregistrement()
    {
        return $this->dateEnregistrement;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Id_Rdv = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add idRdv
     *
     * @param \Nano\AgoraBundle\Entity\Rdv $idRdv
     *
     * @return Evolution_maladie
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
}
