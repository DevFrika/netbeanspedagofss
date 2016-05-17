<?php

namespace Pedagogie\PedagogieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Departement
 *
 * @ORM\Table(name="departement")
 * @ORM\Entity(repositoryClass="Pedagogie\PedagogieBundle\Repository\DepartementRepository")
 */
class Departement
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
     * @ORM\Column(name="Departement", type="string", length=255, unique=true)
     */
    private $departement;

	
	/**
    * @ORM\OneToOne(targetEntity="Pedagogie\PedagogieBundle\Entity\Enseignant",mappedBy="departement")
	* @ORM\JoinColumn(nullable=false)
    */
    private $directeur ;
	
	/**
    * @ORM\OneToMany(targetEntity="Pedagogie\PedagogieBundle\Entity\Filiere",mappedBy="departement")
    * @ORM\JoinColumn(nullable=false)
    */
    private $filieres ;
	
	/**
    * @ORM\OneToMany(targetEntity="Pedagogie\PedagogieBundle\Entity\Enseignant",mappedBy="departement", cascade={"persist"})
    * @ORM\JoinColumn(nullable=false)
    */
    private $enseignants ;

    
	/**
    * @ORM\OneToMany(targetEntity="Pedagogie\PedagogieBundle\Entity\Groupe",mappedBy="departement", cascade={"persist"})
    * @ORM\JoinColumn(nullable=false)
    */
    private $groupes ;
	
	/**
    * @ORM\OneToMany(targetEntity="Pedagogie\PedagogieBundle\Entity\Classe",mappedBy="departement", cascade={"persist"})
    * @ORM\JoinColumn(nullable=false)
    */
    private $classes ;
	
	/**
    * @ORM\ManyToMany(targetEntity="Pedagogie\PedagogieBundle\Entity\Discipline", mappedBy="departements", cascade={"persist"})
	* @ORM\JoinColumn(nullable=false)
    */
    private $disciplines;
	
	
	/**
    * @ORM\ManyToMany(targetEntity="Pedagogie\PedagogieBundle\Entity\Matiere",mappedBy="departements", cascade={"persist"})
    * @ORM\JoinColumn(nullable=false)
    */
    private $matieres ;
    
	/**
    * @ORM\OneToMany(targetEntity="Pedagogie\PedagogieBundle\Entity\Emploi", mappedBy="departements", cascade={"persist"})
	* @ORM\JoinColumn(nullable=false)
    */
    private $emplois;
	
	/**
    * @ORM\OneToMany(targetEntity="Pedagogie\PedagogieBundle\Entity\Devoir", mappedBy="departements", cascade={"persist"})
	* @ORM\JoinColumn(nullable=false)
    */
    private $devoirs;
	
	/**
    * @ORM\OneToMany(targetEntity="Pedagogie\PedagogieBundle\Entity\Voeux",mappedBy="departement", cascade={"persist"})
    * @ORM\JoinColumn(nullable=false)
    */
    private $voeux ;
	
	
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->filieres = new \Doctrine\Common\Collections\ArrayCollection();
        $this->enseignants = new \Doctrine\Common\Collections\ArrayCollection();
        $this->groupes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->classes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->disciplines = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set departement
     *
     * @param string $departement
     * @return Departement
     */
    public function setDepartement($departement)
    {
        $this->departement = $departement;

        return $this;
    }

    /**
     * Get departement
     *
     * @return string 
     */
    public function getDepartement()
    {
        return $this->departement;
    }

    /**
     * Add filieres
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Filiere $filieres
     * @return Departement
     */
    public function addFiliere(\Pedagogie\PedagogieBundle\Entity\Filiere $filieres)
    {
        $this->filieres[] = $filieres;
		
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
     * Add enseignants
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Enseignant $enseignants
     * @return Departement
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
     * Add groupes
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Groupe $groupes
     * @return Departement
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
     * @return Departement
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
     * Add disciplines
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Discipline $disciplines
     * @return Departement
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
     * Add matieres
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Matiere $matieres
     * @return Departement
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
     * @return Departement
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
     * @return Departement
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
     * Set directeur
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Enseignant $directeur
     * @return Departement
     */
    public function setDirecteur(\Pedagogie\PedagogieBundle\Entity\Enseignant $directeur)
    {
        $this->directeur = $directeur;

        return $this;
    }

    /**
     * Get directeur
     *
     * @return \Pedagogie\PedagogieBundle\Entity\Enseignant 
     */
    public function getDirecteur()
    {
        return $this->directeur;
    }

    /**
     * Add voeux
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Voeux $voeux
     * @return Departement
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
