<?php

namespace MAT\SitioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Informacion
 */
class Informacion
{
    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var \DateTime
     */
    private $fechaHora;

    /**
     * @var boolean
     */
    private $visible;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \MAT\SitioBundle\Entity\Usuario
     */
    private $idUsuario;


    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Informacion
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
     * Set fechaHora
     *
     * @param \DateTime $fechaHora
     * @return Informacion
     */
    public function setFechaHora($fechaHora)
    {
        $this->fechaHora = $fechaHora;

        return $this;
    }

    /**
     * Get fechaHora
     *
     * @return \DateTime 
     */
    public function getFechaHora()
    {
        return $this->fechaHora;
    }

    /**
     * Set visible
     *
     * @param boolean $visible
     * @return Informacion
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idUsuario
     *
     * @param \MAT\SitioBundle\Entity\Usuario $idUsuario
     * @return Informacion
     */
    public function setIdUsuario(\MAT\SitioBundle\Entity\Usuario $idUsuario = null)
    {
        $this->idUsuario = $idUsuario;

        return $this;
    }

    /**
     * Get idUsuario
     *
     * @return \MAT\SitioBundle\Entity\Usuario 
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }
    
        public function __toString()
    {
        return $this->descripcion;
    }
}
