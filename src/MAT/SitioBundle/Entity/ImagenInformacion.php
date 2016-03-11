<?php

namespace MAT\SitioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImagenInformacion
 */
class ImagenInformacion
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
     * @var \MAT\SitioBundle\Entity\Informacion
     */
    private $idInformacion;


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
     * @return ImagenInformacion
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
     * Set idInformacion
     *
     * @param \MAT\SitioBundle\Entity\Informacion $idInformacion
     * @return ImagenInformacion
     */
    public function setIdInformacion(\MAT\SitioBundle\Entity\Informacion $idInformacion = null)
    {
        $this->idInformacion = $idInformacion;

        return $this;
    }

    /**
     * Get idInformacion
     *
     * @return \MAT\SitioBundle\Entity\Informacion 
     */
    public function getIdInformacion()
    {
        return $this->idInformacion;
    }
    
   
}
