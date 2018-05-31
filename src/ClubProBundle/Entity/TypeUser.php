<?php

namespace ClubProBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeUser
 *
 * @ORM\Table(name="TypeUser")
 * @ORM\Entity(repositoryClass="ClubProBundle\Repository\TypeclientRepository")
 */
class TypeUser
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
     * @ORM\Column(name="libelType", type="string", length=80)
     */
    private $libelType;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

        
    /**
     * Set libelType
     *
     * @param string $libelType
     *
     * @return Typeclient
     */
    public function setLibelType($libelType)
    {
        $this->libelType = $libelType;

        return $this;
    }

    /**
     * Get libelType
     *
     * @return string
     */
    public function getLibelType()
    {
        return $this->libelType;
    }
}

