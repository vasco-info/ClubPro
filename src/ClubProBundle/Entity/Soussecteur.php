<?php

namespace ClubProBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Soussecteur
 *
 * @ORM\Table(name="soussecteur")
 * @ORM\Entity(repositoryClass="ClubProBundle\Repository\SoussecteurRepository")
 */
class Soussecteur
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
     * @ORM\Column(name="nomSous", type="string", length=80)
     */
    private $nomSous;


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
     * Set nomSous
     *
     * @param string $nomSous
     *
     * @return Soussecteur
     */
    public function setNomSous($nomSous)
    {
        $this->nomSous = $nomSous;

        return $this;
    }

    /**
     * Get nomSous
     *
     * @return string
     */
    public function getNomSous()
    {
        return $this->nomSous;
    }

     /**
     * 
     *
     * @ORM\ManyToOne(targetEntity="Secteur")
     */
    private $Secteur;
    
    
    
    public function getSecteur() {
        return $this->Secteur;
    }

    public function setSecteur($Secteur) {
        $this->Secteur = $Secteur;
    }
}

