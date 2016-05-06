<?php

namespace Pedagogie\PedagogieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Emploi
 *
 * @ORM\Table(name="emploi")
 * @ORM\Entity(repositoryClass="Pedagogie\PedagogieBundle\Repository\EmploiRepository")
 */
class Emploi
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
     * @var time
     *
     * @ORM\Column(name="heure_debut", type="time")
     */
	private $heure_debut ;
	
	/**
     * @var time
     *
     * @ORM\Column(name="heure_fin", type="time")
     */
	private $heure_fin ;
	
	/**
    * @ORM\ManyToOne(targetEntity="Pedagogie\PedagogieBundle\Entity\Periode")
    * @ORM\JoinColumn(nullable=false)
    */
	private $periode ;

	/**
    * @ORM\ManyToOne(targetEntity="Pedagogie\PedagogieBundle\Entity\Semestre")
    * @ORM\JoinColumn(nullable=false)
    */
	private $semestre ;

	
	/**
    * @ORM\ManyToOne(targetEntity="Pedagogie\PedagogieBundle\Entity\Departement",inversedBy="emplois")
    * @ORM\JoinColumn(nullable=false)
    */
    private $departements ;
	
	
	/**
    * @ORM\ManyToOne(targetEntity="Pedagogie\PedagogieBundle\Entity\Filiere",inversedBy="emplois")
    * @ORM\JoinColumn(nullable=false)
    */
    private $filieres ;
	
	/**
    * @ORM\ManyToOne(targetEntity="Pedagogie\PedagogieBundle\Entity\Groupe",inversedBy="emplois")
    * @ORM\JoinColumn(nullable=false)
    */
    private $groupes ;
	
	/**
    * @ORM\ManyToOne(targetEntity="Pedagogie\PedagogieBundle\Entity\Classe",inversedBy="emplois")
    * @ORM\JoinColumn(nullable=false)
    */
    private $classes ;
	
	/**
    * @ORM\ManyToOne(targetEntity="Pedagogie\PedagogieBundle\Entity\Discipline",inversedBy="emplois")
    * @ORM\JoinColumn(nullable=false)
    */
    private $discipline ;
	
	/**
    * @ORM\ManyToOne(targetEntity="Pedagogie\PedagogieBundle\Entity\Matiere",inversedBy="emplois")
    * @ORM\JoinColumn(nullable=false)
    */
    private $matiere ;
	
	/**
    * @ORM\ManyToOne(targetEntity="Pedagogie\PedagogieBundle\Entity\Nature")
    * @ORM\JoinColumn(nullable=false)
    */
    private $natures ;
	
	/**
    * @ORM\ManyToOne(targetEntity="Pedagogie\PedagogieBundle\Entity\Enseignant",inversedBy="emplois")
    * @ORM\JoinColumn(nullable=false)
    */
    private $enseignants ;
	
	/**
    * @ORM\ManyToOne(targetEntity="Pedagogie\PedagogieBundle\Entity\Salle",inversedBy="emplois")
    * @ORM\JoinColumn(nullable=false)
    */
    private $salles ;
	
	
	/**
    * @ORM\ManyToOne(targetEntity="Pedagogie\PedagogieBundle\Entity\Jour",inversedBy="emplois")
    * @ORM\JoinColumn(nullable=false)
    */
    private $jours ;
	
	

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
     * Set heure_debut
     *
     * @param \DateTime $heureDebut
     * @return Emploi
     */
    public function setHeureDebut($heureDebut)
    {
        $this->heure_debut = $heureDebut;

        return $this;
    }

    /**
     * Get heure_debut
     *
     * @return \DateTime 
     */
    public function getHeureDebut()
    {
        return $this->heure_debut;
    }

    /**
     * Set heure_fin
     *
     * @param \DateTime $heureFin
     * @return Emploi
     */
    public function setHeureFin($heureFin)
    {
        $this->heure_fin = $heureFin;

        return $this;
    }

    /**
     * Get heure_fin
     *
     * @return \DateTime 
     */
    public function getHeureFin()
    {
        return $this->heure_fin;
    }

    /**
     * Set departements
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Departement $departements
     * @return Emploi
     */
    public function setDepartements(\Pedagogie\PedagogieBundle\Entity\Departement $departements)
    {
        $this->departements = $departements;
		$departements->addEmplois($this);
        return $this;
    }

    /**
     * Get departements
     *
     * @return \Pedagogie\PedagogieBundle\Entity\Departement 
     */
    public function getDepartements()
    {
        return $this->departements;
    }

    /**
     * Set filieres
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Filiere $filieres
     * @return Emploi
     */
    public function setFilieres(\Pedagogie\PedagogieBundle\Entity\Filiere $filieres)
    {
        $this->filieres = $filieres;
		$filieres->addEmplois($this);
        return $this;
    }

    /**
     * Get filieres
     *
     * @return \Pedagogie\PedagogieBundle\Entity\Filiere 
     */
    public function getFilieres()
    {
        return $this->filieres;
    }

    /**
     * Set groupes
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Groupe $groupes
     * @return Emploi
     */
    public function setGroupes(\Pedagogie\PedagogieBundle\Entity\Groupe $groupes)
    {
        $this->groupes = $groupes;
		$groupes->addEmplois($this);
        return $this;
    }

    /**
     * Get groupes
     *
     * @return \Pedagogie\PedagogieBundle\Entity\Groupe 
     */
    public function getGroupes()
    {
        return $this->groupes;
    }

    /**
     * Set classes
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Classe $classes
     * @return Emploi
     */
    public function setClasses(\Pedagogie\PedagogieBundle\Entity\Classe $classes)
    {
        $this->classes = $classes;
		$classes->addEmplois($this);
        return $this;
    }

    /**
     * Get classes
     *
     * @return \Pedagogie\PedagogieBundle\Entity\Classe 
     */
    public function getClasses()
    {
        return $this->classes;
    }

    /**
     * Set discipline
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Discipline $discipline
     * @return Emploi
     */
    public function setDiscipline(\Pedagogie\PedagogieBundle\Entity\Discipline $discipline)
    {
        $this->discipline = $discipline;

        return $this;
    }

    /**
     * Get discipline
     *
     * @return \Pedagogie\PedagogieBundle\Entity\Discipline 
     */
    public function getDiscipline()
    {
        return $this->discipline;
    }

    /**
     * Set matiere
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Matiere $matiere
     * @return Emploi
     */
    public function setMatiere(\Pedagogie\PedagogieBundle\Entity\Matiere $matiere)
    {
        $this->matiere = $matiere;
		$matiere->addEmplois($this);
        return $this;
    }

    /**
     * Get matiere
     *
     * @return \Pedagogie\PedagogieBundle\Entity\Matiere 
     */
    public function getMatiere()
    {
        return $this->matiere;
    }

    /**
     * Set natures
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Nature $natures
     * @return Emploi
     */
    public function setNatures(\Pedagogie\PedagogieBundle\Entity\Nature $natures)
    {
        $this->natures = $natures;

        return $this;
    }

    /**
     * Get natures
     *
     * @return \Pedagogie\PedagogieBundle\Entity\Nature 
     */
    public function getNatures()
    {
        return $this->natures;
    }

    /**
     * Set enseignants
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Enseignant $enseignants
     * @return Emploi
     */
    public function setEnseignants(\Pedagogie\PedagogieBundle\Entity\Enseignant $enseignants)
    {
        $this->enseignants = $enseignants;
		$enseignants->addEmplois($this);
        return $this;
    }

    /**
     * Get enseignants
     *
     * @return \Pedagogie\PedagogieBundle\Entity\Enseignant 
     */
    public function getEnseignants()
    {
        return $this->enseignants;
    }

    /**
     * Set salles
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Salle $salles
     * @return Emploi
     */
    public function setSalles(\Pedagogie\PedagogieBundle\Entity\Salle $salles)
    {
        $this->salles = $salles;
		$salles->addEmplois($this);
        return $this;
    }

    /**
     * Get salles
     *
     * @return \Pedagogie\PedagogieBundle\Entity\Salle 
     */
    public function getSalles()
    {
        return $this->salles;
    }

    /**
     * Set jours
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Jour $jours
     * @return Emploi
     */
    public function setJours(\Pedagogie\PedagogieBundle\Entity\Jour $jours)
    {
        $this->jours = $jours;

        return $this;
    }

    /**
     * Get jours
     *
     * @return \Pedagogie\PedagogieBundle\Entity\Jour 
     */
    public function getJours()
    {
        return $this->jours;
    }

    /**
     * Set periode
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Periode $periode
     * @return Emploi
     */
    public function setPeriode(\Pedagogie\PedagogieBundle\Entity\Periode $periode)
    {
        $this->periode = $periode;

        return $this;
    }

    /**
     * Get periode
     *
     * @return \Pedagogie\PedagogieBundle\Entity\Periode 
     */
    public function getPeriode()
    {
        return $this->periode;
    }

    /**
     * Set semestre
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Semestre $semestre
     * @return Emploi
     */
    public function setSemestre(\Pedagogie\PedagogieBundle\Entity\Semestre $semestre)
    {
        $this->semestre = $semestre;

        return $this;
    }

    /**
     * Get semestre
     *
     * @return \Pedagogie\PedagogieBundle\Entity\Semestre 
     */
    public function getSemestre()
    {
        return $this->semestre;
    }
}
