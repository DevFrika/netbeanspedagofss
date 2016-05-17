<?php

namespace Proxies\__CG__\Pedagogie\PedagogieBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Matiere extends \Pedagogie\PedagogieBundle\Entity\Matiere implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Matiere' . "\0" . 'id', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Matiere' . "\0" . 'matiere', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Matiere' . "\0" . 'codematiere', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Matiere' . "\0" . 'unite', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Matiere' . "\0" . 'discipline', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Matiere' . "\0" . 'departements', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Matiere' . "\0" . 'filieres', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Matiere' . "\0" . 'groupe', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Matiere' . "\0" . 'classes', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Matiere' . "\0" . 'enseignants', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Matiere' . "\0" . 'emplois', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Matiere' . "\0" . 'devoirs', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Matiere' . "\0" . 'voeux', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Matiere' . "\0" . 'natures');
        }

        return array('__isInitialized__', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Matiere' . "\0" . 'id', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Matiere' . "\0" . 'matiere', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Matiere' . "\0" . 'codematiere', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Matiere' . "\0" . 'unite', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Matiere' . "\0" . 'discipline', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Matiere' . "\0" . 'departements', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Matiere' . "\0" . 'filieres', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Matiere' . "\0" . 'groupe', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Matiere' . "\0" . 'classes', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Matiere' . "\0" . 'enseignants', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Matiere' . "\0" . 'emplois', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Matiere' . "\0" . 'devoirs', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Matiere' . "\0" . 'voeux', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Matiere' . "\0" . 'natures');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Matiere $proxy) {
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
    public function setMatiere($matiere)
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
    public function setDiscipline(\Pedagogie\PedagogieBundle\Entity\Discipline $discipline = NULL)
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
    public function addDepartement(\Pedagogie\PedagogieBundle\Entity\Departement $departements)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addDepartement', array($departements));

        return parent::addDepartement($departements);
    }

    /**
     * {@inheritDoc}
     */
    public function removeDepartement(\Pedagogie\PedagogieBundle\Entity\Departement $departements)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeDepartement', array($departements));

        return parent::removeDepartement($departements);
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
    public function addFiliere(\Pedagogie\PedagogieBundle\Entity\Filiere $filieres)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addFiliere', array($filieres));

        return parent::addFiliere($filieres);
    }

    /**
     * {@inheritDoc}
     */
    public function removeFiliere(\Pedagogie\PedagogieBundle\Entity\Filiere $filieres)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeFiliere', array($filieres));

        return parent::removeFiliere($filieres);
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
    public function addGroupe(\Pedagogie\PedagogieBundle\Entity\Groupe $groupe)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addGroupe', array($groupe));

        return parent::addGroupe($groupe);
    }

    /**
     * {@inheritDoc}
     */
    public function removeGroupe(\Pedagogie\PedagogieBundle\Entity\Groupe $groupe)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeGroupe', array($groupe));

        return parent::removeGroupe($groupe);
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
    public function addClass(\Pedagogie\PedagogieBundle\Entity\Classe $classes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addClass', array($classes));

        return parent::addClass($classes);
    }

    /**
     * {@inheritDoc}
     */
    public function removeClass(\Pedagogie\PedagogieBundle\Entity\Classe $classes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeClass', array($classes));

        return parent::removeClass($classes);
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
    public function addEnseignant(\Pedagogie\PedagogieBundle\Entity\Enseignant $enseignants)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addEnseignant', array($enseignants));

        return parent::addEnseignant($enseignants);
    }

    /**
     * {@inheritDoc}
     */
    public function removeEnseignant(\Pedagogie\PedagogieBundle\Entity\Enseignant $enseignants)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeEnseignant', array($enseignants));

        return parent::removeEnseignant($enseignants);
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
    public function addEmplois(\Pedagogie\PedagogieBundle\Entity\Emploi $emplois)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addEmplois', array($emplois));

        return parent::addEmplois($emplois);
    }

    /**
     * {@inheritDoc}
     */
    public function removeEmplois(\Pedagogie\PedagogieBundle\Entity\Emploi $emplois)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeEmplois', array($emplois));

        return parent::removeEmplois($emplois);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmplois()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmplois', array());

        return parent::getEmplois();
    }

    /**
     * {@inheritDoc}
     */
    public function addNature(\Pedagogie\PedagogieBundle\Entity\Nature $natures)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addNature', array($natures));

        return parent::addNature($natures);
    }

    /**
     * {@inheritDoc}
     */
    public function removeNature(\Pedagogie\PedagogieBundle\Entity\Nature $natures)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeNature', array($natures));

        return parent::removeNature($natures);
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
    public function addDevoir(\Pedagogie\PedagogieBundle\Entity\Devoir $devoirs)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addDevoir', array($devoirs));

        return parent::addDevoir($devoirs);
    }

    /**
     * {@inheritDoc}
     */
    public function removeDevoir(\Pedagogie\PedagogieBundle\Entity\Devoir $devoirs)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeDevoir', array($devoirs));

        return parent::removeDevoir($devoirs);
    }

    /**
     * {@inheritDoc}
     */
    public function getDevoirs()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDevoirs', array());

        return parent::getDevoirs();
    }

    /**
     * {@inheritDoc}
     */
    public function setCodematiere($codematiere)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodematiere', array($codematiere));

        return parent::setCodematiere($codematiere);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodematiere()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodematiere', array());

        return parent::getCodematiere();
    }

    /**
     * {@inheritDoc}
     */
    public function setUnite(\Pedagogie\PedagogieBundle\Entity\Unite $unite = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUnite', array($unite));

        return parent::setUnite($unite);
    }

    /**
     * {@inheritDoc}
     */
    public function getUnite()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUnite', array());

        return parent::getUnite();
    }

    /**
     * {@inheritDoc}
     */
    public function addVoeux(\Pedagogie\PedagogieBundle\Entity\Voeux $voeux)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addVoeux', array($voeux));

        return parent::addVoeux($voeux);
    }

    /**
     * {@inheritDoc}
     */
    public function removeVoeux(\Pedagogie\PedagogieBundle\Entity\Voeux $voeux)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeVoeux', array($voeux));

        return parent::removeVoeux($voeux);
    }

    /**
     * {@inheritDoc}
     */
    public function getVoeux()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVoeux', array());

        return parent::getVoeux();
    }

}
