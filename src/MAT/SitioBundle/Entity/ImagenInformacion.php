<?php

namespace MAT\SitioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImagenInformacion
 *
 * @ORM\Table(name="imagen_informacion", indexes={@ORM\Index(name="IDX_6A2A899DA52E675E", columns={"id_imagen"}), @ORM\Index(name="IDX_6A2A899DFCA5BA52", columns={"id_informacion"})})
 * @ORM\Entity
 */
class ImagenInformacion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="imagen_informacion_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \MAT\SitioBundle\Entity\Imagen
     *
     * @ORM\ManyToOne(targetEntity="MAT\SitioBundle\Entity\Imagen")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_imagen", referencedColumnName="id")
     * })
     */
    private $idImagen;

    /**
     * @var \MAT\SitioBundle\Entity\Informacion
     *
     * @ORM\ManyToOne(targetEntity="MAT\SitioBundle\Entity\Informacion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_informacion", referencedColumnName="id")
     * })
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
