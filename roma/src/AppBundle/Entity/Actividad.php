<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Actividad
 *
 * @ORM\Table(name="actividad")
 * @ORM\Entity
 */
class Actividad
{
    /**
     * @var string
     *
     * @ORM\Column(name="Nombre_Actividad", type="string", length=45, nullable=true)
     */
    private $nombreActividad;

    /**
     * @var integer
     *
     * @ORM\Column(name="idActividad", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idactividad;



    /**
     * Set nombreActividad
     *
     * @param string $nombreActividad
     *
     * @return Actividad
     */
    public function setNombreActividad($nombreActividad)
    {
        $this->nombreActividad = $nombreActividad;

        return $this;
    }

    /**
     * Get nombreActividad
     *
     * @return string
     */
    public function getNombreActividad()
    {
        return $this->nombreActividad;
    }

    /**
     * Get idactividad
     *
     * @return integer
     */
    public function getIdactividad()
    {
        return $this->idactividad;
    }
}
