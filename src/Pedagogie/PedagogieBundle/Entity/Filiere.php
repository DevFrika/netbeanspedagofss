<?php

namespace Pedagogie\PedagogieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Filiere
 *
 * @ORM\Table(name="filiere")
 * @ORM\Entity(repositoryClass="Pedagogie\PedagogieBundle\Repository\FiliereRepository")
 */
class Filiere
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
     * @ORM\Column(name="Filiere", type="string", length=255, unique=true)
     */
    private $filiere;
	
	/**
     * @var int
     *
     * @ORM\Column(name="nbEtudiant", type="string", length=255, nullable=true, options={"default":0})
     */
	private $nb_etudiant;
	
	
	/**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=255, unique=true)
     */
    private $description;

    
    /**
    * @ORM\ManyToOne(targetEntity="Pedagogie\PedagogieBundle\Entity\Departement",inversedBy="filieres", cascade={"persist"})
    * @ORM\JoinColumn(nullable=false)
    */
    private $departement;

    
     /**
    * @ORM\ManyToMany(targetEntity="Pedagogie\PedagogieBundle\Entity\Discipline", mappedBy="filieres", cascade={"persist"})
	* @ORM\JoinColumn(nullable=false)
    */
    private $disciplines;
	
	/**
    * @ORM\OneToMany(targetEntity="Pedagogie\PedagogieBundle\Entity\Groupe",mappedBy="filiere", cascade={"persist"})
    * @ORM\JoinColumn(nullable=false)
    */
    private $groupes ;
	
	/**
    * @ORM\OneToMany(targetEntity="Pedagogie\PedagogieBundle\Entity\Classe",mappedBy="filiere", cascade={"persist"})
    * @ORM\JoinColumn(nullable=false)
    */
    private $classes ;
	
	/**
    * @ORM\ManyToMany(targetEntity="Pedagogie\PedagogieBundle\Entity\Matiere",mappedBy="filieres", cascade={"persist"})
    * @ORM\JoinColumn(nullable=false)
    */
    private $matieres ;
	
	/**
    * @ORM\OneToMany(targetEntity="Pedagogie\PedagogieBundle\Entity\Emploi", mappedBy="filieres", cascade={"persist"})
	* @ORM\JoinColumn(nullable=false)
    */
    private $emplois;
	
	/**
    * @ORM\OneToMany(targetEntity="Pedagogie\PedagogieBundle\Entity\Devoir", mappedBy="filieres", cascade={"persist"})
	* @ORM\JoinColumn(nullable=false)
    */
    private $devoirs;
	
	/**
    * @ORM\OneToMany(targetEntity="Pedagogie\PedagogieBundle\Entity\Voeux",mappedBy="filiere", cascade={"persist"})
    * @ORM\JoinColumn(nullable=false)
    */
    private $voeux ;
    
    
  
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->disciplines = new \Doctrine\Common\Collections\ArrayCollection();
        $this->groupes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->classes = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set filiere
     *
     * @param string $filiere
     * @return Filiere
     */
    public function setFiliere($filiere)
    {
        $this->filiere = $filiere;

        return $this;
    }

    /**
     * Get filiere
     *
     * @return string 
     */
    public function getFiliere()
    {
        return $this->filiere;
    }

    /**
     * Set departement
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Departement $departement
     * @return Filiere
     */
    public function setDepartement(\Pedagogie\PedagogieBundle\Entity\Departement $departement)
    {
        $this->departement = $departement;
		$departement->addFiliere($this);
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
     * Add disciplines
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Discipline $disciplines
     * @return Filiere
     */
    public function addDiscipline(\Pedagogie\PedagogieBundle\Entity\Discipline $disciplines)
    {
        $this->disciplines[] = $disciplines;
        return $this;
    }

    /**
     * Remove disciplines
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Discipline $disciplines
     */
    public function removeDiscipline(\Pedagogie\PedagogieBundle\Entity\Discipline $disciplines)
    {
        $this->disciplines->removeElement($disciplines);
    }

    /**
     * Get disciplines
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDisciplines()
    {
        return $this->disciplines;
    }

    /**
     * Add groupes
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Groupe $groupes
     * @return Filiere
     */
    public function addGroupe(\Pedagogie\PedagogieBundle\Entity\Groupe $groupes)
    {
        $this->groupes[] = $groupes;
		
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
     * @return Filiere
     */
    public function addClass(\Pedagogie\PedagogieBundle\Entity\Classe $classes)
    {
        $this->classes[] = $classes;
		
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
     * Add matieres
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Matiere $matieres
     * @return Filiere
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
     * Add emplois
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Emploi $emplois
     * @return Filiere
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
     * Set description
     *
     * @param string $description
     * @return Filiere
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
     * Add devoirs
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Devoir $devoirs
     * @return Filiere
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
     * Set nb_etudiant
     *
     * @param string $nbEtudiant
     * @return Filiere
     */
    public function setNbEtudiant($nbEtudiant)
    {
        $this->nb_etudiant = $nbEtudiant;

        return $this;
    }

    /**
     * Get nb_etudiant
     *
     * @return string 
     */
    public function getNbEtudiant()
    {
        return $this->nb_etudiant;
    }

    /**
     * Add voeux
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Voeux $voeux
     * @return Filiere
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
