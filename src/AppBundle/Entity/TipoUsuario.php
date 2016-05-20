<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoUsuario
 *
 * @ORM\Table(name="tipo_usuario")
 * @ORM\Entity
 */
class TipoUsuario
{
    /**
     * @var string
     *
     * @ORM\Column(name="Tipo_Usuario_Nombre", type="string", length=45, nullable=true)
     */
    private $tipoUsuarioNombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="idTipo_Usuario", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idtipoUsuario;



    /**
     * Set tipoUsuarioNombre
     *
     * @param string $tipoUsuarioNombre
     *
     * @return TipoUsuario
     */
    public function setTipoUsuarioNombre($tipoUsuarioNombre)
    {
        $this->tipoUsuarioNombre = $tipoUsuarioNombre;

        return $this;
    }

    /**
     * Get tipoUsuarioNombre
     *
     * @return string
     */
    public function getTipoUsuarioNombre()
    {
        return $this->tipoUsuarioNombre;
    }

    /**
     * Get idtipoUsuario
     *
     * @return integer
     */
    public function getIdtipoUsuario()
    {
        return $this->idtipoUsuario;
    }
}
