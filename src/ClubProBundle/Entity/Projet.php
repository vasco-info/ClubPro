<?php

namespace ClubProBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Projet
 *
 * @ORM\Table(name="projet")
 * @ORM\Entity(repositoryClass="ClubProBundle\Repository\ProjetRepository")
 */
class Projet
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
     * @ORM\Column(name="nomProjet", type="string", length=100)
     */
    private $nomProjet;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=100)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="string", length=100)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="noteRcc", type="string", length=80)
     */
    private $noteRcc;

    /**
     * @var string
     *
     * @ORM\Column(name="delai", type="string", length=20)
     */
    private $delai;

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="string", length=80)
     */
    private $note;


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
     * Set nomProjet
     *
     * @param string $nomProjet
     *
     * @return Projet
     */
    public function setNomProjet($nomProjet)
    {
        $this->nomProjet = $nomProjet;

        return $this;
    }

    /**
     * Get nomProjet
     *
     * @return string
     */
    public function getNomProjet()
    {
        return $this->nomProjet;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Projet
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Projet
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set noteRcc
     *
     * @param string $noteRcc
     *
     * @return Projet
     */
    public function setNoteRcc($noteRcc)
    {
        $this->noteRcc = $noteRcc;

        return $this;
    }

    /**
     * Get noteRcc
     *
     * @return string
     */
    public function getNoteRcc()
    {
        return $this->noteRcc;
    }

    /**
     * Set delai
     *
     * @param string $delai
     *
     * @return Projet
     */
    public function setDelai($delai)
    {
        $this->delai = $delai;

        return $this;
    }

    /**
     * Get delai
     *
     * @return string
     */
    public function getDelai()
    {
        return $this->delai;
    }

    /**
     * Set note
     *
     * @param string $note
     *
     * @return Projet
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @ORM\ManyToOne(targetEntity="User")
     */
    private $client;
    
     /**
     * @ORM\ManyToOne(targetEntity="User")
     */
    private $four;
    
    function getFour() {
        return $this->four;
    }

    function setFour($four) {
        $this->four = $four;
    }

        
    function getClient() {
        return $this->client;
    }

    function setClient($client) {
        $this->client = $client;
    }

    /**
     * 
     *
     * @ORM\ManyToOne(targetEntity="Soussecteur")
     */
    private $Soussecteur;
    
    
    
    public function getSoussecteur() {
        return $this->Soussecteur;
    }

    public function setSoussecteur($Soussecteur) {
        $this->Soussecteur = $Soussecteur;
    }

}

