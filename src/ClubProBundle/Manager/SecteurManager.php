<?php
namespace ClubProBundle\Manager;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use ClubProBundle\Entity\Secteur;
use Doctrine\ORM\EntityManager;
/**
 * Description of SecteurManager
 *
 * @author INVENT STUDIO
 */
class SecteurManager extends BaseManager {
    //put your code here
    protected $em;
    
    public function __construct(EntityManager $em) {
        $this->em =$em;
    }
    
    public function saveSecteur(Secteur $Secteur) {
        $this->persistAndFlush($Secteur);
        return true;
        
    }
    
     public function deleteSecteur(int $idSecteur){
        $Se = $this->secteurDetails($idSecteur);
        $this->deleteAndFlush($Se);        
        return true;
    }
    
    public function secteurDetails(int $idSecteur){
        return $this->getRepository()->find($idSecteur);
    }
    
    public function secteurList(){
        return $this->getRepository()->findAll();
    }
    
    public function getRepository()
    {
        return $this->em->getRepository('ClubProBundle:Secteur');
    }
}
