<?php

namespace Proxies\__CG__\MainBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Magasin extends \MainBundle\Entity\Magasin implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = [];



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
            return ['__isInitialized__', '' . "\0" . 'MainBundle\\Entity\\Magasin' . "\0" . 'id', '' . "\0" . 'MainBundle\\Entity\\Magasin' . "\0" . 'name', '' . "\0" . 'MainBundle\\Entity\\Magasin' . "\0" . 'produit', '' . "\0" . 'MainBundle\\Entity\\Magasin' . "\0" . 'owner', '' . "\0" . 'MainBundle\\Entity\\Magasin' . "\0" . 'address', '' . "\0" . 'MainBundle\\Entity\\Magasin' . "\0" . 'altitude', '' . "\0" . 'MainBundle\\Entity\\Magasin' . "\0" . 'longitude', '' . "\0" . 'MainBundle\\Entity\\Magasin' . "\0" . 'description', '' . "\0" . 'MainBundle\\Entity\\Magasin' . "\0" . 'imageFile', '' . "\0" . 'MainBundle\\Entity\\Magasin' . "\0" . 'imageName', '' . "\0" . 'MainBundle\\Entity\\Magasin' . "\0" . 'updatedAt'];
        }

        return ['__isInitialized__', '' . "\0" . 'MainBundle\\Entity\\Magasin' . "\0" . 'id', '' . "\0" . 'MainBundle\\Entity\\Magasin' . "\0" . 'name', '' . "\0" . 'MainBundle\\Entity\\Magasin' . "\0" . 'produit', '' . "\0" . 'MainBundle\\Entity\\Magasin' . "\0" . 'owner', '' . "\0" . 'MainBundle\\Entity\\Magasin' . "\0" . 'address', '' . "\0" . 'MainBundle\\Entity\\Magasin' . "\0" . 'altitude', '' . "\0" . 'MainBundle\\Entity\\Magasin' . "\0" . 'longitude', '' . "\0" . 'MainBundle\\Entity\\Magasin' . "\0" . 'description', '' . "\0" . 'MainBundle\\Entity\\Magasin' . "\0" . 'imageFile', '' . "\0" . 'MainBundle\\Entity\\Magasin' . "\0" . 'imageName', '' . "\0" . 'MainBundle\\Entity\\Magasin' . "\0" . 'updatedAt'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Magasin $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
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
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setAddress($address)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAddress', [$address]);

        return parent::setAddress($address);
    }

    /**
     * {@inheritDoc}
     */
    public function getAddress()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAddress', []);

        return parent::getAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setImageFile(\Symfony\Component\HttpFoundation\File\File $image = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImageFile', [$image]);

        return parent::setImageFile($image);
    }

    /**
     * {@inheritDoc}
     */
    public function getAltitude()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAltitude', []);

        return parent::getAltitude();
    }

    /**
     * {@inheritDoc}
     */
    public function setAltitude($altitude)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAltitude', [$altitude]);

        return parent::setAltitude($altitude);
    }

    /**
     * {@inheritDoc}
     */
    public function getLongitude()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLongitude', []);

        return parent::getLongitude();
    }

    /**
     * {@inheritDoc}
     */
    public function setLongitude($longitude)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLongitude', [$longitude]);

        return parent::setLongitude($longitude);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', []);

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt($updatedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', [$updatedAt]);

        return parent::setUpdatedAt($updatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getImageFile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImageFile', []);

        return parent::getImageFile();
    }

    /**
     * {@inheritDoc}
     */
    public function setImageName($imageName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImageName', [$imageName]);

        return parent::setImageName($imageName);
    }

    /**
     * {@inheritDoc}
     */
    public function getImageName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImageName', []);

        return parent::getImageName();
    }

    /**
     * {@inheritDoc}
     */
    public function addProduit(\MainBundle\Entity\Product $produit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addProduit', [$produit]);

        return parent::addProduit($produit);
    }

    /**
     * {@inheritDoc}
     */
    public function removeProduit(\MainBundle\Entity\Product $produit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeProduit', [$produit]);

        return parent::removeProduit($produit);
    }

    /**
     * {@inheritDoc}
     */
    public function getProduit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProduit', []);

        return parent::getProduit();
    }

    /**
     * {@inheritDoc}
     */
    public function setOwner(\MainBundle\Entity\User $owner = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOwner', [$owner]);

        return parent::setOwner($owner);
    }

    /**
     * {@inheritDoc}
     */
    public function getOwner()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOwner', []);

        return parent::getOwner();
    }

}
