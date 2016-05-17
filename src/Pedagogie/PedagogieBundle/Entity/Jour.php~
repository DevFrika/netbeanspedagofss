<?php

namespace Pedagogie\PedagogieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Jour
 *
 * @ORM\Table(name="jour")
 * @ORM\Entity(repositoryClass="Pedagogie\PedagogieBundle\Repository\JourRepository")
 */
class Jour
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
     * @ORM\Column(name="Jour", type="string", length=255, unique=true)
     */
    private $jour;
	
	/**
    * @ORM\OneToMany(targetEntity="Pedagogie\PedagogieBundle\Entity\Emploi",mappedBy="jours")
    * @ORM\JoinColumn(nullable=false)
    */
    private $emplois ;
	
	
	/**
    * @ORM\OneToMany(targetEntity="Pedagogie\PedagogieBundle\Entity\Devoir",mappedBy="jours")
    * @ORM\JoinColumn(nullable=false)
    */
    private $devoirs ;
	
	/**
    * @ORM\OneToMany(targetEntity="Pedagogie\PedagogieBundle\Entity\Voeux",mappedBy="jour")
    * @ORM\JoinColumn(nullable=false)
    */
    private $voeux ;
	
    /**
     * Constructor
     */
    public function __construct()
    {
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
     * Set jour
     *
     * @param string $jour
     * @return Jour
     */
    public function setJour($jour)
    {
        $this->jour = $jour;

        return $this;
    }

    /**
     * Get jour
     *
     * @return string 
     */
    public function getJour()
    {
        return $this->jour;
    }

    /**
     * Add emplois
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Emploi $emplois
     * @return Jour
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
     * @return Jour
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
     * @return Jour
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
