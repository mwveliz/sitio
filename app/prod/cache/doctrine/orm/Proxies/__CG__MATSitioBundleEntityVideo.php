<?php

namespace Proxies\__CG__\MAT\SitioBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Video extends \MAT\SitioBundle\Entity\Video implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'MAT\\SitioBundle\\Entity\\Video' . "\0" . 'descripcion', '' . "\0" . 'MAT\\SitioBundle\\Entity\\Video' . "\0" . 'fechaHora', '' . "\0" . 'MAT\\SitioBundle\\Entity\\Video' . "\0" . 'visible', '' . "\0" . 'MAT\\SitioBundle\\Entity\\Video' . "\0" . 'titulo', '' . "\0" . 'MAT\\SitioBundle\\Entity\\Video' . "\0" . 'autor', '' . "\0" . 'MAT\\SitioBundle\\Entity\\Video' . "\0" . 'ruta', '' . "\0" . 'MAT\\SitioBundle\\Entity\\Video' . "\0" . 'id', '' . "\0" . 'MAT\\SitioBundle\\Entity\\Video' . "\0" . 'idUsuario');
        }

        return array('__isInitialized__', '' . "\0" . 'MAT\\SitioBundle\\Entity\\Video' . "\0" . 'descripcion', '' . "\0" . 'MAT\\SitioBundle\\Entity\\Video' . "\0" . 'fechaHora', '' . "\0" . 'MAT\\SitioBundle\\Entity\\Video' . "\0" . 'visible', '' . "\0" . 'MAT\\SitioBundle\\Entity\\Video' . "\0" . 'titulo', '' . "\0" . 'MAT\\SitioBundle\\Entity\\Video' . "\0" . 'autor', '' . "\0" . 'MAT\\SitioBundle\\Entity\\Video' . "\0" . 'ruta', '' . "\0" . 'MAT\\SitioBundle\\Entity\\Video' . "\0" . 'id', '' . "\0" . 'MAT\\SitioBundle\\Entity\\Video' . "\0" . 'idUsuario');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Video $proxy) {
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
    public function setDescripcion($descripcion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescripcion', array($descripcion));

        return parent::setDescripcion($descripcion);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescripcion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescripcion', array());

        return parent::getDescripcion();
    }

    /**
     * {@inheritDoc}
     */
    public function setFechaHora($fechaHora)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFechaHora', array($fechaHora));

        return parent::setFechaHora($fechaHora);
    }

    /**
     * {@inheritDoc}
     */
    public function getFechaHora()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFechaHora', array());

        return parent::getFechaHora();
    }

    /**
     * {@inheritDoc}
     */
    public function setVisible($visible)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVisible', array($visible));

        return parent::setVisible($visible);
    }

    /**
     * {@inheritDoc}
     */
    public function getVisible()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVisible', array());

        return parent::getVisible();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitulo($titulo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitulo', array($titulo));

        return parent::setTitulo($titulo);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitulo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitulo', array());

        return parent::getTitulo();
    }

    /**
     * {@inheritDoc}
     */
    public function setAutor($autor)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAutor', array($autor));

        return parent::setAutor($autor);
    }

    /**
     * {@inheritDoc}
     */
    public function getAutor()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAutor', array());

        return parent::getAutor();
    }

    /**
     * {@inheritDoc}
     */
    public function setRuta($ruta)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRuta', array($ruta));

        return parent::setRuta($ruta);
    }

    /**
     * {@inheritDoc}
     */
    public function getRuta()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRuta', array());

        return parent::getRuta();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdUsuario(\MAT\SitioBundle\Entity\Usuario $idUsuario = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdUsuario', array($idUsuario));

        return parent::setIdUsuario($idUsuario);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdUsuario()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdUsuario', array());

        return parent::getIdUsuario();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

}
