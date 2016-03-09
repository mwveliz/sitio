<?php

namespace MAT\SitioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoDocumento
 */
class TipoDocumento
{
    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return TipoDocumento
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
        return $this->descripcion ;
    }
}
