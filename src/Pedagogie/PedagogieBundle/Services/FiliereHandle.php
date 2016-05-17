<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FiliereHandle
 *
 * @author MouhamadouTidianeElB
 */
namespace Pedagogie\PedagogieBundle\Services;
// Attention à bien ajouter ce use en début de contrôleur
use Pedagogie\PedagogieBundle\Entity\Transaction;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class FiliereHandle {
    //put your code here
    
    private $allfiliere ;
    private $alldepartement ;
    private $allgroupe ;
    private $allmatiere ;
    private $alldiscipline ;
	private $allclasse ;
    private $allenseignant ;
	private $allsituation ;
	private $allgrade ;
	private $alldevoir ;
	private $allvoeux ;
	private $allemploi ;
	private $alllieux ;
	private $allsalle ;
	private $allnature ;
    private $allsemestre ;
	private $allperiode ;
	private $allmodule ;
	
	
	public function getAllDepartement($controleur) {
        
        $doctrine = $controleur->getDoctrine();
        $em = $doctrine->getManager();
        $repository_departement = $em->getRepository('PedagogiePedagogieBundle:Departement');
        $this->alldepartement = $repository_departement->findAll();
        return $this->alldepartement;

    }
	
    public function getAllFiliere($controleur) {
        
        $doctrine = $controleur->getDoctrine();
        $em = $doctrine->getManager();
        $repository_filiere = $em->getRepository('PedagogiePedagogieBundle:Filiere');
        $this->allfiliere = $repository_filiere->findAll();
        return $this->allfiliere;

    }
    
   	
	public function getAllClasse($controleur) {
        
        $doctrine = $controleur->getDoctrine();
        $em = $doctrine->getManager();
        $repository_classe = $em->getRepository('PedagogiePedagogieBundle:Classe');
        $this->allclasse = $repository_classe->findAll();
        return $this->allclasse;

    }
	
    
   
    
    public function getAllGroupe($controleur) {
        
        $doctrine = $controleur->getDoctrine();
        $em = $doctrine->getManager();
        $repository_groupe = $em->getRepository('PedagogiePedagogieBundle:Groupe');
        $this->allgroupe = $repository_groupe->findAll();
        return $this->allgroupe;

    }
    
   
    
    public function getAllDiscipline($controleur) {
        
        $doctrine = $controleur->getDoctrine();
        $em = $doctrine->getManager();
        $repository_discipline = $em->getRepository('PedagogiePedagogieBundle:Discipline');
        $this->alldiscipline = $repository_discipline->findAll();
        return $this->alldiscipline;

    }
	
	 public function getAllMatiere($controleur) {
        
        $doctrine = $controleur->getDoctrine();
        $em = $doctrine->getManager();
        $repository_matiere = $em->getRepository('PedagogiePedagogieBundle:Matiere');
        $this->allmatiere = $repository_matiere->findAll();
        return $this->allmatiere;

    }

	 public function getAllEmploi($controleur) {
        
        $doctrine = $controleur->getDoctrine();
        $em = $doctrine->getManager();
        $repository_emploi = $em->getRepository('PedagogiePedagogieBundle:Emploi');
        $this->allemploi = $repository_emploi->findAll();
        return $this->allemploi;

    }
    
		
	 public function getAllEnseignant($controleur) {
        
        $doctrine = $controleur->getDoctrine();
        $em = $doctrine->getManager();
        $repository_enseignant = $em->getRepository('PedagogiePedagogieBundle:Enseignant');
        $this->allenseignant = $repository_enseignant->findAll();
        return $this->allenseignant;

    }
	
	
	 public function getAllGrade($controleur) {
        
        $doctrine = $controleur->getDoctrine();
        $em = $doctrine->getManager();
        $repository_grade = $em->getRepository('PedagogiePedagogieBundle:Grades');
        $this->allgrade = $repository_grade->findAll();
        return $this->allgrade;

    }

	
	 public function getAllSituation($controleur) {
        
        $doctrine = $controleur->getDoctrine();
        $em = $doctrine->getManager();
        $repository_situation = $em->getRepository('PedagogiePedagogieBundle:Situations');
        $this->allsituation = $repository_situation->findAll();
        return $this->allsituation;

    }

	
	 public function getAllDevoir($controleur) {
        
        $doctrine = $controleur->getDoctrine();
        $em = $doctrine->getManager();
        $repository_devoir = $em->getRepository('PedagogiePedagogieBundle:Devoir');
        $this->alldevoir = $repository_devoir->findAll();
        return $this->alldevoir;

    }
	
	
	 public function getAllVoeux($controleur) {
        
        $doctrine = $controleur->getDoctrine();
        $em = $doctrine->getManager();
        $repository_voeux = $em->getRepository('PedagogiePedagogieBundle:Voeux');
        $this->allvoeux = $repository_voeux->findAll();
        return $this->allvoeux;

    }
	
	 public function getAllSalle($controleur) {
        
        $doctrine = $controleur->getDoctrine();
        $em = $doctrine->getManager();
        $repository_salle = $em->getRepository('PedagogiePedagogieBundle:Salle');
        $this->allsalle = $repository_salle->findAll();
        return $this->allsalle;

    }
	
	 public function getAllLieux($controleur) {
        
        $doctrine = $controleur->getDoctrine();
        $em = $doctrine->getManager();
        $repository_lieux = $em->getRepository('PedagogiePedagogieBundle:Lieux');
        $this->alllieux = $repository_lieux->findAll();
        return $this->alllieux;

    }
	
	 public function getAllNature($controleur) {
        
        $doctrine = $controleur->getDoctrine();
        $em = $doctrine->getManager();
        $repository_nature = $em->getRepository('PedagogiePedagogieBundle:Nature');
        $this->allnature = $repository_nature->findAll();
        return $this->allnature;

    }
	
	 public function getAllSemestre($controleur) {
        
        $doctrine = $controleur->getDoctrine();
        $em = $doctrine->getManager();
        $repository_semestre = $em->getRepository('PedagogiePedagogieBundle:Semestre');
        $this->allsemestre = $repository_semestre->findAll();
        return $this->allsemestre;

    }
	
	 public function getAllPeriode($controleur) {
        
        $doctrine = $controleur->getDoctrine();
        $em = $doctrine->getManager();
        $repository_periode = $em->getRepository('PedagogiePedagogieBundle:Periode');
        $this->allperiode = $repository_periode->findAll();
        return $this->allperiode;

    }
	
	
	public function getAllModule($controleur) {
        
        $doctrine = $controleur->getDoctrine();
        $em = $doctrine->getManager();
        $repository_Module = $em->getRepository('PedagogiePedagogieBundle:Module');
        $this->allModule = $repository_Module->findAll();
        return $this->allModule;

    }

	public function saveAction($controleur,$userid,$typeact,$descaction) 
	{
        // On récupère la requête
		
        $doctrine = $controleur->getDoctrine();
        $em = $doctrine->getManager();
		
        $user = $em->getRepository('PedagogiePedagogieBundle:Utilisateur')->findOneById($userid);
		$transaction = new Transaction();
		$transaction->setUtilisateur($user);
		$transaction->setNomuser($user->getNom().' '.$user->getPrenom());
		$transaction->setTypetransaction($typeact); 
		$transaction->setDescrtiption($descaction);
		$transaction->setDateTransaction();
		$em->persist($transaction); // Modifie l'entité de la base de données
		$em->flush(); // Exécute un UPDATE sur $filiere
    
    }



    
}
