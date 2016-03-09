<?php

namespace MAT\SitioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImagenDestacado
 *
 * @ORM\Table(name="imagen_destacado", indexes={@ORM\Index(name="IDX_E250B822A52E675E", columns={"id_imagen"}), @ORM\Index(name="IDX_E250B822AAC326F2", columns={"id_destacado"})})
 * @ORM\Entity
 */
class ImagenDestacado
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="imagen_destacado_id_seq", allocationSize=1, initialValue=1)
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
     * @var \MAT\SitioBundle\Entity\Destacado
     *
     * @ORM\ManyToOne(targetEntity="MAT\SitioBundle\Entity\Destacado")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_destacado", referencedColumnName="id")
     * })
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
