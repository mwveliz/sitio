<?php

namespace MAT\SitioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Banner
 */
class Banner
{
    /**
     * @var string
     */
    private $rutaBanner;

    /**
     * @var string
     */
    private $rutaFooter;

    /**
     * @var string
     */
    private $rutaLogo;

    /**
     * @var string
     */
    private $rutaSplash;

    /**
     * @var \DateTime
     */
    private $fechaHora;

    /**
     * @var boolean
     */
    private $visibleSplash;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \MAT\SitioBundle\Entity\Usuario
     */
    private $idUsuario;


    /**
     * Set rutaBanner
     *
     * @param string $rutaBanner
     * @return Banner
     */
    public function setRutaBanner($rutaBanner)
    {
        $this->rutaBanner = $rutaBanner;

        return $this;
    }

    /**
     * Get rutaBanner
     *
     * @return string 
     */
    public function getRutaBanner()
    {
        return $this->rutaBanner;
    }

    /**
     * Set rutaFooter
     *
     * @param string $rutaFooter
     * @return Banner
     */
    public function setRutaFooter($rutaFooter)
    {
        $this->rutaFooter = $rutaFooter;

        return $this;
    }

    /**
     * Get rutaFooter
     *
     * @return string 
     */
    public function getRutaFooter()
    {
        return $this->rutaFooter;
    }

    /**
     * Set rutaLogo
     *
     * @param string $rutaLogo
     * @return Banner
     */
    public function setRutaLogo($rutaLogo)
    {
        $this->rutaLogo = $rutaLogo;

        return $this;
    }

    /**
     * Get rutaLogo
     *
     * @return string 
     */
    public function getRutaLogo()
    {
        return $this->rutaLogo;
    }

    /**
     * Set rutaSplash
     *
     * @param string $rutaSplash
     * @return Banner
     */
    public function setRutaSplash($rutaSplash)
    {
        $this->rutaSplash = $rutaSplash;

        return $this;
    }

    /**
     * Get rutaSplash
     *
     * @return string 
     */
    public function getRutaSplash()
    {
        return $this->rutaSplash;
    }

    /**
     * Set fechaHora
     *
     * @param \DateTime $fechaHora
     * @return Banner
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
     * Set visibleSplash
     *
     * @param boolean $visibleSplash
     * @return Banner
     */
    public function setVisibleSplash($visibleSplash)
    {
        $this->visibleSplash = $visibleSplash;

        return $this;
    }

    /**
     * Get visibleSplash
     *
     * @return boolean 
     */
    public function getVisibleSplash()
    {
        return $this->visibleSplash;
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
     * @return Banner
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
}
