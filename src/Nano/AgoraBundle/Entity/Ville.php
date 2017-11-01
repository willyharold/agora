<?php

namespace Nano\AgoraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ville
 *
 * @ORM\Table(name="ville")
 * @ORM\Entity(repositoryClass="Nano\AgoraBundle\Repository\VilleRepository")
 */
class Ville
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

     * @ORM\ManyToOne(targetEntity="Nano\AgoraBundle\Entity\Pays", inversedBy="villes")

     */
    private $pays;
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
     * Set nom
     *
     * @param string $nom
     *
     * @return Ville
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




    public function __toString() {
        return $this->nom;
    }


  
    

    /**
     * Set pays
     *
     * @param \Nano\AgoraBundle\Entity\Pays $pays
     *
     * @return Ville
     */
    public function setPays(\Nano\AgoraBundle\Entity\Pays $pays = null)
    {
        $this->pays = $pays;

        return $this;
    }

    /**
     * Get pays
     *
     * @return \Nano\AgoraBundle\Entity\Pays
     */
    public function getPays()
    {
        return $this->pays;
    }
}
