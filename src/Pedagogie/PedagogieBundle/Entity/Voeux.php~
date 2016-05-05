<?php

namespace Pedagogie\PedagogieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Voeux
 *
 * @ORM\Table(name="voeux")
 * @ORM\Entity(repositoryClass="Pedagogie\PedagogieBundle\Repository\VoeuxRepository")
 */
class Voeux
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
     *
     * @ORM\Column(name="etat", type="integer", nullable=true, options={"default":0})

     */
    private $etat;
	
	/**
    * @ORM\ManyToOne(targetEntity="Pedagogie\PedagogieBundle\Entity\Enseignant",inversedBy="voeux")
    * @ORM\JoinColumn(nullable=false)
    */
    private $enseignant ;
	
	

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
     * Set enseignant
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Enseignant $enseignant
     * @return Voeux
     */
    public function setEnseignant(\Pedagogie\PedagogieBundle\Entity\Enseignant $enseignant)
    {
        $this->enseignant = $enseignant;

        return $this;
    }

    /**
     * Get enseignant
     *
     * @return \Pedagogie\PedagogieBundle\Entity\Enseignant 
     */
    public function getEnseignant()
    {
        return $this->enseignant;
    }

    /**
     * Set etat
     *
     * @param integer $etat
     * @return Voeux
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return integer 
     */
    public function getEtat()
    {
        return $this->etat;
    }
}
