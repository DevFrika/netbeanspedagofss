<?php

namespace Proxies\__CG__\Pedagogie\PedagogieBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Voeux extends \Pedagogie\PedagogieBundle\Entity\Voeux implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Voeux' . "\0" . 'id', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Voeux' . "\0" . 'etat', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Voeux' . "\0" . 'enseignant', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Voeux' . "\0" . 'heure_debut', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Voeux' . "\0" . 'heure_fin', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Voeux' . "\0" . 'periode', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Voeux' . "\0" . 'semestre', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Voeux' . "\0" . 'departement', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Voeux' . "\0" . 'filiere', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Voeux' . "\0" . 'groupe', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Voeux' . "\0" . 'classe', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Voeux' . "\0" . 'discipline', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Voeux' . "\0" . 'matiere', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Voeux' . "\0" . 'nature', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Voeux' . "\0" . 'salle', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Voeux' . "\0" . 'jour');
        }

        return array('__isInitialized__', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Voeux' . "\0" . 'id', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Voeux' . "\0" . 'etat', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Voeux' . "\0" . 'enseignant', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Voeux' . "\0" . 'heure_debut', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Voeux' . "\0" . 'heure_fin', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Voeux' . "\0" . 'periode', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Voeux' . "\0" . 'semestre', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Voeux' . "\0" . 'departement', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Voeux' . "\0" . 'filiere', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Voeux' . "\0" . 'groupe', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Voeux' . "\0" . 'classe', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Voeux' . "\0" . 'discipline', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Voeux' . "\0" . 'matiere', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Voeux' . "\0" . 'nature', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Voeux' . "\0" . 'salle', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Voeux' . "\0" . 'jour');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Voeux $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setEnseignant(\Pedagogie\PedagogieBundle\Entity\Enseignant $enseignant)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEnseignant', array($enseignant));

        return parent::setEnseignant($enseignant);
    }

    /**
     * {@inheritDoc}
     */
    public function getEnseignant()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEnseignant', array());

        return parent::getEnseignant();
    }

    /**
     * {@inheritDoc}
     */
    public function setEtat($etat)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEtat', array($etat));

        return parent::setEtat($etat);
    }

    /**
     * {@inheritDoc}
     */
    public function getEtat()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEtat', array());

        return parent::getEtat();
    }

    /**
     * {@inheritDoc}
     */
    public function setHeureDebut($heureDebut)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHeureDebut', array($heureDebut));

        return parent::setHeureDebut($heureDebut);
    }

    /**
     * {@inheritDoc}
     */
    public function getHeureDebut()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHeureDebut', array());

        return parent::getHeureDebut();
    }

    /**
     * {@inheritDoc}
     */
    public function setHeureFin($heureFin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHeureFin', array($heureFin));

        return parent::setHeureFin($heureFin);
    }

    /**
     * {@inheritDoc}
     */
    public function getHeureFin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHeureFin', array());

        return parent::getHeureFin();
    }

    /**
     * {@inheritDoc}
     */
    public function setPeriode(\Pedagogie\PedagogieBundle\Entity\Periode $periode)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPeriode', array($periode));

        return parent::setPeriode($periode);
    }

    /**
     * {@inheritDoc}
     */
    public function getPeriode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPeriode', array());

        return parent::getPeriode();
    }

    /**
     * {@inheritDoc}
     */
    public function setSemestre(\Pedagogie\PedagogieBundle\Entity\Semestre $semestre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSemestre', array($semestre));

        return parent::setSemestre($semestre);
    }

    /**
     * {@inheritDoc}
     */
    public function getSemestre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSemestre', array());

        return parent::getSemestre();
    }

    /**
     * {@inheritDoc}
     */
    public function setDepartement(\Pedagogie\PedagogieBundle\Entity\Departement $departement)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDepartement', array($departement));

        return parent::setDepartement($departement);
    }

    /**
     * {@inheritDoc}
     */
    public function getDepartement()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDepartement', array());

        return parent::getDepartement();
    }

    /**
     * {@inheritDoc}
     */
    public function setFiliere(\Pedagogie\PedagogieBundle\Entity\Filiere $filiere)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFiliere', array($filiere));

        return parent::setFiliere($filiere);
    }

    /**
     * {@inheritDoc}
     */
    public function getFiliere()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFiliere', array());

        return parent::getFiliere();
    }

    /**
     * {@inheritDoc}
     */
    public function setGroupe(\Pedagogie\PedagogieBundle\Entity\Groupe $groupe)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGroupe', array($groupe));

        return parent::setGroupe($groupe);
    }

    /**
     * {@inheritDoc}
     */
    public function getGroupe()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGroupe', array());

        return parent::getGroupe();
    }

    /**
     * {@inheritDoc}
     */
    public function setClasse(\Pedagogie\PedagogieBundle\Entity\Classe $classe)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClasse', array($classe));

        return parent::setClasse($classe);
    }

    /**
     * {@inheritDoc}
     */
    public function getClasse()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClasse', array());

        return parent::getClasse();
    }

    /**
     * {@inheritDoc}
     */
    public function setDiscipline(\Pedagogie\PedagogieBundle\Entity\Discipline $discipline)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDiscipline', array($discipline));

        return parent::setDiscipline($discipline);
    }

    /**
     * {@inheritDoc}
     */
    public function getDiscipline()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDiscipline', array());

        return parent::getDiscipline();
    }

    /**
     * {@inheritDoc}
     */
    public function setMatiere(\Pedagogie\PedagogieBundle\Entity\Matiere $matiere)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMatiere', array($matiere));

        return parent::setMatiere($matiere);
    }

    /**
     * {@inheritDoc}
     */
    public function getMatiere()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMatiere', array());

        return parent::getMatiere();
    }

    /**
     * {@inheritDoc}
     */
    public function setNature(\Pedagogie\PedagogieBundle\Entity\Nature $nature)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNature', array($nature));

        return parent::setNature($nature);
    }

    /**
     * {@inheritDoc}
     */
    public function getNature()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNature', array());

        return parent::getNature();
    }

    /**
     * {@inheritDoc}
     */
    public function setSalle(\Pedagogie\PedagogieBundle\Entity\Salle $salle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSalle', array($salle));

        return parent::setSalle($salle);
    }

    /**
     * {@inheritDoc}
     */
    public function getSalle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalle', array());

        return parent::getSalle();
    }

    /**
     * {@inheritDoc}
     */
    public function setJour(\Pedagogie\PedagogieBundle\Entity\Jour $jour)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setJour', array($jour));

        return parent::setJour($jour);
    }

    /**
     * {@inheritDoc}
     */
    public function getJour()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getJour', array());

        return parent::getJour();
    }

}