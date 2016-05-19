<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gestion
 *
 * @ORM\Table(name="gestion", indexes={@ORM\Index(name="fk_Usuario_has_Edicion_Edicion1_idx", columns={"Edicion_idEdicion"}), @ORM\Index(name="fk_Usuario_has_Edicion_Usuario1_idx", columns={"Usuario_idUsuario"})})
 * @ORM\Entity
 */
class Gestion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id_gestion", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idGestion;

    /**
     * @var \AppBundle\Entity\Usuario
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Usuario_idUsuario", referencedColumnName="idUsuario")
     * })
     */
    private $usuariousuario;

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
     * Get idGestion
     *
     * @return integer
     */
    public function getIdGestion()
    {
        return $this->idGestion;
    }

    /**
     * Set usuariousuario
     *
     * @param \AppBundle\Entity\Usuario $usuariousuario
     *
     * @return Gestion
     */
    public function setUsuariousuario(\AppBundle\Entity\Usuario $usuariousuario = null)
    {
        $this->usuariousuario = $usuariousuario;

        return $this;
    }

    /**
     * Get usuariousuario
     *
     * @return \AppBundle\Entity\Usuario
     */
    public function getUsuariousuario()
    {
        return $this->usuariousuario;
    }

    /**
     * Set edicionedicion
     *
     * @param \AppBundle\Entity\Edicion $edicionedicion
     *
     * @return Gestion
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
