<?php

namespace Pedagogie\PedagogieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Grades
 *
 * @ORM\Table(name="grades")
 * @ORM\Entity(repositoryClass="Pedagogie\PedagogieBundle\Repository\GradesRepository")
 */
class Grades
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
     * @ORM\Column(name="Grades", type="string", length=255, unique=true)
     */
    private $grades;
	
	/**
     * @var string
     *
     * @ORM\Column(name="Code", type="string", length=255, unique=true)
     */
    private $code;
	
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
    * @ORM\OneToMany(targetEntity="Pedagogie\PedagogieBundle\Entity\Enseignant",mappedBy="grade")
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
     * Set grades
     *
     * @param string $grades
     * @return Grades
     */
    public function setGrades($grades)
    {
        $this->grades = $grades;

        return $this;
    }

    /**
     * Get grades
     *
     * @return string 
     */
    public function getGrades()
    {
        return $this->grades;
    }

    /**
     * Set code
     *
     * @param string $code
     * @return Grades
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
     * Set c
     *
     * @param integer $c
     * @return Grades
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
     * @return Grades
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
     * @return Grades
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
     * Add enseignants
     *
     * @param \Pedagogie\PedagogieBundle\Entity\Enseignant $enseignants
     * @return Grades
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
