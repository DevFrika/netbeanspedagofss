<?php

namespace Pedagogie\PedagogieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Nature
 *
 * @ORM\Table(name="nature")
 * @ORM\Entity(repositoryClass="Pedagogie\PedagogieBundle\Repository\NatureRepository")
 */
class Nature
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
     * @ORM\Column(name="Nature", type="string", length=255, unique=true)
     */
    private $nature;
	
	/**
     * @var int
     *
     * @ORM\Column(name="C", type="integer")
     */
    private $c;
	
	/**
     * @var int
     *
     * @ORM\Column(name="TD", type="integer")
     */
    private $td;
	
	/**
     * @var int
     *
     * @ORM\Column(name="TP", type="integer")
     */
    private $tp;
	
	/**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=255, unique=true)
     */
    private $description;
	
	
	/**
    * @ORM\ManyToMany(targetEntity="Pedagogie\PedagogieBundle\Entity\Matiere",mappedBy="natures", cascade={"persist"})
    * @ORM\JoinColumn(nullable=false)
    */
    private $matieres ;
	
   
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->matieres = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set nature
     *
     * @param string $nature
     * @return Nature
     */
    public function setNature($nature)
    {
        $this->nature = $nature;

        return $this;
    }

    /**
     * Get nature
     *
     * @return string 
     */
    public function getNature()
    {
        return $this->nature;
    }

    /**
     * Set c
     *
     * @param integer $c
     * @return Nature
     */
    public function setC($c)
    {
        $this->c = $c;

        return $this;
    }

    /**
     * Get c
     *
     * @return integer 
     */
    public function getC()
    {
        return $this->c;
    }

    /**
     * Set td
     *
     * @param integer $td
     * @return Nature
     */
    public function setTd($td)
    {
        $this->td = $td;

        return $this;
    }

    /**
     * Get td
     *
     * @return integer 
     */
    public function getTd()
    {
        return $this->td;
    }

    /**
     * Set tp
     *
     * @param integer $tp
     * @return Nature
     */
    public function setTp($tp)
    {
        $this->tp = $tp;

        return $this;
    }

    /**
     * Get tp
     *
     * @return integer 
     */
    public function getTp()
    {
        return $this->tp;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Nature
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
     * Add matieres
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Matiere $matieres
     * @return Nature
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
}
