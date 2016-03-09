<?php

namespace MAT\SitioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImagenNoticiainterna
 */
class ImagenNoticiainterna
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
     * @var \MAT\SitioBundle\Entity\NoticiaInterna
     */
    private $idNoticiainterna;


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
     * @return ImagenNoticiainterna
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
     * Set idNoticiainterna
     *
     * @param \MAT\SitioBundle\Entity\NoticiaInterna $idNoticiainterna
     * @return ImagenNoticiainterna
     */
    public function setIdNoticiainterna(\MAT\SitioBundle\Entity\NoticiaInterna $idNoticiainterna = null)
    {
        $this->idNoticiainterna = $idNoticiainterna;

        return $this;
    }

    /**
     * Get idNoticiainterna
     *
     * @return \MAT\SitioBundle\Entity\NoticiaInterna 
     */
    public function getIdNoticiainterna()
    {
        return $this->idNoticiainterna;
    }
    
    
    
}
