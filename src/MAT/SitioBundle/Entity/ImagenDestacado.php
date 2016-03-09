<?php

namespace MAT\SitioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImagenDestacado
 */
class ImagenDestacado
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \MAT\SitioBundle\Entity\Imagen
     */
    private $idImagen;

    /**
     * @var \MAT\SitioBundle\Entity\Destacado
     */
    private $idDestacado;


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
     * Set idImagen
     *
     * @param \MAT\SitioBundle\Entity\Imagen $idImagen
     * @return ImagenDestacado
     */
    public function setIdImagen(\MAT\SitioBundle\Entity\Imagen $idImagen = null)
    {
        $this->idImagen = $idImagen;

        return $this;
    }

    /**
     * Get idImagen
     *
     * @return \MAT\SitioBundle\Entity\Imagen 
     */
    public function getIdImagen()
    {
        return $this->idImagen;
    }

    /**
     * Set idDestacado
     *
     * @param \MAT\SitioBundle\Entity\Destacado $idDestacado
     * @return ImagenDestacado
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
    
    
}
