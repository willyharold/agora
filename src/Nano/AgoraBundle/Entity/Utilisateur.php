<?php

namespace Nano\AgoraBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur")
 * @ORM\Entity(repositoryClass="Nano\AgoraBundle\Repository\UtilisateurRepository")
 */
    class Utilisateur extends BaseUser
    {
        /**
         * @var int
         *
         * @ORM\Column(name="id", type="integer")
         * @ORM\Id
         * @ORM\GeneratedValue(strategy="AUTO")
         */
        protected $id;

        /**
         * @var string
         *
         * @ORM\Column(name="nom", type="string", length=255)
         */
        private $nom;

        /**
         * @var string
         *
         * @ORM\Column(name="prenom", type="string", length=255)
         */
        private $prenom;

        /**
         * @var \DateTime
         *
         * @ORM\Column(name="age", type="datetime")
         */
        private $age;

        /**
         * @var string
         *
         * @ORM\Column(name="nationalite", type="string", length=255)
         */
        private $nationalite;

        /**
         * @var string
         *
         * @ORM\Column(name="profession", type="string", length=255)
         */
        private $profession;

        /**
         * @var string
         *
         * @ORM\Column(name="quartier", type="string", length=255)
         */
        private $quartier;

        /**
         * @var int
         *
         * @ORM\Column(name="numero_tel", type="integer")
         */
        private $numeroTel;

        /**
         * @var string
         *
         * @ORM\Column(name="photo", type="string", length=255)
         */
        private $photo;

        /**
         * @ORM\ManyToOne(targetEntity="Nano\AgoraBundle\Entity\Ville", inversedBy="utilisateurs")
         * @ORM\JoinColumn(nullable=false)
         */
        private $ville;




        /**
         * @ORM\ManyToOne(targetEntity="Nano\AgoraBundle\Entity\Message", inversedBy="utilisateurs")
         * @ORM\JoinColumn(nullable=false)
         */
        private $message;

        /**
         * @ORM\ManyToOne(targetEntity="Nano\AgoraBundle\Entity\Maladie", inversedBy="utilisateurs")
         * @ORM\JoinColumn(nullable=false)
         */
        private $maladie;

        /**
         * @ORM\ManyToOne(targetEntity="Nano\AgoraBundle\Entity\Notification", inversedBy="utilisateurs")
         * @ORM\JoinColumn(nullable=false)
         */
        private $notification;

        protected $username;

        protected $email;

        protected $password;

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
         * @return Utilisateur
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
         * Set prenom
         *
         * @param string $prenom
         *
         * @return Utilisateur
         */
        public function setPrenom($prenom)
        {
            $this->prenom = $prenom;

            return $this;
        }

        /**
         * Get prenom
         *
         * @return string
         */
        public function getPrenom()
        {
            return $this->prenom;
        }


        /**
         * Set nationalite
         *
         * @param string $nationalite
         *
         * @return Utilisateur
         */
        public function setNationalite($nationalite)
        {
            $this->nationalite = $nationalite;

            return $this;
        }

        /**
         * Get nationalite
         *
         * @return string
         */
        public function getNationalite()
        {
            return $this->nationalite;
        }

        /**
         * Set profession
         *
         * @param string $profession
         *
         * @return Utilisateur
         */
        public function setProfession($profession)
        {
            $this->profession = $profession;

            return $this;
        }

        /**
         * Get profession
         *
         * @return string
         */
        public function getProfession()
        {
            return $this->profession;
        }

        /**
         * Set quartier
         *
         * @param string $quartier
         *
         * @return Utilisateur
         */
        public function setQuartier($quartier)
        {
            $this->quartier = $quartier;

            return $this;
        }

        /**
         * Get quartier
         *
         * @return string
         */
        public function getQuartier()
        {
            return $this->quartier;
        }

        /**
         * Set numeroTel
         *
         * @param integer $numeroTel
         *
         * @return Utilisateur
         */
        public function setNumeroTel($numeroTel)
        {
            $this->numeroTel = $numeroTel;

            return $this;
        }

        /**
         * Get numeroTel
         *
         * @return int
         */
        public function getNumeroTel()
        {
            return $this->numeroTel;
        }

        /**
         * Set photo
         *
         * @param string $photo
         *
         * @return Utilisateur
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
     * Set message
     *
     * @param \Nano\AgoraBundle\Entity\Message $message
     *
     * @return Utilisateur
     */
    public function setMessage(\Nano\AgoraBundle\Entity\Message $message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return \Nano\AgoraBundle\Entity\Message
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set notification
     *
     * @param \Nano\AgoraBundle\Entity\Notification $notification
     *
     * @return Utilisateur
     */
    public function setNotification(\Nano\AgoraBundle\Entity\Notification $notification)
    {
        $this->notification = $notification;

        return $this;
    }

    /**
     * Get notification
     *
     * @return \Nano\AgoraBundle\Entity\Notification
     */
    public function getNotification()
    {
        return $this->notification;
    }

    /**
     * Set maladie
     *
     * @param \Nano\AgoraBundle\Entity\Maladie $maladie
     *
     * @return Utilisateur
     */
    public function setMaladie(\Nano\AgoraBundle\Entity\Maladie $maladie)
    {
        $this->maladie = $maladie;

        return $this;
    }

    /**
     * Get maladie
     *
     * @return \Nano\AgoraBundle\Entity\Maladie
     */
    public function getMaladie()
    {
        return $this->maladie;
    }




    /**
     * Set ville
     *
     * @param \Nano\AgoraBundle\Entity\Ville $ville
     *
     * @return Utilisateur
     */
    public function setVille(\Nano\AgoraBundle\Entity\Ville $ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return \Nano\AgoraBundle\Entity\Ville
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set age
     *
     * @param \DateTime $age
     *
     * @return Utilisateur
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return \DateTime
     */
    public function getAge()
    {
        return $this->age;
    }
}
