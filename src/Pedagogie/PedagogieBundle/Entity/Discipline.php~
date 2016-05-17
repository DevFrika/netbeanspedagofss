<?php

namespace Pedagogie\PedagogieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Discipline
 *
 * @ORM\Table(name="discipline")
 * @ORM\Entity(repositoryClass="Pedagogie\PedagogieBundle\Repository\DisciplineRepository")
 */
class Discipline
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
     * @ORM\Column(name="Discipline", type="string", length=255, unique=true)
     */
    private $discipline;
	
	/**
    * @ORM\OneToMany(targetEntity="Pedagogie\PedagogieBundle\Entity\Matiere", mappedBy="discipline", cascade={"persist"})
    */
    private $matieres;
	
	/**
    * @ORM\ManyToMany(targetEntity="Pedagogie\PedagogieBundle\Entity\Departement",inversedBy="disciplines", cascade={"persist"})
    * @ORM\JoinColumn(nullable=false)
    */
    private $departements ;
	
	/**
    * @ORM\ManyToMany(targetEntity="Pedagogie\PedagogieBundle\Entity\Filiere",inversedBy="disciplines", cascade={"persist"})
    * @ORM\JoinColumn(nullable=false)
    */
    private $filieres ;
	
	/**
    * @ORM\ManyToMany(targetEntity="Pedagogie\PedagogieBundle\Entity\Groupe",inversedBy="disciplines", cascade={"persist"})
    * @ORM\JoinColumn(nullable=false)
    */
    private $groupes ;
	
	
	/**
    * @ORM\ManyToMany(targetEntity="Pedagogie\PedagogieBundle\Entity\Classe",inversedBy="disciplines", cascade={"persist"})
    * @ORM\JoinColumn(nullable=false)
    */
    private $classe ;
	
	/**
    * @ORM\OneToMany(targetEntity="Pedagogie\PedagogieBundle\Entity\Emploi", mappedBy="discipline", cascade={"persist"})
	* @ORM\JoinColumn(nullable=false)
    */
    private $emplois;

	
	/**
    * @ORM\OneToMany(targetEntity="Pedagogie\PedagogieBundle\Entity\Devoir", mappedBy="discipline", cascade={"persist"})
	* @ORM\JoinColumn(nullable=false)
    */
    private $devoirs;
	
	/**
    * @ORM\OneToMany(targetEntity="Pedagogie\PedagogieBundle\Entity\Voeux",mappedBy="discipline", cascade={"persist"})
    * @ORM\JoinColumn(nullable=false)
    */
    private $voeux ;
   
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->matieres = new \Doctrine\Common\Collections\ArrayCollection();
        $this->departements = new \Doctrine\Common\Collections\ArrayCollection();
        $this->filieres = new \Doctrine\Common\Collections\ArrayCollection();
        $this->groupes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->classe = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set discipline
     *
     * @param string $discipline
     * @return Discipline
     */
    public function setDiscipline($discipline)
    {
        $this->discipline = $discipline;

        return $this;
    }

    /**
     * Get discipline
     *
     * @return string 
     */
    public function getDiscipline()
    {
        return $this->discipline;
    }

    /**
     * Add matieres
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Matiere $matieres
     * @return Discipline
     */
    public function addMatiere(\Pedagogie\PedagogieBundle\Entity\Matiere $matieres)
    {
        $this->matieres[] = $matieres;
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
     * Add departements
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Departement $departements
     * @return Discipline
     */
    public function addDepartement(\Pedagogie\PedagogieBundle\Entity\Departement $departements)
    {
        $this->departements[] = $departements;
		$departements->addDiscipline($this);
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
     * @return Discipline
     */
    public function addFiliere(\Pedagogie\PedagogieBundle\Entity\Filiere $filieres)
    {
        $this->filieres[] = $filieres;
		$filieres->addDiscipline($this);
		$allclasses = $filieres->getClasses();
		foreach( $allclasses as $cls )
		{				
			$this->addClasse($cls);				
		}
						
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
     * @return Discipline
     */
    public function addGroupe(\Pedagogie\PedagogieBundle\Entity\Groupe $groupes)
    {
        $this->groupes[] = $groupes;
		$groupes->addDiscipline($this);
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
     * Add classe
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Classe $classe
     * @return Discipline
     */
    public function addClasse(\Pedagogie\PedagogieBundle\Entity\Classe $classe)
    {
        $this->classe[] = $classe;
		$classe->addDiscipline($this);
		$allgroupes = $classe->getGroupes() ;
		foreach( $allgroupes as $grp )
		{				
			$this->addGroupe($grp);				
		}
        return $this;
    }

    /**
     * Remove classe
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Classe $classe
     */
    public function removeClasse(\Pedagogie\PedagogieBundle\Entity\Classe $classe)
    {
        $this->classe->removeElement($classe);
    }

    /**
     * Get classe
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getClasse()
    {
        return $this->classe;
    }

    /**
     * Add emplois
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Emploi $emplois
     * @return Discipline
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
     * Add devoirs
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Devoir $devoirs
     * @return Discipline
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
     * @return Discipline
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
}
