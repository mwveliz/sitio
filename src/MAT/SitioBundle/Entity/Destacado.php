<?php

namespace MAT\SitioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Destacado
 */
class Destacado
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
     * @var string
     */
    private $titulo;

    /**
     * @var string
     */
    private $antetitulo;

    /**
     * @var string
     */
    private $fuente;

    /**
     * @var string
     */
    private $enlace;

    /**
     * @var string
     */
    private $autor;

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
     * @return Destacado
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
     * @return Destacado
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
     * @return Destacado
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
     * Set titulo
     *
     * @param string $titulo
     * @return Destacado
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set antetitulo
     *
     * @param string $antetitulo
     * @return Destacado
     */
    public function setAntetitulo($antetitulo)
    {
        $this->antetitulo = $antetitulo;

        return $this;
    }

    /**
     * Get antetitulo
     *
     * @return string 
     */
    public function getAntetitulo()
    {
        return $this->antetitulo;
    }

    /**
     * Set fuente
     *
     * @param string $fuente
     * @return Destacado
     */
    public function setFuente($fuente)
    {
        $this->fuente = $fuente;

        return $this;
    }

    /**
     * Get fuente
     *
     * @return string 
     */
    public function getFuente()
    {
        return $this->fuente;
    }

    /**
     * Set enlace
     *
     * @param string $enlace
     * @return Destacado
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
     * Set autor
     *
     * @param string $autor
     * @return Destacado
     */
    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get autor
     *
     * @return string 
     */
    public function getAutor()
    {
        return $this->autor;
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
     * @return Destacado
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
        return $this->titulo;
    }
}
