<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Product extends \App\Entity\Product implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'nom', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'image', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'description', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'category', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'lignePaniers', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'isPublished'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'nom', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'image', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'description', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'category', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'lignePaniers', '' . "\0" . 'App\\Entity\\Product' . "\0" . 'isPublished'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Product $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
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
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
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
    public function getNom(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', []);

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setNom(string $nom): \App\Entity\Product
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', [$nom]);

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getImage(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImage', []);

        return parent::getImage();
    }

    /**
     * {@inheritDoc}
     */
    public function setImage(string $image): \App\Entity\Product
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImage', [$image]);

        return parent::setImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription(string $description): \App\Entity\Product
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategory(): ?\App\Entity\Category
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategory', []);

        return parent::getCategory();
    }

    /**
     * {@inheritDoc}
     */
    public function setCategory(?\App\Entity\Category $category): \App\Entity\Product
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCategory', [$category]);

        return parent::setCategory($category);
    }

    /**
     * {@inheritDoc}
     */
    public function getLignePaniers(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLignePaniers', []);

        return parent::getLignePaniers();
    }

    /**
     * {@inheritDoc}
     */
    public function addLignePanier(\App\Entity\LignePanier $lignePanier): \App\Entity\Product
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addLignePanier', [$lignePanier]);

        return parent::addLignePanier($lignePanier);
    }

    /**
     * {@inheritDoc}
     */
    public function removeLignePanier(\App\Entity\LignePanier $lignePanier): \App\Entity\Product
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeLignePanier', [$lignePanier]);

        return parent::removeLignePanier($lignePanier);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsPublished(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsPublished', []);

        return parent::getIsPublished();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsPublished(bool $isPublished): \App\Entity\Product
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsPublished', [$isPublished]);

        return parent::setIsPublished($isPublished);
    }

}
