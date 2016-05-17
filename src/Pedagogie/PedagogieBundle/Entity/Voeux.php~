<?php

namespace Pedagogie\PedagogieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Voeux
 *
 * @ORM\Table(name="voeux")
 * @ORM\Entity(repositoryClass="Pedagogie\PedagogieBundle\Repository\VoeuxRepository")
 */
class Voeux
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
     * @var int
     *
     * @ORM\Column(name="etat", type="integer")
     */
    private $etat;
	
	/**
    * @ORM\ManyToOne(targetEntity="Pedagogie\PedagogieBundle\Entity\Enseignant",inversedBy="voeux")
    * @ORM\JoinColumn(nullable=false)
    */
    private $enseignant ;
	
	/**
     * @var datetime
     *
     * @ORM\Column(name="heure_debut", type="datetime")
     */
	private $heure_debut ;
	
	/**
     * @var datetime
     *
     * @ORM\Column(name="heure_fin", type="datetime")
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
    * @ORM\ManyToOne(targetEntity="Pedagogie\PedagogieBundle\Entity\Departement",inversedBy="voeux")
    * @ORM\JoinColumn(nullable=false)
    */
    private $departement ;
	
	
	/**
    * @ORM\ManyToOne(targetEntity="Pedagogie\PedagogieBundle\Entity\Filiere",inversedBy="voeux")
    * @ORM\JoinColumn(nullable=false)
    */
    private $filiere ;
	
	/**
    * @ORM\ManyToOne(targetEntity="Pedagogie\PedagogieBundle\Entity\Groupe",inversedBy="voeux")
    * @ORM\JoinColumn(nullable=false)
    */
    private $groupe ;
	
	/**
    * @ORM\ManyToOne(targetEntity="Pedagogie\PedagogieBundle\Entity\Classe",inversedBy="voeux")
    * @ORM\JoinColumn(nullable=false)
    */
    private $classe ;
	
	/**
    * @ORM\ManyToOne(targetEntity="Pedagogie\PedagogieBundle\Entity\Discipline",inversedBy="voeux")
    * @ORM\JoinColumn(nullable=false)
    */
    private $discipline ;
	
	/**
    * @ORM\ManyToOne(targetEntity="Pedagogie\PedagogieBundle\Entity\Matiere",inversedBy="voeux")
    * @ORM\JoinColumn(nullable=false)
    */
    private $matiere ;
	
	/**
    * @ORM\ManyToOne(targetEntity="Pedagogie\PedagogieBundle\Entity\Nature")
    * @ORM\JoinColumn(nullable=false)
    */
    private $nature ;
	
	
	
	/**
    * @ORM\ManyToOne(targetEntity="Pedagogie\PedagogieBundle\Entity\Salle",inversedBy="voeux")
    * @ORM\JoinColumn(nullable=false)
    */
    private $salle ;
	
	
	/**
    * @ORM\ManyToOne(targetEntity="Pedagogie\PedagogieBundle\Entity\Jour",inversedBy="voeux")
    * @ORM\JoinColumn(nullable=false)
    */
    private $jour ;
	
	
	
	

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
     * @param \Pedagogie\PedagogieBundle\Entity\Enseignant $enseignant
     * @return Voeux
     */
    public function setEnseignant(\Pedagogie\PedagogieBundle\Entity\Enseignant $enseignant)
    {
        $this->enseignant = $enseignant;

        return $this;
    }

    /**
     * Get enseignant
     *
     * @return \Pedagogie\PedagogieBundle\Entity\Enseignant 
     */
    public function getEnseignant()
    {
        return $this->enseignant;
    }

    /**
     * Set etat
     *
     * @param integer $etat
     * @return Voeux
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return integer 
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set heure_debut
     *
     * @param \DateTime $heureDebut
     * @return Voeux
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
     * @return Voeux
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
     * Set periode
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Periode $periode
     * @return Voeux
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
     * @return Voeux
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

    /**
     * Set departement
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Departement $departement
     * @return Voeux
     */
    public function setDepartement(\Pedagogie\PedagogieBundle\Entity\Departement $departement)
    {
        $this->departement = $departement;

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
     * Set filiere
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Filiere $filiere
     * @return Voeux
     */
    public function setFiliere(\Pedagogie\PedagogieBundle\Entity\Filiere $filiere)
    {
        $this->filiere = $filiere;

        return $this;
    }

    /**
     * Get filiere
     *
     * @return \Pedagogie\PedagogieBundle\Entity\Filiere 
     */
    public function getFiliere()
    {
        return $this->filiere;
    }

    /**
     * Set groupe
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Groupe $groupe
     * @return Voeux
     */
    public function setGroupe(\Pedagogie\PedagogieBundle\Entity\Groupe $groupe)
    {
        $this->groupe = $groupe;

        return $this;
    }

    /**
     * Get groupe
     *
     * @return \Pedagogie\PedagogieBundle\Entity\Groupe 
     */
    public function getGroupe()
    {
        return $this->groupe;
    }

    /**
     * Set classe
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Classe $classe
     * @return Voeux
     */
    public function setClasse(\Pedagogie\PedagogieBundle\Entity\Classe $classe)
    {
        $this->classe = $classe;

        return $this;
    }

    /**
     * Get classe
     *
     * @return \Pedagogie\PedagogieBundle\Entity\Classe 
     */
    public function getClasse()
    {
        return $this->classe;
    }

    /**
     * Set discipline
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Discipline $discipline
     * @return Voeux
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
     * @return Voeux
     */
    public function setMatiere(\Pedagogie\PedagogieBundle\Entity\Matiere $matiere)
    {
        $this->matiere = $matiere;

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
     * Set nature
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Nature $nature
     * @return Voeux
     */
    public function setNature(\Pedagogie\PedagogieBundle\Entity\Nature $nature)
    {
        $this->nature = $nature;

        return $this;
    }

    /**
     * Get nature
     *
     * @return \Pedagogie\PedagogieBundle\Entity\Nature 
     */
    public function getNature()
    {
        return $this->nature;
    }

    /**
     * Set salle
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Salle $salle
     * @return Voeux
     */
    public function setSalle(\Pedagogie\PedagogieBundle\Entity\Salle $salle)
    {
        $this->salle = $salle;

        return $this;
    }

    /**
     * Get salle
     *
     * @return \Pedagogie\PedagogieBundle\Entity\Salle 
     */
    public function getSalle()
    {
        return $this->salle;
    }

    /**
     * Set jour
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Jour $jour
     * @return Voeux
     */
    public function setJour(\Pedagogie\PedagogieBundle\Entity\Jour $jour)
    {
        $this->jour = $jour;

        return $this;
    }

    /**
     * Get jour
     *
     * @return \Pedagogie\PedagogieBundle\Entity\Jour 
     */
    public function getJour()
    {
        return $this->jour;
    }
}
