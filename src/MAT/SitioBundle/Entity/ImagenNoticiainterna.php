<?php

namespace MAT\SitioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImagenNoticiainterna
 *
 * @ORM\Table(name="imagen_noticiainterna", indexes={@ORM\Index(name="IDX_F1C78C0DA52E675E", columns={"id_imagen"}), @ORM\Index(name="IDX_F1C78C0DE258A667", columns={"id_noticiainterna"})})
 * @ORM\Entity
 */
class ImagenNoticiainterna
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="imagen_noticiainterna_id_seq", allocationSize=1, initialValue=1)
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
     * @var \MAT\SitioBundle\Entity\NoticiaInterna
     *
     * @ORM\ManyToOne(targetEntity="MAT\SitioBundle\Entity\NoticiaInterna")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_noticiainterna", referencedColumnName="id")
     * })
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
