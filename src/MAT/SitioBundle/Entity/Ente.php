<?php

namespace MAT\SitioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ente
 */
class Ente
{
    /**
     * @var string
     */
    private $descripcion;

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
     * @return Ente
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
     * Set enlace
     *
     * @param string $enlace
     * @return Ente
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
    
        public function __toString()
    {
        return $this->descripcion;
    }
}
