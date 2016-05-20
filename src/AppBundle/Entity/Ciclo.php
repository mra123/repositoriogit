<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ciclo
 *
 * @ORM\Table(name="ciclo", indexes={@ORM\Index(name="fk_Ciclo_Departamento1_idx", columns={"Departamento_idDepartamento"}), @ORM\Index(name="fk_Ciclo_Grupo1_idx", columns={"Grupo_idGrupo"})})
 * @ORM\Entity
 */
class Ciclo
{
    /**
     * @var string
     *
     * @ORM\Column(name="Nombre_Ciclo", type="string", length=45, nullable=true)
     */
    private $nombreCiclo;

    /**
     * @var integer
     *
     * @ORM\Column(name="idCiclo", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idciclo;

    /**
     * @var \AppBundle\Entity\Grupo
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Grupo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Grupo_idGrupo", referencedColumnName="idGrupo")
     * })
     */
    private $grupogrupo;

    /**
     * @var \AppBundle\Entity\Departamento
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Departamento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Departamento_idDepartamento", referencedColumnName="idDepartamento")
     * })
     */
    private $departamentodepartamento;



    /**
     * Set nombreCiclo
     *
     * @param string $nombreCiclo
     *
     * @return Ciclo
     */
    public function setNombreCiclo($nombreCiclo)
    {
        $this->nombreCiclo = $nombreCiclo;

        return $this;
    }

    /**
     * Get nombreCiclo
     *
     * @return string
     */
    public function getNombreCiclo()
    {
        return $this->nombreCiclo;
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
     * Set grupogrupo
     *
     * @param \AppBundle\Entity\Grupo $grupogrupo
     *
     * @return Ciclo
     */
    public function setGrupogrupo(\AppBundle\Entity\Grupo $grupogrupo = null)
    {
        $this->grupogrupo = $grupogrupo;

        return $this;
    }

    /**
     * Get grupogrupo
     *
     * @return \AppBundle\Entity\Grupo
     */
    public function getGrupogrupo()
    {
        return $this->grupogrupo;
    }

    /**
     * Set departamentodepartamento
     *
     * @param \AppBundle\Entity\Departamento $departamentodepartamento
     *
     * @return Ciclo
     */
    public function setDepartamentodepartamento(\AppBundle\Entity\Departamento $departamentodepartamento = null)
    {
        $this->departamentodepartamento = $departamentodepartamento;

        return $this;
    }

    /**
     * Get departamentodepartamento
     *
     * @return \AppBundle\Entity\Departamento
     */
    public function getDepartamentodepartamento()
    {
        return $this->departamentodepartamento;
    }
}
