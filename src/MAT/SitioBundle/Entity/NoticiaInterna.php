<?php

namespace MAT\SitioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NoticiaInterna
 *
 * @ORM\Table(name="noticia_interna", indexes={@ORM\Index(name="IDX_F47F03D0FCF8192D", columns={"id_usuario"}), @ORM\Index(name="IDX_F47F03D0925E0B20", columns={"id_ente"})})
 * @ORM\Entity
 */
class NoticiaInterna
{
    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", nullable=true)
     */
    private $descripcion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_hora", type="datetime", nullable=true)
     */
    private $fechaHora;

    /**
     * @var boolean
     *
     * @ORM\Column(name="visible", type="boolean", nullable=true)
     */
    private $visible;

    /**
     * @var string
     *
     * @ORM\Column(name="titulo", type="string", nullable=true)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="antetitulo", type="string", nullable=true)
     */
    private $antetitulo;

    /**
     * @var string
     *
     * @ORM\Column(name="fuente", type="string", nullable=true)
     */
    private $fuente;

    /**
     * @var string
     *
     * @ORM\Column(name="enlace", type="string", nullable=true)
     */
    private $enlace;

    /**
     * @var string
     *
     * @ORM\Column(name="autor", type="string", nullable=true)
     */
    private $autor;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="noticia_interna_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \MAT\SitioBundle\Entity\Usuario
     *
     * @ORM\ManyToOne(targetEntity="MAT\SitioBundle\Entity\Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_usuario", referencedColumnName="id")
     * })
     */
    private $idUsuario;

    /**
     * @var \MAT\SitioBundle\Entity\Ente
     *
     * @ORM\ManyToOne(targetEntity="MAT\SitioBundle\Entity\Ente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ente", referencedColumnName="id")
     * })
     */
    private $idEnte;



    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return NoticiaInterna
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
     * @return NoticiaInterna
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
     * @return NoticiaInterna
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
     * @return NoticiaInterna
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
     * @return NoticiaInterna
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
     * @return NoticiaInterna
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
     * @return NoticiaInterna
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
     * @return NoticiaInterna
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
     * @return NoticiaInterna
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

    /**
     * Set idEnte
     *
     * @param \MAT\SitioBundle\Entity\Ente $idEnte
     * @return NoticiaInterna
     */
    public function setIdEnte(\MAT\SitioBundle\Entity\Ente $idEnte = null)
    {
        $this->idEnte = $idEnte;

        return $this;
    }

    /**
     * Get idEnte
     *
     * @return \MAT\SitioBundle\Entity\Ente 
     */
    public function getIdEnte()
    {
        return $this->idEnte;
    }
}
