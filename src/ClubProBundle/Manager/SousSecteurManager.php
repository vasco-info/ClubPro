<?php
namespace ClubProBundle\Manager;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use ClubProBundle\Entity\Soussecteur;
use Doctrine\ORM\EntityManager;
/**
 * Description of SousSecteurManager
 *
 * @author V45C0
 */
class SousSecteurManager extends BaseManager {
    
    
    protected $em;
    
    public function __construct(EntityManager $em) {
        $this->em = $em;
    }
    
    public function saveSousSecteur(Soussecteur $soussec){
        $this->persistAndFlush($soussec);
        return true;
            
    }
    
    public function sousSecDetails(int $idSousSec){
        return $this->getRepository()->find($idSousSec);
    }
    
    public function deleteSousSec(int $idSousSec){
        $sousSec = $this->sousSecDetails($idSousSec);
        $this->deleteAndFlush($sousSec);        
        return true;
    }
    
    public function sousSecList(){
        return $this->getRepository()->findAll();
    }
    
    public function getRepository(){
        return $this->em->getRepository('ClubProBundle:Soussecteur');
    }
    
}
