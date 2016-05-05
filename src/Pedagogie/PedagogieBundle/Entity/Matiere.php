<?php

namespace Pedagogie\PedagogieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Matiere
 *
 * @ORM\Table(name="matiere")
 * @ORM\Entity(repositoryClass="Pedagogie\PedagogieBundle\Repository\MatiereRepository")
 */
class Matiere
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
     * @ORM\Column(name="Matiere", type="string", length=255, unique=true)
     */
    private $matiere;

	
	/**
    * @ORM\ManyToOne(targetEntity="Pedagogie\PedagogieBundle\Entity\Discipline", inversedBy="matieres", cascade={"persist"})
    */
	private $discipline;
	
	
	/**
    * @ORM\ManyToMany(targetEntity="Pedagogie\PedagogieBundle\Entity\Departement",inversedBy="matieres", cascade={"persist"})
    */
    private $departements ;
	
	/**
    * @ORM\ManyToMany(targetEntity="Pedagogie\PedagogieBundle\Entity\Filiere",inversedBy="matieres", cascade={"persist"})
    */
    private $filieres ;
	
	/**
    * @ORM\ManyToMany(targetEntity="Pedagogie\PedagogieBundle\Entity\Groupe", inversedBy="matieres", cascade={"persist"})
    */
    private $groupe ;
	
	
	/**
    * @ORM\ManyToMany(targetEntity="Pedagogie\PedagogieBundle\Entity\Classe", inversedBy="matieres", cascade={"persist"})
    */
    private $classes ;
	
	/**
    * @ORM\ManyToMany(targetEntity="Pedagogie\PedagogieBundle\Entity\Enseignant", inversedBy="matieres", cascade={"persist"})
    */
    private $enseignants ;
	
	/**
    * @ORM\OneToMany(targetEntity="Pedagogie\PedagogieBundle\Entity\Emploi", mappedBy="matiere", cascade={"persist"})
	* 
    */
    private $emplois;
	
	/**
    * @ORM\OneToMany(targetEntity="Pedagogie\PedagogieBundle\Entity\Devoir", mappedBy="matiere", cascade={"persist"})
	* 
    */
    private $devoirs;
	
	/**
    * @ORM\ManyToMany(targetEntity="Pedagogie\PedagogieBundle\Entity\Nature", inversedBy="matieres", cascade={"persist"})
	* @ORM\JoinColumn(nullable=false)
    */
	private $natures;
	
   
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->departements = new \Doctrine\Common\Collections\ArrayCollection();
        $this->filieres = new \Doctrine\Common\Collections\ArrayCollection();
        $this->groupe = new \Doctrine\Common\Collections\ArrayCollection();
        $this->classes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->enseignants = new \Doctrine\Common\Collections\ArrayCollection();
        $this->emplois = new \Doctrine\Common\Collections\ArrayCollection();
        $this->natures = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set matiere
     *
     * @param string $matiere
     * @return Matiere
     */
    public function setMatiere($matiere)
    {
        $this->matiere = $matiere;

        return $this;
    }

    /**
     * Get matiere
     *
     * @return string 
     */
    public function getMatiere()
    {
        return $this->matiere;
    }

    /**
     * Set discipline
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Discipline $discipline
     * @return Matiere
     */
    public function setDiscipline(\Pedagogie\PedagogieBundle\Entity\Discipline $discipline = null)
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
     * Add departements
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Departement $departements
     * @return Matiere
     */
    public function addDepartement(\Pedagogie\PedagogieBundle\Entity\Departement $departements)
    {
        $this->departements[] = $departements;
		$departements->addMatiere($this);
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
     * @return Matiere
     */
    public function addFiliere(\Pedagogie\PedagogieBundle\Entity\Filiere $filieres)
    {
        $this->filieres[] = $filieres;
		$filieres->addMatiere($this);
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
     * Add groupe
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Groupe $groupe
     * @return Matiere
     */
    public function addGroupe(\Pedagogie\PedagogieBundle\Entity\Groupe $groupe)
    {
        $this->groupe[] = $groupe;
		$groupe->addMatiere($this);
        return $this;
    }

    /**
     * Remove groupe
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Groupe $groupe
     */
    public function removeGroupe(\Pedagogie\PedagogieBundle\Entity\Groupe $groupe)
    {
        $this->groupe->removeElement($groupe);
    }

    /**
     * Get groupe
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getGroupe()
    {
        return $this->groupe;
    }

    /**
     * Add classes
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Classe $classes
     * @return Matiere
     */
    public function addClass(\Pedagogie\PedagogieBundle\Entity\Classe $classes)
    {
        $this->classes[] = $classes;
		$classes->addMatiere($this);
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
     * Add enseignants
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Enseignant $enseignants
     * @return Matiere
     */
    public function addEnseignant(\Pedagogie\PedagogieBundle\Entity\Enseignant $enseignants)
    {
        $this->enseignants[] = $enseignants;
		
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

    /**
     * Add emplois
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Emploi $emplois
     * @return Matiere
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
     * Add natures
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Nature $natures
     * @return Matiere
     */
    public function addNature(\Pedagogie\PedagogieBundle\Entity\Nature $natures)
    {
        $this->natures[] = $natures;
		$natures->addMatiere($this);
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
     * Add devoirs
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Devoir $devoirs
     * @return Matiere
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
}
