<?php

namespace Pedagogie\PedagogieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Groupe
 *
 * @ORM\Table(name="groupe")
 * @ORM\Entity(repositoryClass="Pedagogie\PedagogieBundle\Repository\GroupeRepository")
 */
class Groupe
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
     * @ORM\Column(name="Groupe", type="string", length=255, unique=true)
     */
    private $groupe;
	
	
	
	/**
    * @ORM\ManyToOne(targetEntity="Pedagogie\PedagogieBundle\Entity\Departement",inversedBy="groupes", cascade={"persist"})
    * @ORM\JoinColumn(nullable=false)
    */
    private $departement;
	
	/**
    * @ORM\ManyToOne(targetEntity="Pedagogie\PedagogieBundle\Entity\Filiere",inversedBy="groupes", cascade={"persist"})
    * @ORM\JoinColumn(nullable=false)
    */
    private $filiere;

    
    /**
    * @ORM\ManyToMany(targetEntity="Pedagogie\PedagogieBundle\Entity\Discipline", mappedBy="groupes", cascade={"persist"})
	* @ORM\JoinColumn(nullable=false)
    */
    private $disciplines;
	
	
	/**
    * @ORM\ManyToOne(targetEntity="Pedagogie\PedagogieBundle\Entity\Classe",inversedBy="groupes", cascade={"persist"})
    * @ORM\JoinColumn(nullable=false)
    */
    private $classe ;
	
	/**
    * @ORM\ManyToMany(targetEntity="Pedagogie\PedagogieBundle\Entity\Matiere",mappedBy="groupe", cascade={"persist"})
    * @ORM\JoinColumn(nullable=false)
    */
    private $matieres ;
	
	/**
    * @ORM\ManyToMany(targetEntity="Pedagogie\PedagogieBundle\Entity\Emploi", mappedBy="groupes", cascade={"persist"})
	* @ORM\JoinColumn(nullable=false)
    */
    private $emplois;

	
	/**
    * @ORM\ManyToMany(targetEntity="Pedagogie\PedagogieBundle\Entity\Devoir", mappedBy="groupes", cascade={"persist"})
	* @ORM\JoinColumn(nullable=false)
    */
    private $devoirs;
   
    /**
     * Constructor
     */
    public function __construct()
    {
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
     * Set groupe
     *
     * @param string $groupe
     * @return Groupe
     */
    public function setGroupe($groupe)
    {
        $this->groupe = $groupe;

        return $this;
    }

    /**
     * Get groupe
     *
     * @return string 
     */
    public function getGroupe()
    {
        return $this->groupe;
    }

    /**
     * Set departement
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Departement $departement
     * @return Groupe
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
     * @return Groupe
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
     * Add disciplines
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Discipline $disciplines
     * @return Groupe
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
     * Set classe
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Classe $classe
     * @return Groupe
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
     * Add matieres
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Matiere $matieres
     * @return Groupe
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
     * @return Groupe
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
     * @return Groupe
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
