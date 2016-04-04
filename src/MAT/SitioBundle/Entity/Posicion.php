<?php

namespace MAT\SitioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Posicion
 */
class Posicion
{
    /**
     * @var integer
     */
    private $posNoticia;

    /**
     * @var integer
     */
    private $posNoticiainterna;

    /**
     * @var integer
     */
    private $posDestacado;

    /**
     * @var integer
     */
    private $posVideo;

    /**
     * @var integer
     */
    private $posEstadistica;

    /**
     * @var integer
     */
    private $posEnlace;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \MAT\SitioBundle\Entity\Noticia
     */
    private $idNoticia;

    /**
     * @var \MAT\SitioBundle\Entity\IdNoticiainterna
     */
    private $idNoticiainterna;

    /**
     * @var \MAT\SitioBundle\Entity\Destacado
     */
    private $idDestacado;

    /**
     * @var \MAT\SitioBundle\Entity\Video
     */
    private $idVideo;

    /**
     * @var \MAT\SitioBundle\Entity\Estadistica
     */
    private $idEstadistica;

    /**
     * @var \MAT\SitioBundle\Entity\Enlace
     */
    private $idEnlace;


    /**
     * Set posNoticia
     *
     * @param integer $posNoticia
     * @return Posicion
     */
    public function setPosNoticia($posNoticia)
    {
        $this->posNoticia = $posNoticia;

        return $this;
    }

    /**
     * Get posNoticia
     *
     * @return integer 
     */
    public function getPosNoticia()
    {
        return $this->posNoticia;
    }

    /**
     * Set posNoticiainterna
     *
     * @param integer $posNoticiainterna
     * @return Posicion
     */
    public function setPosNoticiainterna($posNoticiainterna)
    {
        $this->posNoticiainterna = $posNoticiainterna;

        return $this;
    }

    /**
     * Get posNoticiainterna
     *
     * @return integer 
     */
    public function getPosNoticiainterna()
    {
        return $this->posNoticiainterna;
    }

    /**
     * Set posDestacado
     *
     * @param integer $posDestacado
     * @return Posicion
     */
    public function setPosDestacado($posDestacado)
    {
        $this->posDestacado = $posDestacado;

        return $this;
    }

    /**
     * Get posDestacado
     *
     * @return integer 
     */
    public function getPosDestacado()
    {
        return $this->posDestacado;
    }

    /**
     * Set posVideo
     *
     * @param integer $posVideo
     * @return Posicion
     */
    public function setPosVideo($posVideo)
    {
        $this->posVideo = $posVideo;

        return $this;
    }

    /**
     * Get posVideo
     *
     * @return integer 
     */
    public function getPosVideo()
    {
        return $this->posVideo;
    }

    /**
     * Set posEstadistica
     *
     * @param integer $posEstadistica
     * @return Posicion
     */
    public function setPosEstadistica($posEstadistica)
    {
        $this->posEstadistica = $posEstadistica;

        return $this;
    }

    /**
     * Get posEstadistica
     *
     * @return integer 
     */
    public function getPosEstadistica()
    {
        return $this->posEstadistica;
    }

    /**
     * Set posEnlace
     *
     * @param integer $posEnlace
     * @return Posicion
     */
    public function setPosEnlace($posEnlace)
    {
        $this->posEnlace = $posEnlace;

        return $this;
    }

    /**
     * Get posEnlace
     *
     * @return integer 
     */
    public function getPosEnlace()
    {
        return $this->posEnlace;
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
     * Set idNoticia
     *
     * @param \MAT\SitioBundle\Entity\Noticia $idNoticia
     * @return Posicion
     */
    public function setIdNoticia(\MAT\SitioBundle\Entity\Noticia $idNoticia = null)
    {
        $this->idNoticia = $idNoticia;

        return $this;
    }

    /**
     * Get idNoticia
     *
     * @return \MAT\SitioBundle\Entity\Noticia 
     */
    public function getIdNoticia()
    {
        return $this->idNoticia;
    }

    /**
     * Set idNoticiainterna
     *
     * @param \MAT\SitioBundle\Entity\ImagenNoticiainterna $idNoticiainterna
     * @return Posicion
     */
    public function setIdNoticiainterna(\MAT\SitioBundle\Entity\ImagenNoticiainterna $idNoticiainterna = null)
    {
        $this->idNoticiainterna = $idNoticiainterna;

        return $this;
    }

    /**
     * Get idNoticiainterna
     *
     * @return \MAT\SitioBundle\Entity\ImagenNoticiainterna 
     */
    public function getIdNoticiainterna()
    {
        return $this->idNoticiainterna;
    }

    /**
     * Set idDestacado
     *
     * @param \MAT\SitioBundle\Entity\Destacado $idDestacado
     * @return Posicion
     */
    public function setIdDestacado(\MAT\SitioBundle\Entity\Destacado $idDestacado = null)
    {
        $this->idDestacado = $idDestacado;

        return $this;
    }

    /**
     * Get idDestacado
     *
     * @return \MAT\SitioBundle\Entity\Destacado 
     */
    public function getIdDestacado()
    {
        return $this->idDestacado;
    }

    /**
     * Set idVideo
     *
     * @param \MAT\SitioBundle\Entity\Video $idVideo
     * @return Posicion
     */
    public function setIdVideo(\MAT\SitioBundle\Entity\Video $idVideo = null)
    {
        $this->idVideo = $idVideo;

        return $this;
    }

    /**
     * Get idVideo
     *
     * @return \MAT\SitioBundle\Entity\Video 
     */
    public function getIdVideo()
    {
        return $this->idVideo;
    }

    /**
     * Set idEstadistica
     *
     * @param \MAT\SitioBundle\Entity\Estadistica $idEstadistica
     * @return Posicion
     */
    public function setIdEstadistica(\MAT\SitioBundle\Entity\Estadistica $idEstadistica = null)
    {
        $this->idEstadistica = $idEstadistica;

        return $this;
    }

    /**
     * Get idEstadistica
     *
     * @return \MAT\SitioBundle\Entity\Estadistica 
     */
    public function getIdEstadistica()
    {
        return $this->idEstadistica;
    }

    /**
     * Set idEnlace
     *
     * @param \MAT\SitioBundle\Entity\Enlace $idEnlace
     * @return Posicion
     */
    public function setIdEnlace(\MAT\SitioBundle\Entity\Enlace $idEnlace = null)
    {
        $this->idEnlace = $idEnlace;

        return $this;
    }

    /**
     * Get idEnlace
     *
     * @return \MAT\SitioBundle\Entity\Enlace 
     */
    public function getIdEnlace()
    {
        return $this->idEnlace;
    }
}
