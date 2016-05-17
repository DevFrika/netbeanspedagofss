<?php

namespace Pedagogie\PedagogieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transaction
 *
 * @ORM\Table(name="transaction")
 * @ORM\Entity(repositoryClass="Pedagogie\PedagogieBundle\Repository\TransactionRepository")
 */
class Transaction
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
     * @ORM\Column(name="typetransaction", type="string", nullable=true)

     */
    private $typetransaction;
	
	/**
     * @var string
     *
     * @ORM\Column(name="descrtiption", type="string", nullable=true)
     */
    private $descrtiption;
	
	/**
     * @var string
     *
     * @ORM\Column(name="nomuser", type="string", nullable=true)
     */
    private $nomuser;
	
	/**
     * @var datetime
     *
     * @ORM\Column(name="date_transaction", type="datetime")
     */
	private $date_transaction ;
	
	
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
     * Set typetransaction
     *
     * @param string $typetransaction
     * @return Transaction
     */
    public function setTypetransaction($typetransaction)
    {
        $this->typetransaction = $typetransaction;

        return $this;
    }

    /**
     * Get typetransaction
     *
     * @return string 
     */
    public function getTypetransaction()
    {
        return $this->typetransaction;
    }

    /**
     * Set descrtiption
     *
     * @param string $descrtiption
     * @return Transaction
     */
    public function setDescrtiption($descrtiption)
    {
        $this->descrtiption = $descrtiption;

        return $this;
    }

    /**
     * Get descrtiption
     *
     * @return string 
     */
    public function getDescrtiption()
    {
        return $this->descrtiption;
    }

    /**
     * Set date_maj
     *
     * @param \DateTime $dateMaj
     * @return Transaction
     */
    public function setDateMaj($dateMaj)
    {
        $this->date_maj = $dateMaj;

        return $this;
    }

    /**
     * Get date_maj
     *
     * @return \DateTime 
     */
    public function getDateMaj()
    {
        return $this->date_maj;
    }

    /**
     * Set nomuser
     *
     * @param string $nomuser
     * @return Transaction
     */
    public function setNomuser($nomuser)
    {
        $this->nomuser = $nomuser;

        return $this;
    }

    /**
     * Get nomuser
     *
     * @return string 
     */
    public function getNomuser()
    {
        return $this->nomuser;
    }

    /**
     * Set date_transaction
     * @return Transaction
     */
    public function setDateTransaction()
    {
        $this->date_transaction = new \DateTime();

        return $this;
    }

    /**
     * Get date_transaction
     *
     * @return \DateTime 
     */
    public function getDateTransaction()
    {
        return $this->date_transaction;
    }
}
