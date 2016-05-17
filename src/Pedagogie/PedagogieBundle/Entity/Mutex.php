<?php

namespace Pedagogie\PedagogieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mutex
 *
 * @ORM\Table(name="mutex")
 * @ORM\Entity(repositoryClass="Pedagogie\PedagogieBundle\Repository\MutexRepository")
 */
class Mutex
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
     * @var string
     *
     * @ORM\Column(name="typemutex", type="string", nullable=true, options={"default":"emploi"})

     */
    private $typemutex;
	
	
	/**
    * @ORM\OneToOne(targetEntity="Pedagogie\PedagogieBundle\Entity\Utilisateur")
    * @ORM\JoinColumn(nullable=false)
    */
    private $utilisateur;
	
	

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
     * Set etat
     *
     * @param integer $etat
     * @return Mutex
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

    
    /**
     * Set utilisateur
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Utilisateur $utilisateur
     * @return Mutex
     */
    public function setUtilisateur(\Pedagogie\PedagogieBundle\Entity\Utilisateur $utilisateur)
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    /**
     * Get utilisateur
     *
     * @return \Pedagogie\PedagogieBundle\Entity\Utilisateur 
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }

    /**
     * Set typemutex
     *
     * @param string $typemutex
     * @return Mutex
     */
    public function setTypemutex($typemutex)
    {
        $this->typemutex = $typemutex;

        return $this;
    }

    /**
     * Get typemutex
     *
     * @return string 
     */
    public function getTypemutex()
    {
        return $this->typemutex;
    }
}
