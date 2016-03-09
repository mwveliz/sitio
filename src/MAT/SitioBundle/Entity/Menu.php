<?php

namespace MAT\SitioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Menu
 */
class Menu
{
    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var string
     */
    private $posicion;

    /**
     * @var boolean
     */
    private $visible;

    /**
     * @var string
     */
    private $enlace;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Menu
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set posicion
     *
     * @param string $posicion
     * @return Menu
     */
    public function setPosicion($posicion)
    {
        $this->posicion = $posicion;

        return $this;
    }

    /**
     * Get posicion
     *
     * @return string 
     */
    public function getPosicion()
    {
        return $this->posicion;
    }

    /**
     * Set visible
     *
     * @param boolean $visible
     * @return Menu
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;

        return $this;
    }

    /**
     * Get visible
     *
     * @return boolean 
     */
    public function getVisible()
    {
        return $this->visible;
    }

    /**
     * Set enlace
     *
     * @param string $enlace
     * @return Menu
     */
    public function setEnlace($enlace)
    {
        $this->enlace = $enlace;

        return $this;
    }

    /**
     * Get enlace
     *
     * @return string 
     */
    public function getEnlace()
    {
        return $this->enlace;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
