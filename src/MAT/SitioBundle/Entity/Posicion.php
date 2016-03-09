<?php

namespace MAT\SitioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Posicion
 *
 * @ORM\Table(name="posicion", indexes={@ORM\Index(name="IDX_8BE28BD3EFBDF6E6", columns={"id_noticia"}), @ORM\Index(name="IDX_8BE28BD3E258A667", columns={"id_noticiainterna"}), @ORM\Index(name="IDX_8BE28BD3AAC326F2", columns={"id_destacado"}), @ORM\Index(name="IDX_8BE28BD392429B1C", columns={"id_video"}), @ORM\Index(name="IDX_8BE28BD3C72848B3", columns={"id_estadistica"}), @ORM\Index(name="IDX_8BE28BD3A2230794", columns={"id_enlace"})})
 * @ORM\Entity
 */
class Posicion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="pos_noticia", type="bigint", nullable=true)
     */
    private $posNoticia;

    /**
     * @var integer
     *
     * @ORM\Column(name="pos_noticiainterna", type="bigint", nullable=true)
     */
    private $posNoticiainterna;

    /**
     * @var integer
     *
     * @ORM\Column(name="pos_destacado", type="bigint", nullable=true)
     */
    private $posDestacado;

    /**
     * @var integer
     *
     * @ORM\Column(name="pos_video", type="bigint", nullable=true)
     */
    private $posVideo;

    /**
     * @var integer
     *
     * @ORM\Column(name="pos_estadistica", type="bigint", nullable=true)
     */
    private $posEstadistica;

    /**
     * @var integer
     *
     * @ORM\Column(name="pos_enlace", type="bigint", nullable=true)
     */
    private $posEnlace;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="posicion_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \MAT\SitioBundle\Entity\Noticia
     *
     * @ORM\ManyToOne(targetEntity="MAT\SitioBundle\Entity\Noticia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_noticia", referencedColumnName="id")
     * })
     */
    private $idNoticia;

    /**
     * @var \MAT\SitioBundle\Entity\ImagenNoticiainterna
     *
     * @ORM\ManyToOne(targetEntity="MAT\SitioBundle\Entity\ImagenNoticiainterna")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_noticiainterna", referencedColumnName="id")
     * })
     */
    private $idNoticiainterna;

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
     * @var \MAT\SitioBundle\Entity\Video
     *
     * @ORM\ManyToOne(targetEntity="MAT\SitioBundle\Entity\Video")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_video", referencedColumnName="id")
     * })
     */
    private $idVideo;

    /**
     * @var \MAT\SitioBundle\Entity\Estadistica
     *
     * @ORM\ManyToOne(targetEntity="MAT\SitioBundle\Entity\Estadistica")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_estadistica", referencedColumnName="id")
     * })
     */
    private $idEstadistica;

    /**
     * @var \MAT\SitioBundle\Entity\Enlace
     *
     * @ORM\ManyToOne(targetEntity="MAT\SitioBundle\Entity\Enlace")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_enlace", referencedColumnName="id")
     * })
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
