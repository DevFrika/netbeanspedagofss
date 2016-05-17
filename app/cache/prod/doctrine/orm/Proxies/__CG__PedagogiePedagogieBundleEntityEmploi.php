<?php

namespace Proxies\__CG__\Pedagogie\PedagogieBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Emploi extends \Pedagogie\PedagogieBundle\Entity\Emploi implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Emploi' . "\0" . 'id', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Emploi' . "\0" . 'heure_debut', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Emploi' . "\0" . 'heure_fin', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Emploi' . "\0" . 'date_maj', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Emploi' . "\0" . 'periode', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Emploi' . "\0" . 'semestre', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Emploi' . "\0" . 'departements', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Emploi' . "\0" . 'filieres', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Emploi' . "\0" . 'groupes', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Emploi' . "\0" . 'classes', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Emploi' . "\0" . 'discipline', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Emploi' . "\0" . 'matiere', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Emploi' . "\0" . 'natures', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Emploi' . "\0" . 'enseignants', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Emploi' . "\0" . 'salles', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Emploi' . "\0" . 'jours');
        }

        return array('__isInitialized__', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Emploi' . "\0" . 'id', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Emploi' . "\0" . 'heure_debut', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Emploi' . "\0" . 'heure_fin', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Emploi' . "\0" . 'date_maj', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Emploi' . "\0" . 'periode', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Emploi' . "\0" . 'semestre', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Emploi' . "\0" . 'departements', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Emploi' . "\0" . 'filieres', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Emploi' . "\0" . 'groupes', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Emploi' . "\0" . 'classes', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Emploi' . "\0" . 'discipline', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Emploi' . "\0" . 'matiere', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Emploi' . "\0" . 'natures', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Emploi' . "\0" . 'enseignants', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Emploi' . "\0" . 'salles', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Emploi' . "\0" . 'jours');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Emploi $proxy) {
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
    public function setDepartements(\Pedagogie\PedagogieBundle\Entity\Departement $departements)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDepartements', array($departements));

        return parent::setDepartements($departements);
    }

    /**
     * {@inheritDoc}
     */
    public function getDepartements()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDepartements', array());

        return parent::getDepartements();
    }

    /**
     * {@inheritDoc}
     */
    public function setFilieres(\Pedagogie\PedagogieBundle\Entity\Filiere $filieres)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFilieres', array($filieres));

        return parent::setFilieres($filieres);
    }

    /**
     * {@inheritDoc}
     */
    public function getFilieres()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFilieres', array());

        return parent::getFilieres();
    }

    /**
     * {@inheritDoc}
     */
    public function setGroupes(\Pedagogie\PedagogieBundle\Entity\Groupe $groupes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGroupes', array($groupes));

        return parent::setGroupes($groupes);
    }

    /**
     * {@inheritDoc}
     */
    public function getGroupes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGroupes', array());

        return parent::getGroupes();
    }

    /**
     * {@inheritDoc}
     */
    public function setClasses(\Pedagogie\PedagogieBundle\Entity\Classe $classes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClasses', array($classes));

        return parent::setClasses($classes);
    }

    /**
     * {@inheritDoc}
     */
    public function getClasses()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClasses', array());

        return parent::getClasses();
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
    public function setNatures(\Pedagogie\PedagogieBundle\Entity\Nature $natures)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNatures', array($natures));

        return parent::setNatures($natures);
    }

    /**
     * {@inheritDoc}
     */
    public function getNatures()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNatures', array());

        return parent::getNatures();
    }

    /**
     * {@inheritDoc}
     */
    public function setEnseignants(\Pedagogie\PedagogieBundle\Entity\Enseignant $enseignants)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEnseignants', array($enseignants));

        return parent::setEnseignants($enseignants);
    }

    /**
     * {@inheritDoc}
     */
    public function getEnseignants()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEnseignants', array());

        return parent::getEnseignants();
    }

    /**
     * {@inheritDoc}
     */
    public function setSalles(\Pedagogie\PedagogieBundle\Entity\Salle $salles)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSalles', array($salles));

        return parent::setSalles($salles);
    }

    /**
     * {@inheritDoc}
     */
    public function getSalles()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalles', array());

        return parent::getSalles();
    }

    /**
     * {@inheritDoc}
     */
    public function setJours(\Pedagogie\PedagogieBundle\Entity\Jour $jours)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setJours', array($jours));

        return parent::setJours($jours);
    }

    /**
     * {@inheritDoc}
     */
    public function getJours()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getJours', array());

        return parent::getJours();
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
    public function setDateMaj()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateMaj', array());

        return parent::setDateMaj();
    }

    /**
     * {@inheritDoc}
     */
    public function getDateMaj()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateMaj', array());

        return parent::getDateMaj();
    }

}
