<?php

namespace Pedagogie\PedagogieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Enseignant
 *
 * @ORM\Table(name="enseignant")
 * @ORM\Entity(repositoryClass="Pedagogie\PedagogieBundle\Repository\EnseignantRepository")
 */
class Enseignant
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", unique=true)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @var string
     *
     * @ORM\Column(name="Enseignant", type="string", length=255, unique=true)
     */
    private $enseignant;
	
	/**
     * @var string
     *
     * @ORM\Column(name="Telephone", type="string", length=255)
     */
    private $telephone;
	
	/**
akh     * @var string
     *
     * @ORM\Column(name="Code", type="string", length=255, unique=true)
     */
    private $code;
	
	/**
    * @ORM\OneToOne(targetEntity="Pedagogie\PedagogieBundle\Entity\Utilisateur")
    * @ORM\JoinColumn(nullable=false)
    */
    private $utilisateur;
	
	/**
    * @ORM\ManyToOne(targetEntity="Pedagogie\PedagogieBundle\Entity\Departement",inversedBy="enseignants")
    * @ORM\JoinColumn(nullable=false)
    */
    private $departement;
	
	/**
    * @ORM\ManyToMany(targetEntity="Pedagogie\PedagogieBundle\Entity\Matiere", mappedBy="enseignants")
    */
    private $matieres ;
	
	/**
    * @ORM\OneToMany(targetEntity="Pedagogie\PedagogieBundle\Entity\Emploi", mappedBy="enseignants")
    */
    private $emplois;
	
	/**
    * @ORM\OneToMany(targetEntity="Pedagogie\PedagogieBundle\Entity\Devoir", mappedBy="enseignants")
    */
    private $devoirs;
	
	/**
    * @ORM\ManyToOne(targetEntity="Pedagogie\PedagogieBundle\Entity\Grades",inversedBy="enseignants")
    * @ORM\JoinColumn(nullable=false)
    */
	private $grade;
	
	/**
    * @ORM\ManyToOne(targetEntity="Pedagogie\PedagogieBundle\Entity\Situations",inversedBy="enseignants")
    * @ORM\JoinColumn(nullable=false)
    */
	private $situation;
	
	/**
    * @ORM\OneToMany(targetEntity="Pedagogie\PedagogieBundle\Entity\Voeux",mappedBy="enseignant", cascade={"persist"})
    * @ORM\JoinColumn(nullable=false)
    */
    private $voeux ;
   
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->matieres = new \Doctrine\Common\Collections\ArrayCollection();
        $this->emplois = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set enseignant
     *
     * @param string $enseignant
     * @return Enseignant
     */
    public function setEnseignant($enseignant)
    {
        $this->enseignant = $enseignant;

        return $this;
    }

    /**
     * Get enseignant
     *
     * @return string 
     */
    public function getEnseignant()
    {
        return $this->enseignant;
    }

    /**
     * Set departement
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Departement $departement
     * @return Enseignant
     */
    public function setDepartement(\Pedagogie\PedagogieBundle\Entity\Departement $departement)
    {
        $this->departement = $departement;
		$departement->addEnseignant($this);
        return $this;
    }

    /**
     * Get departement
     *
     * @return \Pedagogie\PedagogieBundle\Entity\Departement 
     */
    public function getDepartement()
    {
        return $this->departement;
    }

    /**
     * Add matieres
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Matiere $matieres
     * @return Enseignant
     */
    public function addMatiere(\Pedagogie\PedagogieBundle\Entity\Matiere $matieres)
    {
        $this->matieres[] = $matieres;
		$matieres->addEnseignant($this);
        return $this;
    }

    /**
     * Remove matieres
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Matiere $matieres
     */
    public function removeMatiere(\Pedagogie\PedagogieBundle\Entity\Matiere $matieres)
    {
        $this->matieres->removeElement($matieres);
    }

    /**
     * Get matieres
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMatieres()
    {
        return $this->matieres;
    }

    /**
     * Add emplois
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Emploi $emplois
     * @return Enseignant
     */
    public function addEmplois(\Pedagogie\PedagogieBundle\Entity\Emploi $emplois)
    {
        $this->emplois[] = $emplois;
        return $this;
    }

    /**
     * Remove emplois
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Emploi $emplois
     */
    public function removeEmplois(\Pedagogie\PedagogieBundle\Entity\Emploi $emplois)
    {
        $this->emplois->removeElement($emplois);
    }

    /**
     * Get emplois
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEmplois()
    {
        return $this->emplois;
    }

    /**
     * Set grade
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Grades $grade
     * @return Enseignant
     */
    public function setGrade(\Pedagogie\PedagogieBundle\Entity\Grades $grade)
    {
        $this->grade = $grade;
		$grade->addEnseignant($this);
        return $this;
    }

    /**
     * Get grade
     *
     * @return \Pedagogie\PedagogieBundle\Entity\Grades 
     */
    public function getGrade()
    {
        return $this->grade;
    }

    /**
     * Set situation
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Situations $situation
     * @return Enseignant
     */
    public function setSituation(\Pedagogie\PedagogieBundle\Entity\Situations $situation)
    {
        $this->situation = $situation;
		$situation->addEnseignant($this);
        return $this;
    }

    /**
     * Get situation
     *
     * @return \Pedagogie\PedagogieBundle\Entity\Situations 
     */
    public function getSituation()
    {
        return $this->situation;
    }

    /**
     * Set utilisateur
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Utilisateur $utilisateur
     * @return Enseignant
     */
    public function setUtilisateur(\Pedagogie\PedagogieBundle\Entity\Utilisateur $utilisateur)
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    /**
     * Get utilisateur
     *
     * @return \Pedagogie\PedagogieBundle\Entity\Utilisateur 
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }

    /**
     * Add devoirs
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Devoir $devoirs
     * @return Enseignant
     */
    public function addDevoir(\Pedagogie\PedagogieBundle\Entity\Devoir $devoirs)
    {
        $this->devoirs[] = $devoirs;

        return $this;
    }

    /**
     * Remove devoirs
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Devoir $devoirs
     */
    public function removeDevoir(\Pedagogie\PedagogieBundle\Entity\Devoir $devoirs)
    {
        $this->devoirs->removeElement($devoirs);
    }

    /**
     * Get devoirs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDevoirs()
    {
        return $this->devoirs;
    }

    /**
     * Add voeux
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Voeux $voeux
     * @return Enseignant
     */
    public function addVoeux(\Pedagogie\PedagogieBundle\Entity\Voeux $voeux)
    {
        $this->voeux[] = $voeux;

        return $this;
    }

    /**
     * Remove voeux
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Voeux $voeux
     */
    public function removeVoeux(\Pedagogie\PedagogieBundle\Entity\Voeux $voeux)
    {
        $this->voeux->removeElement($voeux);
    }

    /**
     * Get voeux
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getVoeux()
    {
        return $this->voeux;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return Enseignant
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set code
     *
     * @param string $code
     * @return Enseignant
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }
}
