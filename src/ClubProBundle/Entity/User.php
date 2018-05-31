<?php

namespace ClubProBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="ClubProBundle\Repository\UserRepository")
 */
class User
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nomUser", type="string", length=60)
     */
    private $nomUser;

    /**
     * @var string
     *
     * @ORM\Column(name="telUser", type="string", length=20)
     */
    private $telUser;

    /**
     * @var string
     *
     * @ORM\Column(name="emailUser", type="string", length=30)
     */
    private $emailUser;

    /**
     * @var string
     *
     * @ORM\Column(name="logoUser", type="string", length=30)
     */
    private $logoUser;

    /**
     * @var string
     *
     * @ORM\Column(name="Username", type="string", length=30)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="Password", type="string", length=40)
     */
    private $password;

    /**
     * @var bool
     *
     * @ORM\Column(name="Etat", type="boolean")
     */
    private $etat;

    /**
     * @var string
     *
     * @ORM\Column(name="DateRegister", type="string", length=20)
     */
    private $dateRegister;

    /**
     * @var string
     *
     * @ORM\Column(name="DateModif", type="string", length=30)
     */
    private $dateModif;

    /**
     * @var string
     *
     * @ORM\Column(name="Token", type="string", length=255)
     */
    private $token;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    
    function setId($id) {
        $this->id = $id;
    }

    
    /**
     * Set nomUser
     *
     * @param string $nomUser
     *
     * @return User
     */
    public function setNomUser($nomUser)
    {
        $this->nomUser = $nomUser;

        return $this;
    }

    /**
     * Get nomUser
     *
     * @return string
     */
    public function getNomUser()
    {
        return $this->nomUser;
    }

    /**
     * Set telUser
     *
     * @param string $telUser
     *
     * @return User
     */
    public function setTelUser($telUser)
    {
        $this->telUser = $telUser;

        return $this;
    }

    /**
     * Get telUser
     *
     * @return string
     */
    public function getTelUser()
    {
        return $this->telUser;
    }

    /**
     * Set emailUser
     *
     * @param string $emailUser
     *
     * @return User
     */
    public function setEmailUser($emailUser)
    {
        $this->emailUser = $emailUser;

        return $this;
    }

    /**
     * Get emailUser
     *
     * @return string
     */
    public function getEmailUser()
    {
        return $this->emailUser;
    }

    /**
     * Set logoUser
     *
     * @param string $logoUser
     *
     * @return User
     */
    public function setLogoUser($logoUser)
    {
        $this->logoUser = $logoUser;

        return $this;
    }

    /**
     * Get logoUser
     *
     * @return string
     */
    public function getLogoUser()
    {
        return $this->logoUser;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return User
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
     * Set password
     *
     * @param string $password
     *
     * @return User
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
     * Set etat
     *
     * @param boolean $etat
     *
     * @return User
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return bool
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set dateRegister
     *
     * @param string $dateRegister
     *
     * @return User
     */
    public function setDateRegister($dateRegister)
    {
        $this->dateRegister = $dateRegister;

        return $this;
    }

    /**
     * Get dateRegister
     *
     * @return string
     */
    public function getDateRegister()
    {
        return $this->dateRegister;
    }

    /**
     * Set dateModif
     *
     * @param string $dateModif
     *
     * @return User
     */
    public function setDateModif($dateModif)
    {
        $this->dateModif = $dateModif;

        return $this;
    }

    /**
     * Get dateModif
     *
     * @return string
     */
    public function getDateModif()
    {
        return $this->dateModif;
    }

    /**
     * Set token
     *
     * @param string $token
     *
     * @return User
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * 
     *
     * @ORM\ManyToOne(targetEntity="TypeUser")
     */
    private $typeUser;
    
    
    
    public function getTypeUser() {
        return $this->typeUser;
    }

    public function setTypeUser($typeUser) {
        $this->typeUser = $typeUser;
    }
}

