<?php

namespace Pedagogie\PedagogieBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur")
 * @ORM\Entity(repositoryClass="Pedagogie\PedagogieBundle\Repository\UtilisateurRepository")
 */
class Utilisateur
{
	
	/**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=255, unique=true)
     * @ORM\Id
     */
    private $id;


    /**
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=255)
     */
    private $nom;
	
	/**
     * @var string
     *
     * @ORM\Column(name="Prenom", type="string", length=255)
     */
    private $prenom;
	
	/**
     * @var string
     *
     * @ORM\Column(name="Email", type="string", length=255, unique=true)
     */
    private $email;
	
	/**
     * @var string
     *
     * @ORM\Column(name="Username", type="string", length=255, unique=true)
     */
    private $username;
	
	/**
     * @var string
     *
     * @ORM\Column(name="Password", type="string", length=255)
     */
    private $password;
	
	/**
     * @var string
     *
     * @ORM\Column(name="Typeuser", type="string", length=255)
     */
    private $typeuser;
	
	/**
     * @var date
     *
     * @ORM\Column(name="Createtime", type="date")
     */
    private $createtime;
	
	/**
     * @var string
     *
     * @ORM\Column(name="Userdetails", type="integer", length=255, nullable=true, options={"default":0})
     */
    private $userdetails;
	
	

	public function __construct()
	{
		$this->setUserdetails(-1);
	}
   

    /**
     * Set nom
     *
     * @param string $nom
     * @return Utilisateur
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Utilisateur
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Utilisateur
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return Utilisateur
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Utilisateur
     */
    public function setPassword($password)
    {
		
        $this->password = password_hash($password, PASSWORD_DEFAULT) ;

        return $this; 
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set typeuser
     *
     * @param string $typeuser
     * @return Utilisateur
     */
    public function setTypeuser($typeuser)
    {
        $this->typeuser = $typeuser;

        return $this;
    }

    /**
     * Get typeuser
     *
     * @return string 
     */
    public function getTypeuser()
    {
        return $this->typeuser;
    }

    /**
     * Set createtime
     *
     * @return Utilisateur
     */
    public function setCreatetime()
    {
        $this->createtime = new \DateTime();
        return $this;
    }

    /**
     * Get createtime
     *
     * @return \DateTime 
     */
    public function getCreatetime()
    {
        return $this->createtime;
    }

    /**
     * Set userdetails
     *
     * @param integer $userdetails
     * @return Utilisateur
     */
    public function setUserdetails($userdetails)
    {
        $this->userdetails = $userdetails;

        return $this;
    }

    /**
     * Get userdetails
     *
     * @return integer 
     */
    public function getUserdetails()
    {
        return $this->userdetails;
    }

    /**
     * Set id
     *
     * @param string $id
     * @return Utilisateur
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return string 
     */
    public function getId()
    {
        return $this->id;
    }
}
