<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Edicion
 *
 * @ORM\Table(name="edicion", indexes={@ORM\Index(name="fk_Edicion_Estado1_idx", columns={"Estado_idEstado"}), @ORM\Index(name="fk_Edicion_Actividad1_idx", columns={"Actividad_idActividad"})})
 * @ORM\Entity
 */
class Edicion
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha_Edicion", type="date", nullable=true)
     */
    private $fechaEdicion;

    /**
     * @var string
     *
     * @ORM\Column(name="Autorizacion", type="string", length=45, nullable=true)
     */
    private $autorizacion = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="Menores_Edad", type="string", length=45, nullable=true)
     */
    private $menoresEdad = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="Observaciones", type="string", length=1000, nullable=true)
     */
    private $observaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="idCiclo", type="integer", nullable=true)
     */
    private $idciclo;

    /**
     * @var integer
     *
     * @ORM\Column(name="idEdicion", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idedicion;

    /**
     * @var \AppBundle\Entity\Actividad
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Actividad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Actividad_idActividad", referencedColumnName="idActividad")
     * })
     */
    private $actividadactividad;

    /**
     * @var \AppBundle\Entity\Estado
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Estado")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Estado_idEstado", referencedColumnName="idEstado")
     * })
     */
    private $estadoestado = '1';



    /**
     * Set fechaEdicion
     *
     * @param \DateTime $fechaEdicion
     *
     * @return Edicion
     */
    public function setFechaEdicion($fechaEdicion)
    {
        $this->fechaEdicion = $fechaEdicion;

        return $this;
    }

    /**
     * Get fechaEdicion
     *
     * @return \DateTime
     */
    public function getFechaEdicion()
    {
        return $this->fechaEdicion;
    }

    /**
     * Set autorizacion
     *
     * @param string $autorizacion
     *
     * @return Edicion
     */
    public function setAutorizacion($autorizacion)
    {
        $this->autorizacion = $autorizacion;

        return $this;
    }

    /**
     * Get autorizacion
     *
     * @return string
     */
    public function getAutorizacion()
    {
        return $this->autorizacion;
    }

    /**
     * Set menoresEdad
     *
     * @param string $menoresEdad
     *
     * @return Edicion
     */
    public function setMenoresEdad($menoresEdad)
    {
        $this->menoresEdad = $menoresEdad;

        return $this;
    }

    /**
     * Get menoresEdad
     *
     * @return string
     */
    public function getMenoresEdad()
    {
        return $this->menoresEdad;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     *
     * @return Edicion
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set idciclo
     *
     * @param integer $idciclo
     *
     * @return Edicion
     */
    public function setIdciclo($idciclo)
    {
        $this->idciclo = $idciclo;

        return $this;
    }

    /**
     * Get idciclo
     *
     * @return integer
     */
    public function getIdciclo()
    {
        return $this->idciclo;
    }

    /**
     * Get idedicion
     *
     * @return integer
     */
    public function getIdedicion()
    {
        return $this->idedicion;
    }

    /**
     * Set actividadactividad
     *
     * @param \AppBundle\Entity\Actividad $actividadactividad
     *
     * @return Edicion
     */
    public function setActividadactividad(\AppBundle\Entity\Actividad $actividadactividad = null)
    {
        $this->actividadactividad = $actividadactividad;

        return $this;
    }

    /**
     * Get actividadactividad
     *
     * @return \AppBundle\Entity\Actividad
     */
    public function getActividadactividad()
    {
        return $this->actividadactividad;
    }

    /**
     * Set estadoestado
     *
     * @param \AppBundle\Entity\Estado $estadoestado
     *
     * @return Edicion
     */
    public function setEstadoestado(\AppBundle\Entity\Estado $estadoestado = null)
    {
        $this->estadoestado = $estadoestado;

        return $this;
    }

    /**
     * Get estadoestado
     *
     * @return \AppBundle\Entity\Estado
     */
    public function getEstadoestado()
    {
        return $this->estadoestado;
    }
}
