<?php

namespace Pedagogie\PedagogieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Classe
 *
 * @ORM\Table(name="classe")
 * @ORM\Entity(repositoryClass="Pedagogie\PedagogieBundle\Repository\ClasseRepository")
 */
class Classe
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
     * @ORM\Column(name="Classe", type="string", length=255, unique=true)
     */
    private $classe;
	
	/**
     * @var int
     *
     * @ORM\Column(name="Annee", type="integer")
     */
    private $annee;
	
	/**
    * @ORM\OneToMany(targetEntity="Pedagogie\PedagogieBundle\Entity\Groupe",mappedBy="classe", cascade={"persist"})
    * @ORM\JoinColumn(nullable=false)
    */
    private $groupes;

    
/**
    * @ORM\ManyToOne(targetEntity="Pedagogie\PedagogieBundle\Entity\Departement",inversedBy="classes", cascade={"persist"})
    * @ORM\JoinColumn(nullable=false)
    */
    private $departement;
	
	/**
    * @ORM\ManyToOne(targetEntity="Pedagogie\PedagogieBundle\Entity\Filiere",inversedBy="classes", cascade={"persist"})
    * @ORM\JoinColumn(nullable=false)
    */
    private $filiere;
	
    
     /**
    * @ORM\ManyToMany(targetEntity="Pedagogie\PedagogieBundle\Entity\Discipline", mappedBy="classe", cascade={"persist"})
	* @ORM\JoinColumn(nullable=false)
    */
    private $disciplines;
	
	
	/**
    * @ORM\ManyToMany(targetEntity="Pedagogie\PedagogieBundle\Entity\Matiere",mappedBy="classes", cascade={"persist"})
    * @ORM\JoinColumn(nullable=false)
    */
    private $matieres ;
	
	/**
    * @ORM\OneToMany(targetEntity="Pedagogie\PedagogieBundle\Entity\Emploi", mappedBy="classes", cascade={"persist"})
	* @ORM\JoinColumn(nullable=false)
    */
    private $emplois;
	
	/**
    * @ORM\OneToMany(targetEntity="Pedagogie\PedagogieBundle\Entity\Devoir", mappedBy="classes", cascade={"persist"})
	* @ORM\JoinColumn(nullable=false)
    */
    private $devoirs;
	
	/**
    * @ORM\OneToMany(targetEntity="Pedagogie\PedagogieBundle\Entity\Voeux",mappedBy="classe", cascade={"persist"})
    * @ORM\JoinColumn(nullable=false)
    */
    private $voeux ;
	
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->groupes = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set classe
     *
     * @param string $classe
     * @return Classe
     */
    public function setClasse($classe)
    {
        $this->classe = $classe;

        return $this;
    }

    /**
     * Get classe
     *
     * @return string 
     */
    public function getClasse()
    {
        return $this->classe;
    }

    /**
     * Set annee
     *
     * @param integer $annee
     * @return Classe
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get annee
     *
     * @return integer 
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Add groupes
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Groupe $groupes
     * @return Classe
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
     * Set departement
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Departement $departement
     * @return Classe
     */
    public function setDepartement(\Pedagogie\PedagogieBundle\Entity\Departement $departement)
    {
        $this->departement = $departement;
		$departement->addClass($this);
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
     * @return Classe
     */
    public function setFiliere(\Pedagogie\PedagogieBundle\Entity\Filiere $filiere)
    {
        $this->filiere = $filiere;
		$filiere->addClass($this);
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
     * Add disciplines
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Discipline $disciplines
     * @return Classe
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
     * @return Classe
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
     * @return Classe
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
     * @return Classe
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
     * @return Classe
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
