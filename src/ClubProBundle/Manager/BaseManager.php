<?php
namespace ClubProBundle\Manager;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BaseManager
 *
 * @author INVENT STUDIO
 */
abstract class BaseManager {
   
    protected function persistAndFlush($entity)
    {
        if($entity->getId() != 0){
            $this->em->merge($entity);
            $this->em->flush();
        }else{
            $this->em->persist($entity);
            $this->em->flush();
        }
        
    }

    protected function deleteAndFlush($entity)
    {
        $this->em->remove($entity);
        $this->em->flush();
    }
}
