<?php

namespace Proxies\__CG__\Pedagogie\PedagogieBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Jour extends \Pedagogie\PedagogieBundle\Entity\Jour implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Jour' . "\0" . 'id', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Jour' . "\0" . 'jour', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Jour' . "\0" . 'emplois', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Jour' . "\0" . 'devoirs', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Jour' . "\0" . 'voeux');
        }

        return array('__isInitialized__', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Jour' . "\0" . 'id', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Jour' . "\0" . 'jour', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Jour' . "\0" . 'emplois', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Jour' . "\0" . 'devoirs', '' . "\0" . 'Pedagogie\\PedagogieBundle\\Entity\\Jour' . "\0" . 'voeux');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Jour $proxy) {
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
    public function setJour($jour)
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
