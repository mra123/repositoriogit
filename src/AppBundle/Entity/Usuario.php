<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * Usuario
 *
 * @ORM\Table(name="usuario", indexes={@ORM\Index(name="fk_Usuario_Departamento1_idx", columns={"Departamento_idDepartamento"}), @ORM\Index(name="fk_Usuario_Tipo_Usuario1_idx", columns={"Tipo_Usuario_idTipo_Usuario"})})
 * @ORM\Entity (repositoryClass="AppBundle\Entity\UsuarioRepository")
 * @UniqueEntity(fields="email", message="Email already taken")
 * @UniqueEntity(fields="username", message="Username already taken")
 */

class Usuario implements UserInterface, \Serializable
{
    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=45, nullable=true)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=45, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="Password", type="string", length=45, nullable=true)
     */
    private $password;

    /**
     * @var integer
     *
     * @ORM\Column(name="is_active", type="integer", nullable=true)
     */
    private $isActive = '1';

    public function __construct()
    {
        $this->isActive = 1;
        // may not be needed, see section on salt below
        // $this->salt = md5(uniqid(null, true));
    }

    /**
     * @var integer
     *
     * @ORM\Column(name="idUsuario", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idusuario;

    /**
     * @var \AppBundle\Entity\TipoUsuario
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\TipoUsuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Tipo_Usuario_idTipo_Usuario", referencedColumnName="idTipo_Usuario")
     * })
     */
    private $tipoUsuariotipoUsuario;

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
     * Set username
     *
     * @param string $username
     *
     * @return Usuario
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Usuario
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Usuario
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set isActive
     *
     * @param integer $isActive
     *
     * @return Usuario
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return integer
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Get idusuario
     *
     * @return integer
     */
    public function getIdusuario()
    {
        return $this->idusuario;
    }

    /**
     * Set tipoUsuariotipoUsuario
     *
     * @param \AppBundle\Entity\TipoUsuario $tipoUsuariotipoUsuario
     *
     * @return Usuario
     */
    public function setTipoUsuariotipoUsuario(\AppBundle\Entity\TipoUsuario $tipoUsuariotipoUsuario = null)
    {
        $this->tipoUsuariotipoUsuario = $tipoUsuariotipoUsuario;

        return $this;
    }

    /**
     * Get tipoUsuariotipoUsuario
     *
     * @return \AppBundle\Entity\TipoUsuario
     */
    public function getTipoUsuariotipoUsuario()
    {
        return $this->tipoUsuariotipoUsuario;
    }

    /**
     * Set departamentodepartamento
     *
     * @param \AppBundle\Entity\Departamento $departamentodepartamento
     *
     * @return Usuario
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

 /*agregadas*/

     public function isAccountNonExpired()
    {
        return true;
    }

    public function isAccountNonLocked()
    {
        return true;
    }

    public function isCredentialsNonExpired()
    {
        return true;
    }

    public function isEnabled()
    {
        return $this->isActive;
    }

    // serialize and unserialize must be updated - see below
    public function serialize()
    {
        return serialize(array(
            $this->idusuario,
            $this->username,
            $this->password,
            // see section on salt below
            // $this->salt,
            $this->isActive
        ));
    }
    public function unserialize($serialized)
    {
        list (
            $this->idusuario,
            $this->username,
            $this->password,
            // see section on salt below
            // $this->salt
            $this->isActive
        ) = unserialize($serialized);
    }

    public function getRoles()
    {
        return array('ROLE_USER');
    }

    public function eraseCredentials()
    {
    }

    public function getSalt()
    {
        // you *may* need a real salt depending on your encoder
        // see section on salt below
        return null;
    }

}
