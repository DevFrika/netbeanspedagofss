<?php

namespace Pedagogie\PedagogieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * lieux
 *
 * @ORM\Table(name="lieux")
 * @ORM\Entity(repositoryClass="Pedagogie\PedagogieBundle\Repository\LieuxRepository")
 */
class Lieux
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
     * @ORM\Column(name="Lieux", type="string", length=255, unique=true)
     */
    private $lieux;
	
	/**
     * @var string
     *
     * @ORM\Column(name="Code", type="string", length=255, unique=true)
     */
    private $code;
	
	/**
    * @ORM\OneToMany(targetEntity="Pedagogie\PedagogieBundle\Entity\Salle",mappedBy="lieux", cascade={"persist"})
    * @ORM\JoinColumn(nullable=false)
    */
    private $salles ;
	
	
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->salles = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set lieux
     *
     * @param string $lieux
     * @return Lieux
     */
    public function setLieux($lieux)
    {
        $this->lieux = $lieux;

        return $this;
    }

    /**
     * Get lieux
     *
     * @return string 
     */
    public function getLieux()
    {
        return $this->lieux;
    }

    /**
     * Set code
     *
     * @param string $code
     * @return Lieux
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Add salles
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Salle $salles
     * @return Lieux
     */
    public function addSalle(\Pedagogie\PedagogieBundle\Entity\Salle $salles)
    {
        $this->salles[] = $salles;
		$salles->setLieux($this);
        return $this;
    }

    /**
     * Remove salles
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Salle $salles
     */
    public function removeSalle(\Pedagogie\PedagogieBundle\Entity\Salle $salles)
    {
        $this->salles->removeElement($salles);
    }

    /**
     * Get salles
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSalles()
    {
        return $this->salles;
    }
}
