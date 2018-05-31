<?php

namespace ClubProBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\Post;
use FOS\RestBundle\Controller\Annotations\View;
use ClubProBundle\Manager\UserManager;
use Doctrine\ORM\EntityManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use ClubProBundle\Entity\TypeUser;
use ClubProBundle\Entity\Soussecteur;
use ClubProBundle\Entity\Projet;
use ClubProBundle\Entity\Secteur;
use ClubProBundle\Entity\User;

class DefaultController extends Controller
{
    
   /**
     *@Get(
     *     path = "/typeUsers",
     *     name = "listTypeUser"
     * )
     *@View
     */
    public function listTypeUserAction()
    {
        $type_users = $this->get('cpb.type_user_manager')->typeUserList();
        return $type_users;
    }
    
    
    /**
     *@Get(
     *     path = "/typeUser/{id}",
     *     name = "detailsTypeUser"
     * )
     *@View
     */
    public function detailsTypeUserAction(int $id)
    {
        $type_user = $this->get('cpb.type_user_manager')->typeUserDetails($id);
        return $type_user;
    }
    
    
    
    /**
     *@Get(
     *     path = "/deleteTypeUser/{id}",
     *     name = "deleteTypeUser"
     * )
     *@View
     */
    public function deleteTypeUserAction(int $id)
    {
        $isDelete = $this->get('cpb.type_user_manager')->deleteTypeUser($id);
        return $isDelete;
    }
    
     /**
     *@Post(
     *     path = "/saveTypeUser",
     *     name = "saveTypeUser"
     * )
     *@View
     *@ParamConverter("typeUser", converter="fos_rest.request_body")
     */
    public function saveTypeUserAction(TypeUser $typeUser)
    {
        $isSave = $this->get('cpb.type_user_manager')->saveTypeUser($typeUser);
        return $isSave;
    }
    
    
    //Fonctions de base pour l'entité sous secteur
    
    /**
     *@Get(
     *     path = "/sousSecteurs",
     *     name = "listSousSecteur"
     * )
     *@View
     */
    public function listSousSecteurAction()
    {
        $sousSecteur = $this->get('cpb.sous_secteur_manager')->sousSecList();
        return $sousSecteur;
    }
    
    
    /**
     *@Get(
     *     path = "/sousSecteur/{id}",
     *     name = "detailsSousSecteur"
     * )
     *@View
     */
    public function detailsSousSecteurAction(int $id)
    {
        $sousSecteur = $this->get('cpb.sous_secteur_manager')->sousSecDetails($id);
        return $sousSecteur;
    }
    
    
    
    /**
     *@Get(
     *     path = "/deleteSousSecteur/{id}",
     *     name = "deleteSousSecteur"
     * )
     *@View
     */
    public function deleteSousSecteurAction(int $id)
    {
        $isDelete = $this->get('cpb.sous_secteur_manager')->deleteSousSec($id);
        return $isDelete;
    }
    
     /**
     *@Post(
     *     path = "/saveSousSecteur",
     *     name = "saveSousSecteur"
     * )
     *@View
     *@ParamConverter("sousSecteur", converter="fos_rest.request_body")
     */
    public function saveSousSecteurAction(Soussecteur $sousSecteur)
    {
        $isSave = $this->get('cpb.sous_secteur_manager')->saveSousSecteur($sousSecteur);
        return $isSave;
    }
    
    
    
    //Fonctions pour l'entité Projet
    
    /**
     *@Get(
     *     path = "/projets",
     *     name = "listProjet"
     * )
     *@View
     */
    public function listProjetAction()
    {
        $projets = $this->get('cpb.projet_manager')->projetList();
        return $projets;
    }
    
    
    /**
     *@Get(
     *     path = "/projet/{id}",
     *     name = "detailProjet"
     * )
     *@View
     */
    public function detailsProjetAction(int $id)
    {
        $projet = $this->get('cpb.projet_manager')->projetDetails($id);
        return $projet;
    }
    
    
    
    /**
     *@Get(
     *     path = "/deleteProjet/{id}",
     *     name = "deleteProjet"
     * )
     *@View
     */
    public function deleteProjetAction(int $id)
    {
        $isDelete = $this->get('cpb.projet_manager')->deleteProjet($id);
        return $isDelete;
    }
    
     /**
     *@Post(
     *     path = "/saveProjet",
     *     name = "saveProjet"
     * )
     *@View
     *@ParamConverter("projet", converter="fos_rest.request_body")
     */
    public function saveProjetAction(Projet $projet)
    {
        $isSave = $this->get('cpb.projet_manager')->saveProjet($projet);
        return $isSave;
    }
    
    //Codes pour l'entité Secteur
    
      /**
     *@Get(
     *path = "/secteurs",
     *name = "listSecteurs"
     * )
     *@View
     */
    public function listSecteurAction()
    {
        $secteur = $this->get('cpb.secteur_manager')->secteurList();
        return $secteur;
    }
    
    /**
     *@Get(
     *     path = "/secteur/{id}",
     *     name = "detailsSecteur"
     * )
     *@View
     */
    public function detailsSecteurAction(int $id)
    {
        $secteur = $this->get('cpb.secteur_manager')->secteurDetails($id);
        return $secteur;
    }
    
    
    
    /**
     *@Get(
     *     path = "/deleteSecteur/{id}",
     *     name = "deleteSecteur"
     * )
     *@View
     */
    public function deleteSecteurAction(int $id)
    {
        $isDelete = $this->get('cpb.secteur_manager')->deleteSecteur($id);
        return $isDelete;
    }
    
     /**
     *@Post(
     *     path = "/saveSecteur",
     *     name = "saveSecteur"
     * )
     *@View
     *@ParamConverter("secteur", converter="fos_rest.request_body")
     */
    public function saveSecteurAction(Secteur $secteur)
    {
        $isSave = $this->get('cpb.secteur_manager')->saveSecteur($secteur);
        return $isSave;
    }
    
    
    //Codes pour l'entité User
    
      /**
     *@Get(
     *path = "/users",
     *name = "listUsers"
     * )
     *@View
     */
    public function listUserAction()
    {
        $users = $this->get('cpb.user_manager')->userList();
        return $users;
    }
    
    /**
     *@Get(
     *     path = "/user/{id}",
     *     name = "detailUser"
     * )
     *@View
     */
    public function detailsUserAction(int $id)
    {
        $users = $this->get('cpb.user_manager')->userDetails($id);
        return $users;
    }
    
    
    
    /**
     *@Get(
     *     path = "/deleteUser/{id}",
     *     name = "deleteUser"
     * )
     *@View
     */
    public function deleteUserAction(int $id)
    {
        $isDelete = $this->get('cpb.user_manager')->deleteUser($id);
        return $isDelete;
    }
    
     /**
     *@Post(
     *     path = "/saveUser",
     *     name = "saveUser"
     * )
     *@View
     *@ParamConverter("user", converter="fos_rest.request_body")
     */
    public function saveUserAction(User $user)
    {
        $isSave = $this->get('cpb.user_manager')->saveUser($user);
        return $isSave;
    }
    
    
    
    
    
    
    
    
}
