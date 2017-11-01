<?php

namespace Nano\AgoraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Laboratoire
 *
 * @ORM\Table(name="laboratoire")
 * @ORM\Entity(repositoryClass="Nano\AgoraBundle\Repository\LaboratoireRepository")
 */
class Laboratoire
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
     * @ORM\Column(name="designation", type="string", length=255)
     */
    private $designation;

    /**
     * @var string
     *
     * @ORM\Column(name="localisation", type="string", length=255)
     */
    private $localisation;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255)
     */
    private $photo;

    /**
     * @ORM\ManyToOne(targetEntity="Nano\AgoraBundle\Entity\Examen_laboratoire", inversedBy="laboratoires")
     * @ORM\JoinColumn(nullable=false)
     */
    private $examen_laboratoire;


    /**
     * @ORM\ManyToOne(targetEntity="Nano\AgoraBundle\Entity\Examen_rdv", inversedBy="laboratoires")
     * @ORM\JoinColumn(nullable=false)
     */
    private $examen_rdv;


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
     * Set designation
     *
     * @param string $designation
     *
     * @return Laboratoire
     */
    public function setDesignation($designation)
    {
        $this->designation = $designation;

        return $this;
    }

    /**
     * Get designation
     *
     * @return string
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * Set localisation
     *
     * @param string $localisation
     *
     * @return Laboratoire
     */
    public function setLocalisation($localisation)
    {
        $this->localisation = $localisation;

        return $this;
    }

    /**
     * Get localisation
     *
     * @return string
     */
    public function getLocalisation()
    {
        return $this->localisation;
    }

    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return Laboratoire
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
     * Set examenLaboratoire
     *
     * @param \Nano\AgoraBundle\Entity\Examen_laboratoire $examenLaboratoire
     *
     * @return Laboratoire
     */
    public function setExamenLaboratoire(\Nano\AgoraBundle\Entity\Examen_laboratoire $examenLaboratoire)
    {
        $this->examen_laboratoire = $examenLaboratoire;

        return $this;
    }

    /**
     * Get examenLaboratoire
     *
     * @return \Nano\AgoraBundle\Entity\Examen_laboratoire
     */
    public function getExamenLaboratoire()
    {
        return $this->examen_laboratoire;
    }


    /**
     * Set examenRdv
     *
     * @param \Nano\AgoraBundle\Entity\Examen_rdv $examenRdv
     *
     * @return Laboratoire
     */
    public function setExamenRdv(\Nano\AgoraBundle\Entity\Examen_rdv $examenRdv)
    {
        $this->examen_rdv = $examenRdv;

        return $this;
    }

    /**
     * Get examenRdv
     *
     * @return \Nano\AgoraBundle\Entity\Examen_rdv
     */
    public function getExamenRdv()
    {
        return $this->examen_rdv;
    }
}
