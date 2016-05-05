<?php

namespace Pedagogie\PedagogieBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Pedagogie\PedagogieBundle\Entity\Groupe;


class GroupeController extends Controller
{
    
     private $allfiliere ;
    private $alldepartement ;
    private $allgroupe ;
    private $alldiscipline ;
    private $allmatiere ;
    private $allemploi ;
	private $alldevoir ;
	private $allvoeux ;
                                
   
   
   public function GetClsGroupeAction()
   {
	  // On récupère la requête
		$request = $this->getRequest();
		// On récupère notre paramètre tag
		$tag = $request->request->get('tag');
		
		
		 
			$errors         = array();      // array to hold validation errors
			$data           = array();      // array to pass back data
			$groupes        = array();    
			$response = new Response();
			
		
						// Request type is check Login
						
						// validate the variables ======================================================
					// if any of these variables don't exist, add an error to our $errors array
					
					if ($request->request->get('tag') !== null && $request->request->get('tag') != '') 
			{
                      
				// check for tag type
				if ($tag == 'getclsgrp') 
				{
						$doctrine = $this->getDoctrine();
						$em = $doctrine->getManager();
						$nomcls = htmlspecialchars($request->request->get('nomcls'));
						$classe = $em->getRepository('PedagogiePedagogieBundle:Classe')->findOneById($nomcls);
						$allgrp = $em->getRepository('PedagogiePedagogieBundle:Groupe')->findByClasse($classe);
						$i = 0;
						foreach( $allgrp as $grp )
						{
							$groupes['grp'.$i] = array('groupe' => $grp->getGroupe(),'groupeid' => $grp->getId() );
							$i++;
						}
						
						if(empty($groupes))
						{
							$data['success'] = false;
							$data['message'] = ' Erreur de recuperation des Groupes - Aucun Groupe trouvé !';
							$errors['tag'] = " Parametre 'tag' = ".$tag." inconnu .";
							$data['errors']  = $errors;
							$data['groupes'] = $groupes;
						}
						else
						{
							$data['success'] = true;
							$data['message'] = ' Recuperation des Groupes Reussie !';
							$data["errors"] = false;
							$data['groupes'] = $groupes;
						}
						
						
						
				}
				else
				{
						
						
						$data['success'] = false;
						$data['message'] = ' Erreur de recuperation des Groupes !';
						$errors['tag'] = " Parametre 'tag' = ".$tag." inconnu .";
						$data['errors']  = $errors;
						$data['groupes'] = $groupes;
						
				}
			}
			else
			{
						$data['success'] = false;
						$data['message'] = " Parametre 'tag' = ".$tag." inconnu . ";
						$errors['tag'] = " Parametre 'tag' = ".$tag." inconnu . ";
						$data['errors']  = $errors;
						$data['groupes'] = $groupes;
			}
			
			$response = new Response(json_encode($data));
			$response->headers->set('Content-Type', 'application/json');
			return $response;
   }
   
  
   
