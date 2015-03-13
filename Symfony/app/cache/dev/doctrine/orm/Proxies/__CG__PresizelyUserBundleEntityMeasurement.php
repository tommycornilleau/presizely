<?php

namespace Proxies\__CG__\Presizely\UserBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Measurement extends \Presizely\UserBundle\Entity\Measurement implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Presizely\\UserBundle\\Entity\\Measurement' . "\0" . 'id', '' . "\0" . 'Presizely\\UserBundle\\Entity\\Measurement' . "\0" . 'tete_tete', '' . "\0" . 'Presizely\\UserBundle\\Entity\\Measurement' . "\0" . 'tete_cou', '' . "\0" . 'Presizely\\UserBundle\\Entity\\Measurement' . "\0" . 'buste_epaule', '' . "\0" . 'Presizely\\UserBundle\\Entity\\Measurement' . "\0" . 'buste_poitrine', '' . "\0" . 'Presizely\\UserBundle\\Entity\\Measurement' . "\0" . 'main_poignet', '' . "\0" . 'Presizely\\UserBundle\\Entity\\Measurement' . "\0" . 'main_main', '' . "\0" . 'Presizely\\UserBundle\\Entity\\Measurement' . "\0" . 'jambe_hanche', '' . "\0" . 'Presizely\\UserBundle\\Entity\\Measurement' . "\0" . 'jambe_fesse', '' . "\0" . 'Presizely\\UserBundle\\Entity\\Measurement' . "\0" . 'pied_longueur', '' . "\0" . 'Presizely\\UserBundle\\Entity\\Measurement' . "\0" . 'pied_largeur');
        }

        return array('__isInitialized__', '' . "\0" . 'Presizely\\UserBundle\\Entity\\Measurement' . "\0" . 'id', '' . "\0" . 'Presizely\\UserBundle\\Entity\\Measurement' . "\0" . 'tete_tete', '' . "\0" . 'Presizely\\UserBundle\\Entity\\Measurement' . "\0" . 'tete_cou', '' . "\0" . 'Presizely\\UserBundle\\Entity\\Measurement' . "\0" . 'buste_epaule', '' . "\0" . 'Presizely\\UserBundle\\Entity\\Measurement' . "\0" . 'buste_poitrine', '' . "\0" . 'Presizely\\UserBundle\\Entity\\Measurement' . "\0" . 'main_poignet', '' . "\0" . 'Presizely\\UserBundle\\Entity\\Measurement' . "\0" . 'main_main', '' . "\0" . 'Presizely\\UserBundle\\Entity\\Measurement' . "\0" . 'jambe_hanche', '' . "\0" . 'Presizely\\UserBundle\\Entity\\Measurement' . "\0" . 'jambe_fesse', '' . "\0" . 'Presizely\\UserBundle\\Entity\\Measurement' . "\0" . 'pied_longueur', '' . "\0" . 'Presizely\\UserBundle\\Entity\\Measurement' . "\0" . 'pied_largeur');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Measurement $proxy) {
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
    public function setTeteTete($teteTete)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTeteTete', array($teteTete));

        return parent::setTeteTete($teteTete);
    }

    /**
     * {@inheritDoc}
     */
    public function getTeteTete()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTeteTete', array());

        return parent::getTeteTete();
    }

    /**
     * {@inheritDoc}
     */
    public function setTeteCou($teteCou)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTeteCou', array($teteCou));

        return parent::setTeteCou($teteCou);
    }

    /**
     * {@inheritDoc}
     */
    public function getTeteCou()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTeteCou', array());

        return parent::getTeteCou();
    }

    /**
     * {@inheritDoc}
     */
    public function setBusteEpaule($busteEpaule)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBusteEpaule', array($busteEpaule));

        return parent::setBusteEpaule($busteEpaule);
    }

    /**
     * {@inheritDoc}
     */
    public function getBusteEpaule()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBusteEpaule', array());

        return parent::getBusteEpaule();
    }

    /**
     * {@inheritDoc}
     */
    public function setBustePoitrine($bustePoitrine)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBustePoitrine', array($bustePoitrine));

        return parent::setBustePoitrine($bustePoitrine);
    }

    /**
     * {@inheritDoc}
     */
    public function getBustePoitrine()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBustePoitrine', array());

        return parent::getBustePoitrine();
    }

    /**
     * {@inheritDoc}
     */
    public function setMainPoignet($mainPoignet)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMainPoignet', array($mainPoignet));

        return parent::setMainPoignet($mainPoignet);
    }

    /**
     * {@inheritDoc}
     */
    public function getMainPoignet()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMainPoignet', array());

        return parent::getMainPoignet();
    }

    /**
     * {@inheritDoc}
     */
    public function setMainMain($mainMain)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMainMain', array($mainMain));

        return parent::setMainMain($mainMain);
    }

    /**
     * {@inheritDoc}
     */
    public function getMainMain()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMainMain', array());

        return parent::getMainMain();
    }

    /**
     * {@inheritDoc}
     */
    public function setJambeHanche($jambeHanche)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setJambeHanche', array($jambeHanche));

        return parent::setJambeHanche($jambeHanche);
    }

    /**
     * {@inheritDoc}
     */
    public function getJambeHanche()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getJambeHanche', array());

        return parent::getJambeHanche();
    }

    /**
     * {@inheritDoc}
     */
    public function setJambeFesse($jambeFesse)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setJambeFesse', array($jambeFesse));

        return parent::setJambeFesse($jambeFesse);
    }

    /**
     * {@inheritDoc}
     */
    public function getJambeFesse()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getJambeFesse', array());

        return parent::getJambeFesse();
    }

    /**
     * {@inheritDoc}
     */
    public function setPiedLongueur($piedLongueur)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPiedLongueur', array($piedLongueur));

        return parent::setPiedLongueur($piedLongueur);
    }

    /**
     * {@inheritDoc}
     */
    public function getPiedLongueur()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPiedLongueur', array());

        return parent::getPiedLongueur();
    }

    /**
     * {@inheritDoc}
     */
    public function setPiedLargeur($piedLargeur)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPiedLargeur', array($piedLargeur));

        return parent::setPiedLargeur($piedLargeur);
    }

    /**
     * {@inheritDoc}
     */
    public function getPiedLargeur()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPiedLargeur', array());

        return parent::getPiedLargeur();
    }

}
