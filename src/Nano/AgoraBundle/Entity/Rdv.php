<?php

namespace Nano\AgoraBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rdv
 *
 * @ORM\Table(name="rdv")
 * @ORM\Entity(repositoryClass="Nano\AgoraBundle\Repository\RdvRepository")
 */
class Rdv
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
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255, nullable=true)
     */
    private $prenom;

    /**
     * @var int
     *
     * @ORM\Column(name="sexe", type="integer", nullable=true)
     */
    private $sexe;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="age", type="date", nullable=true)
     */
    private $age;

    /**
     * @var string
     *
     * @ORM\Column(name="nationalite", type="string", length=255, nullable=true)
     */
    private $nationalite;

    /**
     * @var string
     *
     * @ORM\Column(name="profession", type="string", length=255, nullable=true)
     */
    private $profession;

    /**
     * @var string
     *
     * @ORM\Column(name="quartier", type="string", length=255, nullable=true)
     */
    private $quartier;

    /**
     * @var int
     *
     * @ORM\Column(name="numeroTel", type="integer", nullable=true)
     */
    private $numeroTel;

    /**
     * @var string
     *
     * @ORM\Column(name="photo", type="string", length=255, nullable=true)
     */
    private $photo;


    /**
     * @var string
     *
     * @ORM\Column(name="motifConsultation", type="text", nullable=true)
     */
    private $motifConsultation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateHeureRdv", type="datetime", nullable=true)
     */
    private $dateHeureRdv;

    /**
     * @var int
     *
     * @ORM\Column(name="lieuConsultation", type="integer", nullable=true)
     */
    private $lieuConsultation;

    /**
     * @var string
     *
     * @ORM\Column(name="localisation", type="text", nullable=true)
     */
    private $localisation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEtape1", type="datetime", nullable=true)
     */
    private $dateEtape1;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateHeureRdvReel", type="datetime", nullable=true)
     */
    private $dateHeureRdvReel;

    /**
     * @var string
     *
     * @ORM\Column(name="lieuConsultationReel", type="string", length=255, nullable=true)
     */
    private $lieuConsultationReel;

    /**
     * @var string
     *
     * @ORM\Column(name="motifConsultationReel", type="string", length=255, nullable=true)
     */
    private $motifConsultationReel;

    /**
     * @var string
     *
     * @ORM\Column(name="historiqueMaladie", type="text", nullable=true)
     */
    private $historiqueMaladie;

    /**
     * @var string
     *
     * @ORM\Column(name="antecedentPrenataux", type="text", nullable=true)
     */
    private $antecedentPrenataux;

    /**
     * @var string
     *
     * @ORM\Column(name="antecedentNataux", type="text", nullable=true)
     */
    private $antecedentNataux;

    /**
     * @var string
     *
     * @ORM\Column(name="antecedentPostnataux", type="text", nullable=true)
     */
    private $antecedentPostnataux;

    /**
     * @var string
     *
     * @ORM\Column(name="antecedentImmunoallergique", type="text", nullable=true)
     */
    private $antecedentImmunoallergique;

    /**
     * @var string
     *
     * @ORM\Column(name="antecedentEnvironnementaux", type="text", nullable=true)
     */
    private $antecedentEnvironnementaux;

    /**
     * @var string
     *
     * @ORM\Column(name="alimentation", type="text", nullable=true)
     */
    private $alimentation;

    /**
     * @var string
     *
     * @ORM\Column(name="developpementPsychomoteur", type="text", nullable=true)
     */
    private $developpementPsychomoteur;

    /**
     * @var string
     *
     * @ORM\Column(name="antecedentSocioeconomiques", type="text", nullable=true)
     */
    private $antecedentSocioeconomiques;

    /**
     * @var string
     *
     * @ORM\Column(name="antecedentGynecologiques", type="text", nullable=true)
     */
    private $antecedentGynecologiques;

    /**
     * @var string
     *
     * @ORM\Column(name="antecedentObstetricaux", type="text", nullable=true)
     */
    private $antecedentObstetricaux;

    /**
     * @var string
     *
     * @ORM\Column(name="antecedentFamilliaux", type="text", nullable=true)
     */
    private $antecedentFamilliaux;

    /**
     * @var string
     *
     * @ORM\Column(name="signeGeneraux", type="string", length=255, nullable=true)
     */
    private $signeGeneraux;

    /**
     * @var string
     *
     * @ORM\Column(name="systemeCardiovasculaire", type="string", length=255, nullable=true)
     */
    private $systemeCardiovasculaire;

    /**
     * @var string
     *
     * @ORM\Column(name="systemePulmonaire", type="string", length=255, nullable=true)
     */
    private $systemePulmonaire;

    /**
     * @var string
     *
     * @ORM\Column(name="systemeHepatogastricoenterologique", type="string", length=255, nullable=true)
     */
    private $systemeHepatogastricoenterologique;

    /**
     * @var string
     *
     * @ORM\Column(name="systemeNeurologique", type="string", length=255, nullable=true)
     */
    private $systemeNeurologique;

    /**
     * @var string
     *
     * @ORM\Column(name="systemeEndocrinien", type="string", length=255, nullable=true)
     */
    private $systemeEndocrinien;

    /**
     * @var string
     *
     * @ORM\Column(name="systemeHematologique", type="string", length=255, nullable=true)
     */
    private $systemeHematologique;

    /**
     * @var string
     *
     * @ORM\Column(name="systemeUrogenital", type="string", length=255, nullable=true)
     */
    private $systemeUrogenital;

    /**
     * @var string
     *
     * @ORM\Column(name="systemeDermatologique", type="string", length=255, nullable=true)
     */
    private $systemeDermatologique;

    /**
     * @var string
     *
     * @ORM\Column(name="systemeLocomoteur", type="string", length=255, nullable=true)
     */
    private $systemeLocomoteur;

    /**
     * @var string
     *
     * @ORM\Column(name="systemeOtorhinolaryngologique", type="string", length=255, nullable=true)
     */
    private $systemeOtorhinolaryngologique;

    /**
     * @var string
     *
     * @ORM\Column(name="systemeOphtamologique", type="string", length=255, nullable=true)
     */
    private $systemeOphtamologique;

    /**
     * @var string
     *
     * @ORM\Column(name="etatGeneral", type="text", nullable=true)
     */
    private $etatGeneral;

    /**
     * @var float
     *
     * @ORM\Column(name="tensionArterielle", type="float", nullable=true)
     */
    private $tensionArterielle;

    /**
     * @var float
     *
     * @ORM\Column(name="temperature", type="float", nullable=true)
     */
    private $temperature;

    /**
     * @var int
     *
     * @ORM\Column(name="pouls", type="integer", nullable=true)
     */
    private $pouls;

    /**
     * @var float
     *
     * @ORM\Column(name="glycemie", type="float", nullable=true)
     */
    private $glycemie;

    /**
     * @var float
     *
     * @ORM\Column(name="poids", type="float", nullable=true)
     */
    private $poids;

    /**
     * @var float
     *
     * @ORM\Column(name="IMC", type="float", nullable=true)
     */
    private $iMC;

    /**
     * @var int
     *
     * @ORM\Column(name="examenTopographique", type="integer", nullable=true)
     */
    private $examenTopographique;

    /**
     * @var string
     *
     * @ORM\Column(name="teteOuCou", type="text", nullable=true)
     */
    private $teteOuCou;

    /**
     * @var string
     *
     * @ORM\Column(name="thorax", type="text", nullable=true)
     */
    private $thorax;

    /**
     * @var string
     *
     * @ORM\Column(name="abdomen", type="text", nullable=true)
     */
    private $abdomen;

    /**
     * @var string
     *
     * @ORM\Column(name="organeGenitoexterne", type="text", nullable=true)
     */
    private $organeGenitoexterne;

    /**
     * @var string
     *
     * @ORM\Column(name="examenRachis", type="text", nullable=true)
     */
    private $examenRachis;

    /**
     * @var string
     *
     * @ORM\Column(name="examenMembre", type="text", nullable=true)
     */
    private $examenMembre;

    /**
     * @var string
     *
     * @ORM\Column(name="examenNeurologique", type="text", nullable=true)
     */
    private $examenNeurologique;

    /**
     * @var int
     *
     * @ORM\Column(name="examenSystematique", type="integer", nullable=true)
     */
    private $examenSystematique;

    /**
     * @var string
     *
     * @ORM\Column(name="appareilCardiovasculaire", type="text", nullable=true)
     */
    private $appareilCardiovasculaire;

    /**
     * @var string
     *
     * @ORM\Column(name="appareilRespiratoire", type="text", nullable=true)
     */
    private $appareilRespiratoire;

    /**
     * @var string
     *
     * @ORM\Column(name="appareilDigestif", type="text", nullable=true)
     */
    private $appareilDigestif;

    /**
     * @var string
     *
     * @ORM\Column(name="appareilUrogenital", type="text", nullable=true)
     */
    private $appareilUrogenital;

    /**
     * @var string
     *
     * @ORM\Column(name="appareilLocomoteur", type="text", nullable=true)
     */
    private $appareilLocomoteur;

    /**
     * @var string
     *
     * @ORM\Column(name="systemeSplenoganglionnaire", type="text", nullable=true)
     */
    private $systemeSplenoganglionnaire;

    /**
     * @var string
     *
     * @ORM\Column(name="systemeNerveux", type="text", nullable=true)
     */
    private $systemeNerveux;

    /**
     * @var string
     *
     * @ORM\Column(name="antecedentContributif", type="text", nullable=true)
     */
    private $antecedentContributif;

    /**
     * @var string
     *
     * @ORM\Column(name="resumeSyndomique", type="text", nullable=true)
     */
    private $resumeSyndomique;

    /**
     * @var string
     *
     * @ORM\Column(name="hypotheseDiagnostics", type="text", nullable=true)
     */
    private $hypotheseDiagnostics;

    /**
     * @var string
     *
     * @ORM\Column(name="diagnosticDifferentiels", type="text", nullable=true)
     */
    private $diagnosticDifferentiels;

    /**
     * @var string
     *
     * @ORM\Column(name="bilanBiologique", type="text", nullable=true)
     */
    private $bilanBiologique;

    /**
     * @var string
     *
     * @ORM\Column(name="bilanMorphologique", type="text", nullable=true)
     */
    private $bilanMorphologique;

    /**
     * @var int
     *
     * @ORM\Column(name="refererMedecin", type="integer", nullable=true)
     */
    private $refererMedecin;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="optionSuivie", type="datetime", nullable=true)
     */
    private $optionSuivie;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEtape2", type="datetime", nullable=true)
     */
    private $dateEtape2;

    /**
     * @var int
     *
     * @ORM\Column(name="prixExamen", type="integer", nullable=true)
     */
    private $prixExamen;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateHeureExamen", type="datetime", nullable=true)
     */
    private $dateHeureExamen;

    /**
     * @var string
     *
     * @ORM\Column(name="lieuExamen", type="string", length=255, nullable=true)
     */
    private $lieuExamen;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEtape3", type="datetime", nullable=true)
     */
    private $dateEtape3;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEtape4", type="datetime", nullable=true)
     */
    private $dateEtape4;

    /**
     * @var string
     *
     * @ORM\Column(name="diagnosticFinal", type="text", nullable=true)
     */
    private $diagnosticFinal;

    /**
     * @var string
     *
     * @ORM\Column(name="traitementFinal", type="text", nullable=true)
     */
    private $traitementFinal;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEtape5", type="datetime", nullable=true)
     */
    private $dateEtape5;

    /**
     * @var int
     *
     * @ORM\Column(name="etat", type="integer", nullable=true)
     */
    private $etat;



 /**
     * @ORM\ManyToOne(targetEntity="Nano\AgoraBundle\Entity\Evolution_maladie", inversedBy="rdvs")
     * @ORM\JoinColumn(nullable=true)
     */
    private $evolution;

    /**
     * @ORM\ManyToOne(targetEntity="Nano\AgoraBundle\Entity\Examen_rdv", inversedBy="rdvs")
     * @ORM\JoinColumn(nullable=true)
     */
    private $examen_rdv;

  /**

     * @ORM\ManyToOne(targetEntity="Nano\AgoraBundle\Entity\Ville", inversedBy="rdvs")

     * @ORM\JoinColumn(nullable=true)

     */
     private $ville;

 /**

     * @ORM\ManyToOne(targetEntity="Nano\AgoraBundle\Entity\Utilisateur", inversedBy="rdvs")

     * @ORM\JoinColumn(nullable=true)

     */
     private $utilisateur;

 /**

     * @ORM\ManyToOne(targetEntity="Nano\AgoraBundle\Entity\Specialite", inversedBy="rdvs")

     * @ORM\JoinColumn(nullable=true)

     */
     private $specialite;

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
     * @return Rdv
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
     * @return Rdv
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
     * Set sexe
     *
     * @param integer $sexe
     *
     * @return Rdv
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return int
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set age
     *
     * @param \DateTime $age
     *
     * @return Rdv
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

    /**
     * Set nationalite
     *
     * @param string $nationalite
     *
     * @return Rdv
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
     * @return Rdv
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
     * @return Rdv
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
     * @return Rdv
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
     * @return Rdv
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
     * Set motifConsultation
     *
     * @param string $motifConsultation
     *
     * @return Rdv
     */
    public function setMotifConsultation($motifConsultation)
    {
        $this->motifConsultation = $motifConsultation;

        return $this;
    }

    /**
     * Get motifConsultation
     *
     * @return string
     */
    public function getMotifConsultation()
    {
        return $this->motifConsultation;
    }

    /**
     * Set dateHeureRdv
     *
     * @param \DateTime $dateHeureRdv
     *
     * @return Rdv
     */
    public function setDateHeureRdv($dateHeureRdv)
    {
        $this->dateHeureRdv = $dateHeureRdv;

        return $this;
    }

    /**
     * Get dateHeureRdv
     *
     * @return \DateTime
     */
    public function getDateHeureRdv()
    {
        return $this->dateHeureRdv;
    }

    /**
     * Set lieuConsultation
     *
     * @param integer $lieuConsultation
     *
     * @return Rdv
     */
    public function setLieuConsultation($lieuConsultation)
    {
        $this->lieuConsultation = $lieuConsultation;

        return $this;
    }

    /**
     * Get lieuConsultation
     *
     * @return int
     */
    public function getLieuConsultation()
    {
        return $this->lieuConsultation;
    }

    /**
     * Set localisation
     *
     * @param string $localisation
     *
     * @return Rdv
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
     * Set dateEtape1
     *
     * @param \DateTime $dateEtape1
     *
     * @return Rdv
     */
    public function setDateEtape1($dateEtape1)
    {
        $this->dateEtape1 = $dateEtape1;

        return $this;
    }

    /**
     * Get dateEtape1
     *
     * @return \DateTime
     */
    public function getDateEtape1()
    {
        return $this->dateEtape1;
    }

    /**
     * Set dateHeureRdvReel
     *
     * @param \DateTime $dateHeureRdvReel
     *
     * @return Rdv
     */
    public function setDateHeureRdvReel($dateHeureRdvReel)
    {
        $this->dateHeureRdvReel = $dateHeureRdvReel;

        return $this;
    }

    /**
     * Get dateHeureRdvReel
     *
     * @return \DateTime
     */
    public function getDateHeureRdvReel()
    {
        return $this->dateHeureRdvReel;
    }

    /**
     * Set lieuConsultationReel
     *
     * @param string $lieuConsultationReel
     *
     * @return Rdv
     */
    public function setLieuConsultationReel($lieuConsultationReel)
    {
        $this->lieuConsultationReel = $lieuConsultationReel;

        return $this;
    }

    /**
     * Get lieuConsultationReel
     *
     * @return string
     */
    public function getLieuConsultationReel()
    {
        return $this->lieuConsultationReel;
    }

    /**
     * Set motifConsultationReel
     *
     * @param string $motifConsultationReel
     *
     * @return Rdv
     */
    public function setMotifConsultationReel($motifConsultationReel)
    {
        $this->motifConsultationReel = $motifConsultationReel;

        return $this;
    }

    /**
     * Get motifConsultationReel
     *
     * @return string
     */
    public function getMotifConsultationReel()
    {
        return $this->motifConsultationReel;
    }

    /**
     * Set historiqueMaladie
     *
     * @param string $historiqueMaladie
     *
     * @return Rdv
     */
    public function setHistoriqueMaladie($historiqueMaladie)
    {
        $this->historiqueMaladie = $historiqueMaladie;

        return $this;
    }

    /**
     * Get historiqueMaladie
     *
     * @return string
     */
    public function getHistoriqueMaladie()
    {
        return $this->historiqueMaladie;
    }

    /**
     * Set antecedentPrenataux
     *
     * @param string $antecedentPrenataux
     *
     * @return Rdv
     */
    public function setAntecedentPrenataux($antecedentPrenataux)
    {
        $this->antecedentPrenataux = $antecedentPrenataux;

        return $this;
    }

    /**
     * Get antecedentPrenataux
     *
     * @return string
     */
    public function getAntecedentPrenataux()
    {
        return $this->antecedentPrenataux;
    }

    /**
     * Set antecedentNataux
     *
     * @param string $antecedentNataux
     *
     * @return Rdv
     */
    public function setAntecedentNataux($antecedentNataux)
    {
        $this->antecedentNataux = $antecedentNataux;

        return $this;
    }

    /**
     * Get antecedentNataux
     *
     * @return string
     */
    public function getAntecedentNataux()
    {
        return $this->antecedentNataux;
    }

    /**
     * Set antecedentPostnataux
     *
     * @param string $antecedentPostnataux
     *
     * @return Rdv
     */
    public function setAntecedentPostnataux($antecedentPostnataux)
    {
        $this->antecedentPostnataux = $antecedentPostnataux;

        return $this;
    }

    /**
     * Get antecedentPostnataux
     *
     * @return string
     */
    public function getAntecedentPostnataux()
    {
        return $this->antecedentPostnataux;
    }

    /**
     * Set antecedentImmunoallergique
     *
     * @param string $antecedentImmunoallergique
     *
     * @return Rdv
     */
    public function setAntecedentImmunoallergique($antecedentImmunoallergique)
    {
        $this->antecedentImmunoallergique = $antecedentImmunoallergique;

        return $this;
    }

    /**
     * Get antecedentImmunoallergique
     *
     * @return string
     */
    public function getAntecedentImmunoallergique()
    {
        return $this->antecedentImmunoallergique;
    }

    /**
     * Set antecedentEnvironnementaux
     *
     * @param string $antecedentEnvironnementaux
     *
     * @return Rdv
     */
    public function setAntecedentEnvironnementaux($antecedentEnvironnementaux)
    {
        $this->antecedentEnvironnementaux = $antecedentEnvironnementaux;

        return $this;
    }

    /**
     * Get antecedentEnvironnementaux
     *
     * @return string
     */
    public function getAntecedentEnvironnementaux()
    {
        return $this->antecedentEnvironnementaux;
    }

    /**
     * Set alimentation
     *
     * @param string $alimentation
     *
     * @return Rdv
     */
    public function setAlimentation($alimentation)
    {
        $this->alimentation = $alimentation;

        return $this;
    }

    /**
     * Get alimentation
     *
     * @return string
     */
    public function getAlimentation()
    {
        return $this->alimentation;
    }

    /**
     * Set developpementPsychomoteur
     *
     * @param string $developpementPsychomoteur
     *
     * @return Rdv
     */
    public function setDeveloppementPsychomoteur($developpementPsychomoteur)
    {
        $this->developpementPsychomoteur = $developpementPsychomoteur;

        return $this;
    }

    /**
     * Get developpementPsychomoteur
     *
     * @return string
     */
    public function getDeveloppementPsychomoteur()
    {
        return $this->developpementPsychomoteur;
    }

    /**
     * Set antecedentSocioeconomiques
     *
     * @param string $antecedentSocioeconomiques
     *
     * @return Rdv
     */
    public function setAntecedentSocioeconomiques($antecedentSocioeconomiques)
    {
        $this->antecedentSocioeconomiques = $antecedentSocioeconomiques;

        return $this;
    }

    /**
     * Get antecedentSocioeconomiques
     *
     * @return string
     */
    public function getAntecedentSocioeconomiques()
    {
        return $this->antecedentSocioeconomiques;
    }

    /**
     * Set antecedentGynecologiques
     *
     * @param string $antecedentGynecologiques
     *
     * @return Rdv
     */
    public function setAntecedentGynecologiques($antecedentGynecologiques)
    {
        $this->antecedentGynecologiques = $antecedentGynecologiques;

        return $this;
    }

    /**
     * Get antecedentGynecologiques
     *
     * @return string
     */
    public function getAntecedentGynecologiques()
    {
        return $this->antecedentGynecologiques;
    }

    /**
     * Set antecedentObstetricaux
     *
     * @param string $antecedentObstetricaux
     *
     * @return Rdv
     */
    public function setAntecedentObstetricaux($antecedentObstetricaux)
    {
        $this->antecedentObstetricaux = $antecedentObstetricaux;

        return $this;
    }

    /**
     * Get antecedentObstetricaux
     *
     * @return string
     */
    public function getAntecedentObstetricaux()
    {
        return $this->antecedentObstetricaux;
    }

    /**
     * Set antecedentFamilliaux
     *
     * @param string $antecedentFamilliaux
     *
     * @return Rdv
     */
    public function setAntecedentFamilliaux($antecedentFamilliaux)
    {
        $this->antecedentFamilliaux = $antecedentFamilliaux;

        return $this;
    }

    /**
     * Get antecedentFamilliaux
     *
     * @return string
     */
    public function getAntecedentFamilliaux()
    {
        return $this->antecedentFamilliaux;
    }

    /**
     * Set signeGeneraux
     *
     * @param string $signeGeneraux
     *
     * @return Rdv
     */
    public function setSigneGeneraux($signeGeneraux)
    {
        $this->signeGeneraux = $signeGeneraux;

        return $this;
    }

    /**
     * Get signeGeneraux
     *
     * @return string
     */
    public function getSigneGeneraux()
    {
        return $this->signeGeneraux;
    }

    /**
     * Set systemeCardiovasculaire
     *
     * @param string $systemeCardiovasculaire
     *
     * @return Rdv
     */
    public function setSystemeCardiovasculaire($systemeCardiovasculaire)
    {
        $this->systemeCardiovasculaire = $systemeCardiovasculaire;

        return $this;
    }

    /**
     * Get systemeCardiovasculaire
     *
     * @return string
     */
    public function getSystemeCardiovasculaire()
    {
        return $this->systemeCardiovasculaire;
    }

    /**
     * Set systemePulmonaire
     *
     * @param string $systemePulmonaire
     *
     * @return Rdv
     */
    public function setSystemePulmonaire($systemePulmonaire)
    {
        $this->systemePulmonaire = $systemePulmonaire;

        return $this;
    }

    /**
     * Get systemePulmonaire
     *
     * @return string
     */
    public function getSystemePulmonaire()
    {
        return $this->systemePulmonaire;
    }

    /**
     * Set systemeHepatogastricoenterologique
     *
     * @param string $systemeHepatogastricoenterologique
     *
     * @return Rdv
     */
    public function setSystemeHepatogastricoenterologique($systemeHepatogastricoenterologique)
    {
        $this->systemeHepatogastricoenterologique = $systemeHepatogastricoenterologique;

        return $this;
    }

    /**
     * Get systemeHepatogastricoenterologique
     *
     * @return string
     */
    public function getSystemeHepatogastricoenterologique()
    {
        return $this->systemeHepatogastricoenterologique;
    }

    /**
     * Set systemeNeurologique
     *
     * @param string $systemeNeurologique
     *
     * @return Rdv
     */
    public function setSystemeNeurologique($systemeNeurologique)
    {
        $this->systemeNeurologique = $systemeNeurologique;

        return $this;
    }

    /**
     * Get systemeNeurologique
     *
     * @return string
     */
    public function getSystemeNeurologique()
    {
        return $this->systemeNeurologique;
    }

    /**
     * Set systemeEndocrinien
     *
     * @param string $systemeEndocrinien
     *
     * @return Rdv
     */
    public function setSystemeEndocrinien($systemeEndocrinien)
    {
        $this->systemeEndocrinien = $systemeEndocrinien;

        return $this;
    }

    /**
     * Get systemeEndocrinien
     *
     * @return string
     */
    public function getSystemeEndocrinien()
    {
        return $this->systemeEndocrinien;
    }

    /**
     * Set systemeHematologique
     *
     * @param string $systemeHematologique
     *
     * @return Rdv
     */
    public function setSystemeHematologique($systemeHematologique)
    {
        $this->systemeHematologique = $systemeHematologique;

        return $this;
    }

    /**
     * Get systemeHematologique
     *
     * @return string
     */
    public function getSystemeHematologique()
    {
        return $this->systemeHematologique;
    }

    /**
     * Set systemeUrogenital
     *
     * @param string $systemeUrogenital
     *
     * @return Rdv
     */
    public function setSystemeUrogenital($systemeUrogenital)
    {
        $this->systemeUrogenital = $systemeUrogenital;

        return $this;
    }

    /**
     * Get systemeUrogenital
     *
     * @return string
     */
    public function getSystemeUrogenital()
    {
        return $this->systemeUrogenital;
    }

    /**
     * Set systemeDermatologique
     *
     * @param string $systemeDermatologique
     *
     * @return Rdv
     */
    public function setSystemeDermatologique($systemeDermatologique)
    {
        $this->systemeDermatologique = $systemeDermatologique;

        return $this;
    }

    /**
     * Get systemeDermatologique
     *
     * @return string
     */
    public function getSystemeDermatologique()
    {
        return $this->systemeDermatologique;
    }

    /**
     * Set systemeLocomoteur
     *
     * @param string $systemeLocomoteur
     *
     * @return Rdv
     */
    public function setSystemeLocomoteur($systemeLocomoteur)
    {
        $this->systemeLocomoteur = $systemeLocomoteur;

        return $this;
    }

    /**
     * Get systemeLocomoteur
     *
     * @return string
     */
    public function getSystemeLocomoteur()
    {
        return $this->systemeLocomoteur;
    }

    /**
     * Set systemeOtorhinolaryngologique
     *
     * @param string $systemeOtorhinolaryngologique
     *
     * @return Rdv
     */
    public function setSystemeOtorhinolaryngologique($systemeOtorhinolaryngologique)
    {
        $this->systemeOtorhinolaryngologique = $systemeOtorhinolaryngologique;

        return $this;
    }

    /**
     * Get systemeOtorhinolaryngologique
     *
     * @return string
     */
    public function getSystemeOtorhinolaryngologique()
    {
        return $this->systemeOtorhinolaryngologique;
    }

    /**
     * Set systemeOphtamologique
     *
     * @param string $systemeOphtamologique
     *
     * @return Rdv
     */
    public function setSystemeOphtamologique($systemeOphtamologique)
    {
        $this->systemeOphtamologique = $systemeOphtamologique;

        return $this;
    }

    /**
     * Get systemeOphtamologique
     *
     * @return string
     */
    public function getSystemeOphtamologique()
    {
        return $this->systemeOphtamologique;
    }

    /**
     * Set etatGeneral
     *
     * @param string $etatGeneral
     *
     * @return Rdv
     */
    public function setEtatGeneral($etatGeneral)
    {
        $this->etatGeneral = $etatGeneral;

        return $this;
    }

    /**
     * Get etatGeneral
     *
     * @return string
     */
    public function getEtatGeneral()
    {
        return $this->etatGeneral;
    }

    /**
     * Set tensionArterielle
     *
     * @param float $tensionArterielle
     *
     * @return Rdv
     */
    public function setTensionArterielle($tensionArterielle)
    {
        $this->tensionArterielle = $tensionArterielle;

        return $this;
    }

    /**
     * Get tensionArterielle
     *
     * @return float
     */
    public function getTensionArterielle()
    {
        return $this->tensionArterielle;
    }

    /**
     * Set temperature
     *
     * @param float $temperature
     *
     * @return Rdv
     */
    public function setTemperature($temperature)
    {
        $this->temperature = $temperature;

        return $this;
    }

    /**
     * Get temperature
     *
     * @return float
     */
    public function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * Set pouls
     *
     * @param integer $pouls
     *
     * @return Rdv
     */
    public function setPouls($pouls)
    {
        $this->pouls = $pouls;

        return $this;
    }

    /**
     * Get pouls
     *
     * @return int
     */
    public function getPouls()
    {
        return $this->pouls;
    }

    /**
     * Set glycemie
     *
     * @param float $glycemie
     *
     * @return Rdv
     */
    public function setGlycemie($glycemie)
    {
        $this->glycemie = $glycemie;

        return $this;
    }

    /**
     * Get glycemie
     *
     * @return float
     */
    public function getGlycemie()
    {
        return $this->glycemie;
    }

    /**
     * Set poids
     *
     * @param float $poids
     *
     * @return Rdv
     */
    public function setPoids($poids)
    {
        $this->poids = $poids;

        return $this;
    }

    /**
     * Get poids
     *
     * @return float
     */
    public function getPoids()
    {
        return $this->poids;
    }

    /**
     * Set iMC
     *
     * @param float $iMC
     *
     * @return Rdv
     */
    public function setIMC($iMC)
    {
        $this->iMC = $iMC;

        return $this;
    }

    /**
     * Get iMC
     *
     * @return float
     */
    public function getIMC()
    {
        return $this->iMC;
    }

    /**
     * Set examenTopographique
     *
     * @param integer $examenTopographique
     *
     * @return Rdv
     */
    public function setExamenTopographique($examenTopographique)
    {
        $this->examenTopographique = $examenTopographique;

        return $this;
    }

    /**
     * Get examenTopographique
     *
     * @return int
     */
    public function getExamenTopographique()
    {
        return $this->examenTopographique;
    }

    /**
     * Set teteOuCou
     *
     * @param string $teteOuCou
     *
     * @return Rdv
     */
    public function setTeteOuCou($teteOuCou)
    {
        $this->teteOuCou = $teteOuCou;

        return $this;
    }

    /**
     * Get teteOuCou
     *
     * @return string
     */
    public function getTeteOuCou()
    {
        return $this->teteOuCou;
    }

    /**
     * Set thorax
     *
     * @param string $thorax
     *
     * @return Rdv
     */
    public function setThorax($thorax)
    {
        $this->thorax = $thorax;

        return $this;
    }

    /**
     * Get thorax
     *
     * @return string
     */
    public function getThorax()
    {
        return $this->thorax;
    }

    /**
     * Set abdomen
     *
     * @param string $abdomen
     *
     * @return Rdv
     */
    public function setAbdomen($abdomen)
    {
        $this->abdomen = $abdomen;

        return $this;
    }

    /**
     * Get abdomen
     *
     * @return string
     */
    public function getAbdomen()
    {
        return $this->abdomen;
    }

    /**
     * Set organeGenitoexterne
     *
     * @param string $organeGenitoexterne
     *
     * @return Rdv
     */
    public function setOrganeGenitoexterne($organeGenitoexterne)
    {
        $this->organeGenitoexterne = $organeGenitoexterne;

        return $this;
    }

    /**
     * Get organeGenitoexterne
     *
     * @return string
     */
    public function getOrganeGenitoexterne()
    {
        return $this->organeGenitoexterne;
    }

    /**
     * Set examenRachis
     *
     * @param string $examenRachis
     *
     * @return Rdv
     */
    public function setExamenRachis($examenRachis)
    {
        $this->examenRachis = $examenRachis;

        return $this;
    }

    /**
     * Get examenRachis
     *
     * @return string
     */
    public function getExamenRachis()
    {
        return $this->examenRachis;
    }

    /**
     * Set examenMembre
     *
     * @param string $examenMembre
     *
     * @return Rdv
     */
    public function setExamenMembre($examenMembre)
    {
        $this->examenMembre = $examenMembre;

        return $this;
    }

    /**
     * Get examenMembre
     *
     * @return string
     */
    public function getExamenMembre()
    {
        return $this->examenMembre;
    }

    /**
     * Set examenNeurologique
     *
     * @param string $examenNeurologique
     *
     * @return Rdv
     */
    public function setExamenNeurologique($examenNeurologique)
    {
        $this->examenNeurologique = $examenNeurologique;

        return $this;
    }

    /**
     * Get examenNeurologique
     *
     * @return string
     */
    public function getExamenNeurologique()
    {
        return $this->examenNeurologique;
    }

    /**
     * Set examenSystematique
     *
     * @param integer $examenSystematique
     *
     * @return Rdv
     */
    public function setExamenSystematique($examenSystematique)
    {
        $this->examenSystematique = $examenSystematique;

        return $this;
    }

    /**
     * Get examenSystematique
     *
     * @return int
     */
    public function getExamenSystematique()
    {
        return $this->examenSystematique;
    }

    /**
     * Set appareilCardiovasculaire
     *
     * @param string $appareilCardiovasculaire
     *
     * @return Rdv
     */
    public function setAppareilCardiovasculaire($appareilCardiovasculaire)
    {
        $this->appareilCardiovasculaire = $appareilCardiovasculaire;

        return $this;
    }

    /**
     * Get appareilCardiovasculaire
     *
     * @return string
     */
    public function getAppareilCardiovasculaire()
    {
        return $this->appareilCardiovasculaire;
    }

    /**
     * Set appareilRespiratoire
     *
     * @param string $appareilRespiratoire
     *
     * @return Rdv
     */
    public function setAppareilRespiratoire($appareilRespiratoire)
    {
        $this->appareilRespiratoire = $appareilRespiratoire;

        return $this;
    }

    /**
     * Get appareilRespiratoire
     *
     * @return string
     */
    public function getAppareilRespiratoire()
    {
        return $this->appareilRespiratoire;
    }

    /**
     * Set appareilDigestif
     *
     * @param string $appareilDigestif
     *
     * @return Rdv
     */
    public function setAppareilDigestif($appareilDigestif)
    {
        $this->appareilDigestif = $appareilDigestif;

        return $this;
    }

    /**
     * Get appareilDigestif
     *
     * @return string
     */
    public function getAppareilDigestif()
    {
        return $this->appareilDigestif;
    }

    /**
     * Set appareilUrogenital
     *
     * @param string $appareilUrogenital
     *
     * @return Rdv
     */
    public function setAppareilUrogenital($appareilUrogenital)
    {
        $this->appareilUrogenital = $appareilUrogenital;

        return $this;
    }

    /**
     * Get appareilUrogenital
     *
     * @return string
     */
    public function getAppareilUrogenital()
    {
        return $this->appareilUrogenital;
    }

    /**
     * Set appareilLocomoteur
     *
     * @param string $appareilLocomoteur
     *
     * @return Rdv
     */
    public function setAppareilLocomoteur($appareilLocomoteur)
    {
        $this->appareilLocomoteur = $appareilLocomoteur;

        return $this;
    }

    /**
     * Get appareilLocomoteur
     *
     * @return string
     */
    public function getAppareilLocomoteur()
    {
        return $this->appareilLocomoteur;
    }

    /**
     * Set systemeSplenoganglionnaire
     *
     * @param string $systemeSplenoganglionnaire
     *
     * @return Rdv
     */
    public function setSystemeSplenoganglionnaire($systemeSplenoganglionnaire)
    {
        $this->systemeSplenoganglionnaire = $systemeSplenoganglionnaire;

        return $this;
    }

    /**
     * Get systemeSplenoganglionnaire
     *
     * @return string
     */
    public function getSystemeSplenoganglionnaire()
    {
        return $this->systemeSplenoganglionnaire;
    }

    /**
     * Set systemeNerveux
     *
     * @param string $systemeNerveux
     *
     * @return Rdv
     */
    public function setSystemeNerveux($systemeNerveux)
    {
        $this->systemeNerveux = $systemeNerveux;

        return $this;
    }

    /**
     * Get systemeNerveux
     *
     * @return string
     */
    public function getSystemeNerveux()
    {
        return $this->systemeNerveux;
    }

    /**
     * Set antecedentContributif
     *
     * @param string $antecedentContributif
     *
     * @return Rdv
     */
    public function setAntecedentContributif($antecedentContributif)
    {
        $this->antecedentContributif = $antecedentContributif;

        return $this;
    }

    /**
     * Get antecedentContributif
     *
     * @return string
     */
    public function getAntecedentContributif()
    {
        return $this->antecedentContributif;
    }

    /**
     * Set resumeSyndomique
     *
     * @param string $resumeSyndomique
     *
     * @return Rdv
     */
    public function setResumeSyndomique($resumeSyndomique)
    {
        $this->resumeSyndomique = $resumeSyndomique;

        return $this;
    }

    /**
     * Get resumeSyndomique
     *
     * @return string
     */
    public function getResumeSyndomique()
    {
        return $this->resumeSyndomique;
    }

    /**
     * Set hypotheseDiagnostics
     *
     * @param string $hypotheseDiagnostics
     *
     * @return Rdv
     */
    public function setHypotheseDiagnostics($hypotheseDiagnostics)
    {
        $this->hypotheseDiagnostics = $hypotheseDiagnostics;

        return $this;
    }

    /**
     * Get hypotheseDiagnostics
     *
     * @return string
     */
    public function getHypotheseDiagnostics()
    {
        return $this->hypotheseDiagnostics;
    }

    /**
     * Set diagnosticDifferentiels
     *
     * @param string $diagnosticDifferentiels
     *
     * @return Rdv
     */
    public function setDiagnosticDifferentiels($diagnosticDifferentiels)
    {
        $this->diagnosticDifferentiels = $diagnosticDifferentiels;

        return $this;
    }

    /**
     * Get diagnosticDifferentiels
     *
     * @return string
     */
    public function getDiagnosticDifferentiels()
    {
        return $this->diagnosticDifferentiels;
    }

    /**
     * Set bilanBiologique
     *
     * @param string $bilanBiologique
     *
     * @return Rdv
     */
    public function setBilanBiologique($bilanBiologique)
    {
        $this->bilanBiologique = $bilanBiologique;

        return $this;
    }

    /**
     * Get bilanBiologique
     *
     * @return string
     */
    public function getBilanBiologique()
    {
        return $this->bilanBiologique;
    }

    /**
     * Set bilanMorphologique
     *
     * @param string $bilanMorphologique
     *
     * @return Rdv
     */
    public function setBilanMorphologique($bilanMorphologique)
    {
        $this->bilanMorphologique = $bilanMorphologique;

        return $this;
    }

    /**
     * Get bilanMorphologique
     *
     * @return string
     */
    public function getBilanMorphologique()
    {
        return $this->bilanMorphologique;
    }

    /**
     * Set refererMedecin
     *
     * @param integer $refererMedecin
     *
     * @return Rdv
     */
    public function setRefererMedecin($refererMedecin)
    {
        $this->refererMedecin = $refererMedecin;

        return $this;
    }

    /**
     * Get refererMedecin
     *
     * @return int
     */
    public function getRefererMedecin()
    {
        return $this->refererMedecin;
    }

    /**
     * Set optionSuivie
     *
     * @param \DateTime $optionSuivie
     *
     * @return Rdv
     */
    public function setOptionSuivie($optionSuivie)
    {
        $this->optionSuivie = $optionSuivie;

        return $this;
    }

    /**
     * Get optionSuivie
     *
     * @return \DateTime
     */
    public function getOptionSuivie()
    {
        return $this->optionSuivie;
    }

    /**
     * Set dateEtape2
     *
     * @param \DateTime $dateEtape2
     *
     * @return Rdv
     */
    public function setDateEtape2($dateEtape2)
    {
        $this->dateEtape2 = $dateEtape2;

        return $this;
    }

    /**
     * Get dateEtape2
     *
     * @return \DateTime
     */
    public function getDateEtape2()
    {
        return $this->dateEtape2;
    }

    /**
     * Set prixExamen
     *
     * @param integer $prixExamen
     *
     * @return Rdv
     */
    public function setPrixExamen($prixExamen)
    {
        $this->prixExamen = $prixExamen;

        return $this;
    }

    /**
     * Get prixExamen
     *
     * @return int
     */
    public function getPrixExamen()
    {
        return $this->prixExamen;
    }

    /**
     * Set dateHeureExamen
     *
     * @param \DateTime $dateHeureExamen
     *
     * @return Rdv
     */
    public function setDateHeureExamen($dateHeureExamen)
    {
        $this->dateHeureExamen = $dateHeureExamen;

        return $this;
    }

    /**
     * Get dateHeureExamen
     *
     * @return \DateTime
     */
    public function getDateHeureExamen()
    {
        return $this->dateHeureExamen;
    }

    /**
     * Set lieuExamen
     *
     * @param string $lieuExamen
     *
     * @return Rdv
     */
    public function setLieuExamen($lieuExamen)
    {
        $this->lieuExamen = $lieuExamen;

        return $this;
    }

    /**
     * Get lieuExamen
     *
     * @return string
     */
    public function getLieuExamen()
    {
        return $this->lieuExamen;
    }

    /**
     * Set dateEtape3
     *
     * @param \DateTime $dateEtape3
     *
     * @return Rdv
     */
    public function setDateEtape3($dateEtape3)
    {
        $this->dateEtape3 = $dateEtape3;

        return $this;
    }

    /**
     * Get dateEtape3
     *
     * @return \DateTime
     */
    public function getDateEtape3()
    {
        return $this->dateEtape3;
    }

    /**
     * Set dateEtape4
     *
     * @param \DateTime $dateEtape4
     *
     * @return Rdv
     */
    public function setDateEtape4($dateEtape4)
    {
        $this->dateEtape4 = $dateEtape4;

        return $this;
    }

    /**
     * Get dateEtape4
     *
     * @return \DateTime
     */
    public function getDateEtape4()
    {
        return $this->dateEtape4;
    }

    /**
     * Set diagnosticFinal
     *
     * @param string $diagnosticFinal
     *
     * @return Rdv
     */
    public function setDiagnosticFinal($diagnosticFinal)
    {
        $this->diagnosticFinal = $diagnosticFinal;

        return $this;
    }

    /**
     * Get diagnosticFinal
     *
     * @return string
     */
    public function getDiagnosticFinal()
    {
        return $this->diagnosticFinal;
    }

    /**
     * Set traitementFinal
     *
     * @param string $traitementFinal
     *
     * @return Rdv
     */
    public function setTraitementFinal($traitementFinal)
    {
        $this->traitementFinal = $traitementFinal;

        return $this;
    }

    /**
     * Get traitementFinal
     *
     * @return string
     */
    public function getTraitementFinal()
    {
        return $this->traitementFinal;
    }

    /**
     * Set dateEtape5
     *
     * @param \DateTime $dateEtape5
     *
     * @return Rdv
     */
    public function setDateEtape5($dateEtape5)
    {
        $this->dateEtape5 = $dateEtape5;

        return $this;
    }

    /**
     * Get dateEtape5
     *
     * @return \DateTime
     */
    public function getDateEtape5()
    {
        return $this->dateEtape5;
    }

    /**
     * Set etat
     *
     * @param integer $etat
     *
     * @return Rdv
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
     * Set evolution
     *
     * @param \Nano\AgoraBundle\Entity\Evolution_maladie $evolution
     *
     * @return Rdv
     */
    public function setEvolution(\Nano\AgoraBundle\Entity\Evolution_maladie $evolution)
    {
        $this->evolution = $evolution;

        return $this;
    }

    /**
     * Get evolution
     *
     * @return \Nano\AgoraBundle\Entity\Evolution_maladie
     */
    public function getEvolution()
    {
        return $this->evolution;
    }

    /**
     * Set examenRdv
     *
     * @param \Nano\AgoraBundle\Entity\Examen_rdv $examenRdv
     *
     * @return Rdv
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

    /**
     * Set ville
     *
     * @param \Nano\AgoraBundle\Entity\Ville $ville
     *
     * @return Rdv
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
     * Set utilisateur
     *
     * @param \Nano\AgoraBundle\Entity\Utilisateur $utilisateur
     *
     * @return Rdv
     */
    public function setUtilisateur(\Nano\AgoraBundle\Entity\Utilisateur $utilisateur)
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    /**
     * Get utilisateur
     *
     * @return \Nano\AgoraBundle\Entity\Utilisateur
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }

    /**
     * Set specialite
     *
     * @param \Nano\AgoraBundle\Entity\Specialite $specialite
     *
     * @return Rdv
     */
    public function setSpecialite(\Nano\AgoraBundle\Entity\Specialite $specialite)
    {
        $this->specialite = $specialite;

        return $this;
    }

    /**
     * Get specialite
     *
     * @return \Nano\AgoraBundle\Entity\Specialite
     */
    public function getSpecialite()
    {
        return $this->specialite;
    }
}
