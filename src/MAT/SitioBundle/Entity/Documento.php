<?php

namespace MAT\SitioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Documento
 */
class Documento
{
    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var string
     */
    private $ruta;

    /**
     * @var boolean
     */
    private $visible;

    /**
     * @var \DateTime
     */
    private $fechaHora;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \MAT\SitioBundle\Entity\TipoDocumento
     */
    private $idTipoDocumento;


    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Documento
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
     * Set ruta
     *
     * @param string $ruta
     * @return Documento
     */
    public function setRuta($ruta)
    {
        $this->ruta = $ruta;

        return $this;
    }

    /**
     * Get ruta
     *
     * @return string 
     */
    public function getRuta()
    {
        return $this->ruta;
    }

    /**
     * Set visible
     *
     * @param boolean $visible
     * @return Documento
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
     * Set fechaHora
     *
     * @param \DateTime $fechaHora
     * @return Documento
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idTipoDocumento
     *
     * @param \MAT\SitioBundle\Entity\TipoDocumento $idTipoDocumento
     * @return Documento
     */
    public function setIdTipoDocumento(\MAT\SitioBundle\Entity\TipoDocumento $idTipoDocumento = null)
    {
        $this->idTipoDocumento = $idTipoDocumento;

        return $this;
    }

    /**
     * Get idTipoDocumento
     *
     * @return \MAT\SitioBundle\Entity\TipoDocumento 
     */
    public function getIdTipoDocumento()
    {
        return $this->idTipoDocumento;
    }
}