   public function deletegroupeAction()
    {
        // On récupère la requête
		$request = $this->getRequest();
		// On récupère notre paramètre tag
		$tag = $request->request->get('tag');
		
		
			/**
			 * File to handle all API requests
			 * Accepts GET and POST
			 * 
			 * Each request will be identified by TAG
			 * Response will be JSON data
			 
			  /**
			 * check for POST request 
			 */
		 
			$errors         = array();      // array to hold validation errors
			$data           = array();      // array to pass back data
	 	// Request type is check Login
						
						// validate the variables ======================================================
					// if any of these variables don't exist, add an error to our $errors array

					if (empty($request->request->get('nomgrp')))
					{
						$errors['nomgrp'] = 'Le nom du groupe est requis ';

					}

					
					
						if ( ! empty($errors)) 
					{

						// if there are items in our errors array, return those errors
						$data['success'] = false;
						$data['message'] = ' Echec de suppression !';
						$data['errors']  = $errors;
						
					}
					else
					{
						
						$nomgrp = htmlspecialchars($request->request->get('nomgrp'));
						$doctrine = $this->getDoctrine();
						$em = $doctrine->getManager();
						$repository_groupe = $em->getRepository('PedagogiePedagogieBundle:Groupe');
        
        
						$groupes = $repository_groupe->findOneByGroupe($nomgrp);
						
						// Fonction Remove de EntityManager
						$em->remove($groupes); // Supprime l'entité de la base de données
						$em->flush(); // Exécute un DELETE sur $article
                                                
                                                $data['success'] = true;
						$data['message'] = ' Suppression Reussie !';
						$data["errors"] = false;
						$data['is_successful_login'] = true;
						
					}
					
			$response = new Response(json_encode($data));
			$response->headers->set('Content-Type', 'application/json');
			return $response;
		
		
        
    }
    
    
    
    
    public function updategroupeAction()
    {
        // On récupère la requête
		$request = $this->getRequest();
		// On récupère notre paramètre tag
		$tag = $request->request->get('tag');
		
		
			/**
			 * File to handle all API requests
			 * Accepts GET and POST
			 * 
			 * Each request will be identified by TAG
			 * Response will be JSON data
			 
			  /**
			 * check for POST request 
			 */
		 
			$errors         = array();      // array to hold validation errors
			$data           = array();      // array to pass back data
	 
			
		
						// Request type is check Login
						
						// validate the variables ======================================================
					// if any of these variables don't exist, add an error to our $errors array

					if (empty($request->request->get('nomgrp')))
					{
						$errors['nomgrp'] = 'Le nom du groupe est requis ';

					}
                    
					if (empty($request->request->get('oldgrpname')))
					{
						$errors['oldgrpname'] = 'L\'ancien nom du groupe est requis ';
					}

						if ( ! empty($errors)) 
					
					{
						// if there are items in our errors array, return those errors
						$data['success'] = false;
						$data['message'] = ' Echec de Modification !';
						$data['errors']  = $errors;
						
					}
					else
					{
						
						$nomgrp = htmlspecialchars($request->request->get('oldgrpname'));
						$doctrine = $this->getDoctrine();
						$em = $doctrine->getManager();
						$departement = $em->getRepository('PedagogiePedagogieBundle:Departement')->findOneByDepartement(htmlspecialchars($request->request->get('depgrp'))) ;
						$filiere = $em->getRepository('PedagogiePedagogieBundle:Filiere')->findOneByFiliere(htmlspecialchars($request->request->get('filgrp')));
						$classes = $em->getRepository('PedagogiePedagogieBundle:Classe')->findOneByClasse(htmlspecialchars($request->request->get('clsgrp')));
						
						$groupes = $em->getRepository('PedagogiePedagogieBundle:Groupe')->findOneByGroupe($nomgrp);
						$groupes->setGroupe(htmlspecialchars($request->request->get('nomgrp')));
						$groupes->setClasse($classes);
						$groupes->setFiliere($filiere); 
						$groupes->setDepartement($departement);
						
						// Fonction Remove de EntityManager
						$em->persist($groupes); // Modifie l'entité de la base de données
						$em->flush(); // Exécute un UPDATE sur $filiere
                                                
                                                $data['success'] = true;
						$data['message'] = ' Modification Reussie !';
						$data["errors"] = false;
						$data['is_successful_login'] = true;
						
					}
					
			$response = new Response(json_encode($data));
			$response->headers->set('Content-Type', 'application/json');
			return $response;
                        
    }
    
    
    public function addgroupeAction()
    {
        // On récupère la requête
		$request = $this->getRequest();
		// On récupère notre paramètre tag
		$tag = $request->request->get('tag');
		
		
			include('includes/files/config.php');
			/**
			 * File to handle all API requests
			 * Accepts GET and POST
			 * 
			 * Each request will be identified by TAG
			 * Response will be JSON data
			 
			  /**
			 * check for POST request 
			 */
		 
			$errors         = array();      // array to hold validation errors
			$data           = array();      // array to pass back data
	 
			
		
						// Request type is check Login
						
						// validate the variables ======================================================
					// if any of these variables don't exist, add an error to our $errors array

					if (empty($request->request->get('nomgrp')))
					{
						$errors['nomcls'] = 'La classe du groupe est requis ';

					}
					if (empty($request->request->get('clsgrp')))
					{
						$errors['nomcls'] = 'La classe du groupe est requis ';

					}
				
					if (empty($request->request->get('filgrp')))
					{
						$errors['nomcls'] = 'La filiere du groupe est requis ';

					}
					if (empty($request->request->get('depgrp')))
					{
						$errors['nomcls'] = 'Le departement du groupe est requis ';

					}

						if ( ! empty($errors)) 
					{

						// if there are items in our errors array, return those errors
						$data['success'] = false;
						$data['message'] = " Echec de l'ajout de la classe  !";
						$data['errors']  = $errors;
						
					}
					else
					{
						
						$nomgrp = htmlspecialchars($request->request->get('nomgrp'));
						$nomfil = htmlspecialchars($request->request->get('filgrp'));
                        $nomdep = htmlspecialchars($request->request->get('depgrp'));
						$nomcls = htmlspecialchars($request->request->get('clsgrp'));
	
						$doctrine = $this->getDoctrine();
						$em = $doctrine->getManager();
						
						$departement = $em->getRepository('PedagogiePedagogieBundle:Departement')->findOneByDepartement($nomdep);
						$filiere = $em->getRepository('PedagogiePedagogieBundle:Filiere')->findOneByFiliere($nomfil);
						$classes = $em->getRepository('PedagogiePedagogieBundle:Classe')->findOneByClasse($nomcls);
						
						$groupes = new Groupe();
						$groupes->setGroupe($nomgrp);
						$groupes->setClasse($classes);
						$groupes->setFiliere($filiere);
						$groupes->setDepartement($departement);
						
						
						$em->persist($groupes); // Modifie l'entité de la base de données
						$em->flush(); // Exécute un UPDATE sur $groupes
                                                
                        $data['success'] = true;
						$data['message'] = ' Ajout Reussi !';
						$data["errors"] = false;
						$data['is_successful_login'] = true;
						
					}
					
			$response = new Response(json_encode($data));
			$response->headers->set('Content-Type', 'application/json');
			return $response;

    }
    
