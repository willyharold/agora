<?php

namespace Nano\AgoraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Examen
 *
 * @ORM\Table(name="examen")
 * @ORM\Entity(repositoryClass="Nano\AgoraBundle\Repository\ExamenRepository")
 */
class Examen
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
     * @var int
     *
     * @ORM\Column(name="prix_reel", type="integer")
     */
    private $prixReel;

    /**
     * @var int
     *
     * @ORM\Column(name="prix_ajouter", type="integer")
     */
    private $prixAjouter;

    /**
     * @var int
     *
     * @ORM\Column(name="prix_domicile", type="integer")
     */
    private $prixDomicile;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="recommandation", type="text")
     */
    private $recommandation;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255)
     */
    private $photo;

    /**
     * @ORM\ManyToOne(targetEntity="Nano\AgoraBundle\Entity\Examen_laboratoire", inversedBy="examens")
     * @ORM\JoinColumn(nullable=false)
     */
    private $examen_laboratoire;

    /**
     * @ORM\ManyToOne(targetEntity="Nano\AgoraBundle\Entity\Examen_rdv", inversedBy="examens")
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
     * @return Examen
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
     * Set prixReel
     *
     * @param integer $prixReel
     *
     * @return Examen
     */
    public function setPrixReel($prixReel)
    {
        $this->prixReel = $prixReel;

        return $this;
    }

    /**
     * Get prixReel
     *
     * @return int
     */
    public function getPrixReel()
    {
        return $this->prixReel;
    }

    /**
     * Set prixAjouter
     *
     * @param integer $prixAjouter
     *
     * @return Examen
     */
    public function setPrixAjouter($prixAjouter)
    {
        $this->prixAjouter = $prixAjouter;

        return $this;
    }

    /**
     * Get prixAjouter
     *
     * @return int
     */
    public function getPrixAjouter()
    {
        return $this->prixAjouter;
    }

    /**
     * Set prixDomicile
     *
     * @param integer $prixDomicile
     *
     * @return Examen
     */
    public function setPrixDomicile($prixDomicile)
    {
        $this->prixDomicile = $prixDomicile;

        return $this;
    }

    /**
     * Get prixDomicile
     *
     * @return int
     */
    public function getPrixDomicile()
    {
        return $this->prixDomicile;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Examen
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
     * Set recommandation
     *
     * @param string $recommandation
     *
     * @return Examen
     */
    public function setRecommandation($recommandation)
    {
        $this->recommandation = $recommandation;

        return $this;
    }

    /**
     * Get recommandation
     *
     * @return string
     */
    public function getRecommandation()
    {
        return $this->recommandation;
    }

    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return Examen
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
     * @return Examen
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
     * @return Examen
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
