<?php

namespace Pedagogie\PedagogieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Salle
 *
 * @ORM\Table(name="salle")
 * @ORM\Entity(repositoryClass="Pedagogie\PedagogieBundle\Repository\SalleRepository")
 */
class Salle
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
     * @ORM\Column(name="Capacite", type="integer")
     */
    private $capacite;
	
	/**
     * @var int
     * @ORM\Column(name="Audio", type="integer")
     */
    private $audio;
	
	/**
     * @var int
     * @ORM\Column(name="Retro", type="integer")
     */
    private $retro;
	
    /**
     * @var string
     *
     * @ORM\Column(name="Salle", type="string", length=255, unique=true)
     */
    private $salle;
	
	
	/**
    * @ORM\ManyToOne(targetEntity="Pedagogie\PedagogieBundle\Entity\Lieux",inversedBy="salles", cascade={"persist"})
    * @ORM\JoinColumn(nullable=false)
    */
    private $lieux ;
	
	/**
    * @ORM\ManyToMany(targetEntity="Pedagogie\PedagogieBundle\Entity\Emploi",mappedBy="salles")
    * @ORM\JoinColumn(nullable=false)
    */
    private $emplois ;
	
	/**
    * @ORM\ManyToMany(targetEntity="Pedagogie\PedagogieBundle\Entity\Devoir",mappedBy="salles")
    * @ORM\JoinColumn(nullable=false)
    */
    private $devoirs ;
	
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->emplois = new \Doctrine\Common\Collections\ArrayCollection();
		$this->setAudio(0);
		$this->setCapacite(0);
		$this->setRetro(0);
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
     * Set capacite
     *
     * @param integer $capacite
     * @return Salle
     */
    public function setCapacite($capacite)
    {
        $this->capacite = $capacite;

        return $this;
    }

    /**
     * Get capacite
     *
     * @return integer 
     */
    public function getCapacite()
    {
        return $this->capacite;
    }

    /**
     * Set audio
     *
     * @param integer $audio
     * @return Salle
     */
    public function setAudio($audio)
    {
        $this->audio = $audio;

        return $this;
    }

    /**
     * Get audio
     *
     * @return integer 
     */
    public function getAudio()
    {
        return $this->audio;
    }

    /**
     * Set retro
     *
     * @param integer $retro
     * @return Salle
     */
    public function setRetro($retro)
    {
        $this->retro = $retro;

        return $this;
    }

    /**
     * Get retro
     *
     * @return integer 
     */
    public function getRetro()
    {
        return $this->retro;
    }

    /**
     * Set salle
     *
     * @param string $salle
     * @return Salle
     */
    public function setSalle($salle)
    {
        $this->salle = $salle;

        return $this;
    }

    /**
     * Get salle
     *
     * @return string 
     */
    public function getSalle()
    {
        return $this->salle;
    }

    /**
     * Set lieux
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Lieux $lieux
     * @return Salle
     */
    public function setLieux(\Pedagogie\PedagogieBundle\Entity\Lieux $lieux)
    {
        $this->lieux = $lieux;

        return $this;
    }

    /**
     * Get lieux
     *
     * @return \Pedagogie\PedagogieBundle\Entity\Lieux 
     */
    public function getLieux()
    {
        return $this->lieux;
    }

    /**
     * Add emplois
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Emploi $emplois
     * @return Salle
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
     * @return Salle
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
