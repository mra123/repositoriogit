<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evaluacion
 *
 * @ORM\Table(name="evaluacion", indexes={@ORM\Index(name="fk_Evaluacion_Edicion1_idx", columns={"Edicion_idEdicion"})})
 * @ORM\Entity
 */
class Evaluacion
{
    /**
     * @var string
     *
     * @ORM\Column(name="Objetivo", type="string", length=20, nullable=true)
     */
    private $objetivo;

    /**
     * @var string
     *
     * @ORM\Column(name="Duracion", type="string", length=20, nullable=true)
     */
    private $duracion;

    /**
     * @var string
     *
     * @ORM\Column(name="Interes_alumno", type="string", length=20, nullable=true)
     */
    private $interesAlumno;

    /**
     * @var string
     *
     * @ORM\Column(name="Forma_impartir", type="string", length=20, nullable=true)
     */
    private $formaImpartir;

    /**
     * @var string
     *
     * @ORM\Column(name="Dinamica_grupo", type="string", length=20, nullable=true)
     */
    private $dinamicaGrupo;

    /**
     * @var string
     *
     * @ORM\Column(name="Material", type="string", length=20, nullable=true)
     */
    private $material;

    /**
     * @var string
     *
     * @ORM\Column(name="Instalaciones", type="string", length=20, nullable=true)
     */
    private $instalaciones;

    /**
     * @var string
     *
     * @ORM\Column(name="Opinion_general", type="string", length=20, nullable=true)
     */
    private $opinionGeneral;

    /**
     * @var string
     *
     * @ORM\Column(name="Repetiria", type="string", length=20, nullable=true)
     */
    private $repetiria;

    /**
     * @var string
     *
     * @ORM\Column(name="Observaciones", type="string", length=1000, nullable=true)
     */
    private $observaciones;

    /**
     * @var integer
     *
     * @ORM\Column(name="idEvaluacion", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idevaluacion;

    /**
     * @var \AppBundle\Entity\Edicion
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Edicion")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Edicion_idEdicion", referencedColumnName="idEdicion")
     * })
     */
    private $edicionedicion;



    /**
     * Set objetivo
     *
     * @param string $objetivo
     *
     * @return Evaluacion
     */
    public function setObjetivo($objetivo)
    {
        $this->objetivo = $objetivo;

        return $this;
    }

    /**
     * Get objetivo
     *
     * @return string
     */
    public function getObjetivo()
    {
        return $this->objetivo;
    }

    /**
     * Set duracion
     *
     * @param string $duracion
     *
     * @return Evaluacion
     */
    public function setDuracion($duracion)
    {
        $this->duracion = $duracion;

        return $this;
    }

    /**
     * Get duracion
     *
     * @return string
     */
    public function getDuracion()
    {
        return $this->duracion;
    }

    /**
     * Set interesAlumno
     *
     * @param string $interesAlumno
     *
     * @return Evaluacion
     */
    public function setInteresAlumno($interesAlumno)
    {
        $this->interesAlumno = $interesAlumno;

        return $this;
    }

    /**
     * Get interesAlumno
     *
     * @return string
     */
    public function getInteresAlumno()
    {
        return $this->interesAlumno;
    }

    /**
     * Set formaImpartir
     *
     * @param string $formaImpartir
     *
     * @return Evaluacion
     */
    public function setFormaImpartir($formaImpartir)
    {
        $this->formaImpartir = $formaImpartir;

        return $this;
    }

    /**
     * Get formaImpartir
     *
     * @return string
     */
    public function getFormaImpartir()
    {
        return $this->formaImpartir;
    }

    /**
     * Set dinamicaGrupo
     *
     * @param string $dinamicaGrupo
     *
     * @return Evaluacion
     */
    public function setDinamicaGrupo($dinamicaGrupo)
    {
        $this->dinamicaGrupo = $dinamicaGrupo;

        return $this;
    }

    /**
     * Get dinamicaGrupo
     *
     * @return string
     */
    public function getDinamicaGrupo()
    {
        return $this->dinamicaGrupo;
    }

    /**
     * Set material
     *
     * @param string $material
     *
     * @return Evaluacion
     */
    public function setMaterial($material)
    {
        $this->material = $material;

        return $this;
    }

    /**
     * Get material
     *
     * @return string
     */
    public function getMaterial()
    {
        return $this->material;
    }

    /**
     * Set instalaciones
     *
     * @param string $instalaciones
     *
     * @return Evaluacion
     */
    public function setInstalaciones($instalaciones)
    {
        $this->instalaciones = $instalaciones;

        return $this;
    }

    /**
     * Get instalaciones
     *
     * @return string
     */
    public function getInstalaciones()
    {
        return $this->instalaciones;
    }

    /**
     * Set opinionGeneral
     *
     * @param string $opinionGeneral
     *
     * @return Evaluacion
     */
    public function setOpinionGeneral($opinionGeneral)
    {
        $this->opinionGeneral = $opinionGeneral;

        return $this;
    }

    /**
     * Get opinionGeneral
     *
     * @return string
     */
    public function getOpinionGeneral()
    {
        return $this->opinionGeneral;
    }

    /**
     * Set repetiria
     *
     * @param string $repetiria
     *
     * @return Evaluacion
     */
    public function setRepetiria($repetiria)
    {
        $this->repetiria = $repetiria;

        return $this;
    }

    /**
     * Get repetiria
     *
     * @return string
     */
    public function getRepetiria()
    {
        return $this->repetiria;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     *
     * @return Evaluacion
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
     * Get idevaluacion
     *
     * @return integer
     */
    public function getIdevaluacion()
    {
        return $this->idevaluacion;
    }

    /**
     * Set edicionedicion
     *
     * @param \AppBundle\Entity\Edicion $edicionedicion
     *
     * @return Evaluacion
     */
    public function setEdicionedicion(\AppBundle\Entity\Edicion $edicionedicion = null)
    {
        $this->edicionedicion = $edicionedicion;

        return $this;
    }

    /**
     * Get edicionedicion
     *
     * @return \AppBundle\Entity\Edicion
     */
    public function getEdicionedicion()
    {
        return $this->edicionedicion;
    }
}
