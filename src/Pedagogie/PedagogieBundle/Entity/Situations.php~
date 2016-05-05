<?php

namespace Pedagogie\PedagogieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Situations
 *
 * @ORM\Table(name="situations")
 * @ORM\Entity(repositoryClass="Pedagogie\PedagogieBundle\Repository\GradesRepository")
 */
class Situations
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
     * @ORM\Column(name="Situations", type="string", length=255, unique=true)
     */
    private $situations;
	
	
	/**
    * @ORM\OneToMany(targetEntity="Pedagogie\PedagogieBundle\Entity\Enseignant",mappedBy="situation")
    * @ORM\JoinColumn(nullable=false)
    */
	private $enseignants;
	
   
    /**
     * Constructor
     */
    public function __construct()
    {
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
     * Set situations
     *
     * @param string $situations
     * @return Situations
     */
    public function setSituations($situations)
    {
        $this->situations = $situations;

        return $this;
    }

    /**
     * Get situations
     *
     * @return string 
     */
    public function getSituations()
    {
        return $this->situations;
    }

    /**
     * Add enseignants
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Enseignant $enseignants
     * @return Situations
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
}
