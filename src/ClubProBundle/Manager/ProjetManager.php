<?php
namespace ClubProBundle\Manager;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use ClubProBundle\Entity\Projet;
use Doctrine\ORM\EntityManager;
/**
 * Description of ProjetManager
 *
 * @author INVENT STUDIO
 */
class ProjetManager extends BaseManager {
    //put your code here
    protected $em;
    
    public function __construct(EntityManager  $em) {
        $this->em = $em;
    }
    
    public function projetList(){
        return $this->getRepository()->findAll();
    }
    
    
    
    public function saveProjet(Projet $Projet) {
        $this->persistAndFlush($Projet);
        return true;
        
    }
    
     public function deleteProjet(int $idProjet){
        $Pr = $this->projetDetails($idProjet);
        $this->deleteAndFlush($Pr);        
        return true;
    }
    
    public function projetDetails(int $idProjet){
        return $this->getRepository()->find($idProjet);
    }
   
    
    public function getRepository()
    {
        return $this->em->getRepository('ClubProBundle:Projet');
    }
    
}
