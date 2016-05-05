<?php

namespace Pedagogie\PedagogieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Echantillon
 *
 * @ORM\Table(name="echantillon")
 * @ORM\Entity(repositoryClass="Pedagogie\PedagogieBundle\Repository\EchantillonRepository")
 */
class Echantillon
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
     * @ORM\Column(name="Echantillon", type="string", length=255, unique=true)
     */
    private $echantillon;

    

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
     * Set echantillon
     *
     * @param string $echantillon
     * @return Echantillon
     */
    public function setEchantillon($echantillon)
    {
        $this->echantillon = $echantillon;

        return $this;
    }

    /**
     * Get echantillon
     *
     * @return string 
     */
    public function getEchantillon()
    {
        return $this->echantillon;
    }
}
