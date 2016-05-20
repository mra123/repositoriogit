<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estado
 *
 * @ORM\Table(name="estado")
 * @ORM\Entity
 */
class Estado
{
    /**
     * @var string
     *
     * @ORM\Column(name="Nombre_Estado", type="string", length=45, nullable=true)
     */
    private $nombreEstado;

    /**
     * @var integer
     *
     * @ORM\Column(name="idEstado", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idestado;



    /**
     * Set nombreEstado
     *
     * @param string $nombreEstado
     *
     * @return Estado
     */
    public function setNombreEstado($nombreEstado)
    {
        $this->nombreEstado = $nombreEstado;

        return $this;
    }

    /**
     * Get nombreEstado
     *
     * @return string
     */
    public function getNombreEstado()
    {
        return $this->nombreEstado;
    }

    /**
     * Get idestado
     *
     * @return integer
     */
    public function getIdestado()
    {
        return $this->idestado;
    }
}
