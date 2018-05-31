<?php
namespace ClubProBundle\Manager;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
use ClubProBundle\Entity\User;
use Doctrine\ORM\EntityManager;
/**
 * Description of UserManager
 *
 * @author V45C0
 */
class UserManager extends BaseManager{
    
    
    protected $em;
    
    public function __construct(EntityManager $em) {
        $this->em = $em;
    }
    
    public function saveUser(User $user){
        $this->persistAndFlush($user);
        return true;
            
    }
    
    public function userDetails(int $idUser){
        return $this->getRepository()->find($idUser);
    }
    
    public function deleteUser(int $idUser){
        $users = $this->userDetails($idUser);
        $this->deleteAndFlush($users);        
        return true;
    }
    
    public function userList(){
        return $this->getRepository()->findAll();
    }
    
    public function getRepository(){
        return $this->em->getRepository('ClubProBundle:User');
    }
    
    
}