    public function GroupeHandleAction()
    {
         // On récupère la requête
		$request = $this->getRequest();
		// On récupère notre paramètre tag
		$tag = $request->request->get('tag');
		
		
			include('includes/files/config.php');
			/**
			 * File to handle all API requests
			 * Accepts GET and POST
			 * 
			 * Each request will be identified by TAG
			 * Response will be JSON data
			 
			  /**
			 * check for POST request 
			 */
		 
			$errors         = array();      // array to hold validation errors
			$data           = array();      // array to pass back data
                        $response = new Response();
			
			
		  if ($request->request->get('tag') !== null && $request->request->get('tag') != '') 
			{
                      
				// check for tag type
				if ($tag == 'deletegrp') 
				{
                    $response = $this->deletegroupeAction();
				}
				else if($tag == 'updategrp')
				{
					$response = $this->updategroupeAction();
				}
				else if($tag == 'addgrp')
				{
					$response = $this->addgroupeAction();
				}
				else 
				{
					// The tag is not login or register ==> failure
					
					$data['success'] = false;
					$data['message'] = " Parametre 'tag' = ".$tag." inconnu .";
					$errors['tag'] = " Parametre 'tag' = ".$tag." inconnu .";
					$data['errors']  = $errors;
					
					
					
					
			   
				}
			} 
			else 
			{
			
			$data['success'] = false;
			$data['message'] = "Parametre 'tag' requis  !";
			$errors['tag'] = "Parametre 'tag' requis  ! .";
			$data['errors']  = $errors;
			
			
			}
			
			return $response;
		
    }
	
	
}
