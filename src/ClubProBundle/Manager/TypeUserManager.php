<?php
namespace ClubProBundle\Manager;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use ClubProBundle\Entity\TypeUser;
use Doctrine\ORM\EntityManager;
/**
 * Description of TypeUserManager
 *
 * @author INVENT STUDIO
 */
class TypeUserManager extends BaseManager{
    //put your code here
    
    protected $em;
    
    public function __construct(EntityManager $em){
        $this->em = $em;
    }

    public function saveTypeUser(TypeUser $typeUser){
        $this->persistAndFlush($typeUser);
        return true;
    }
    
    public function deleteTypeUser(int $idType){
        $tu = $this->typeUserDetails($idType);
        $this->deleteAndFlush($tu);        
        return true;
    }
    
    public function typeUserDetails(int $idType){
        return $this->getRepository()->find($idType);
    }
    
    public function typeUserList(){
        return $this->getRepository()->findAll();
    }
    
    public function getRepository()
    {
        return $this->em->getRepository('ClubProBundle:TypeUser');
    }
}