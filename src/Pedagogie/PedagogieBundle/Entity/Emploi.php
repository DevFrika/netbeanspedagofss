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
    * @ORM\ManyToMany(targetEntity="Pedagogie\PedagogieBundle\Entity\Departement",inversedBy="emplois")
    * @ORM\JoinColumn(nullable=false)
    */
    private $departements ;
	
	
	/**
    * @ORM\ManyToMany(targetEntity="Pedagogie\PedagogieBundle\Entity\Filiere",inversedBy="emplois")
    * @ORM\JoinColumn(nullable=false)
    */
    private $filieres ;
	
	/**
    * @ORM\ManyToMany(targetEntity="Pedagogie\PedagogieBundle\Entity\Groupe",inversedBy="emplois")
    * @ORM\JoinColumn(nullable=false)
    */
    private $groupes ;
	
	/**
    * @ORM\ManyToMany(targetEntity="Pedagogie\PedagogieBundle\Entity\Classe",inversedBy="emplois")
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
    * @ORM\ManyToMany(targetEntity="Pedagogie\PedagogieBundle\Entity\Nature")
    * @ORM\JoinColumn(nullable=false)
    */
    private $natures ;
	
	/**
    * @ORM\ManyToMany(targetEntity="Pedagogie\PedagogieBundle\Entity\Enseignant",inversedBy="emplois")
    * @ORM\JoinColumn(nullable=false)
    */
    private $enseignants ;
	
	/**
    * @ORM\ManyToMany(targetEntity="Pedagogie\PedagogieBundle\Entity\Salle",inversedBy="emplois")
    * @ORM\JoinColumn(nullable=false)
    */
    private $salles ;
	
	
	/**
    * @ORM\ManyToMany(targetEntity="Pedagogie\PedagogieBundle\Entity\Jour",inversedBy="emplois")
    * @ORM\JoinColumn(nullable=false)
    */
    private $jours ;
	

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->salles = new \Doctrine\Common\Collections\ArrayCollection();
        $this->jours = new \Doctrine\Common\Collections\ArrayCollection();
		$this->departements = new \Doctrine\Common\Collections\ArrayCollection();
        $this->filieres = new \Doctrine\Common\Collections\ArrayCollection();
		$this->classes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->groupes = new \Doctrine\Common\Collections\ArrayCollection();
		$this->enseignants = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add salles
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Salle $salles
     * @return Emploi
     */
    public function addSalle(\Pedagogie\PedagogieBundle\Entity\Salle $salles)
    {
        $this->salles[] = $salles;
		$salles->addEmplois($this);
        return $this;
    }

    /**
     * Remove salles
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Salle $salles
     */
    public function removeSalle(\Pedagogie\PedagogieBundle\Entity\Salle $salles)
    {
        $this->salles->removeElement($salles);
    }

    /**
     * Get salles
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSalles()
    {
        return $this->salles;
    }

    /**
     * Add jours
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Jour $jours
     * @return Emploi
     */
    public function addJour(\Pedagogie\PedagogieBundle\Entity\Jour $jours)
    {
        $this->jours[] = $jours;
		$jours->addEmplois($this);
        return $this;
    }

    /**
     * Remove jours
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Jour $jours
     */
    public function removeJour(\Pedagogie\PedagogieBundle\Entity\Jour $jours)
    {
        $this->jours->removeElement($jours);
    }

    /**
     * Get jours
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getJours()
    {
        return $this->jours;
    }

    /**
     * Add departements
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Departement $departements
     * @return Emploi
     */
    public function addDepartement(\Pedagogie\PedagogieBundle\Entity\Departement $departements)
    {
        $this->departements[] = $departements;
		$departements->addEmplois($this);
        return $this;
    }

    /**
     * Remove departements
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Departement $departements
     */
    public function removeDepartement(\Pedagogie\PedagogieBundle\Entity\Departement $departements)
    {
        $this->departements->removeElement($departements);
    }

    /**
     * Get departements
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDepartements()
    {
        return $this->departements;
    }

    /**
     * Add filieres
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Filiere $filieres
     * @return Emploi
     */
    public function addFiliere(\Pedagogie\PedagogieBundle\Entity\Filiere $filieres)
    {
        $this->filieres[] = $filieres;
		$filieres->addEmplois($this);
        return $this;
    }

    /**
     * Remove filieres
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Filiere $filieres
     */
    public function removeFiliere(\Pedagogie\PedagogieBundle\Entity\Filiere $filieres)
    {
        $this->filieres->removeElement($filieres);
    }

    /**
     * Get filieres
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFilieres()
    {
        return $this->filieres;
    }

    /**
     * Add groupes
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Groupe $groupes
     * @return Emploi
     */
    public function addGroupe(\Pedagogie\PedagogieBundle\Entity\Groupe $groupes)
    {
        $this->groupes[] = $groupes;
		$groupes->addEmplois($this);
        return $this;
    }

    /**
     * Remove groupes
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Groupe $groupes
     */
    public function removeGroupe(\Pedagogie\PedagogieBundle\Entity\Groupe $groupes)
    {
        $this->groupes->removeElement($groupes);
    }

    /**
     * Get groupes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGroupes()
    {
        return $this->groupes;
    }

    /**
     * Add classes
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Classe $classes
     * @return Emploi
     */
    public function addClass(\Pedagogie\PedagogieBundle\Entity\Classe $classes)
    {
        $this->classes[] = $classes;
		$classes->addEmplois($this);
        return $this;
    }

    /**
     * Remove classes
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Classe $classes
     */
    public function removeClass(\Pedagogie\PedagogieBundle\Entity\Classe $classes)
    {
        $this->classes->removeElement($classes);
    }

    /**
     * Get classes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getClasses()
    {
        return $this->classes;
    }

    /**
     * Add natures
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Nature $natures
     * @return Emploi
     */
    public function addNature(\Pedagogie\PedagogieBundle\Entity\Nature $natures)
    {
        $this->natures[] = $natures;
		
        return $this;
    }

    /**
     * Remove natures
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Nature $natures
     */
    public function removeNature(\Pedagogie\PedagogieBundle\Entity\Nature $natures)
    {
        $this->natures->removeElement($natures);
    }

    /**
     * Get natures
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNatures()
    {
        return $this->natures;
    }

    /**
     * Add enseignants
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Enseignant $enseignants
     * @return Emploi
     */
    public function addEnseignant(\Pedagogie\PedagogieBundle\Entity\Enseignant $enseignants)
    {
        $this->enseignants[] = $enseignants;
		$enseignants->addEmplois($this);
        return $this;
    }

    /**
     * Remove enseignants
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Enseignant $enseignants
     */
    public function removeEnseignant(\Pedagogie\PedagogieBundle\Entity\Enseignant $enseignants)
    {
        $this->enseignants->removeElement($enseignants);
    }

    /**
     * Get enseignants
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEnseignants()
    {
        return $this->enseignants;
    }
}
