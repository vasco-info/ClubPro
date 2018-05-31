<?php

namespace ClubProBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Secteur
 *
 * @ORM\Table(name="secteur")
 * @ORM\Entity(repositoryClass="ClubProBundle\Repository\SecteurRepository")
 */
class Secteur
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
     * @ORM\Column(name="nomSect", type="string", length=60)
     */
    private $nomSect;


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
     * Set nomSect
     *
     * @param string $nomSect
     *
     * @return Secteur
     */
    public function setNomSect($nomSect)
    {
        $this->nomSect = $nomSect;

        return $this;
    }

    /**
     * Get nomSect
     *
     * @return string
     */
    public function getNomSect()
    {
        return $this->nomSect;
    }
}

