<?php

namespace Pedagogie\PedagogieBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Pedagogie\PedagogieBundle\Entity\Departement;
use Pedagogie\PedagogieBundle\Entity\Filiere;
use Pedagogie\PedagogieBundle\Entity\Classe;
use Pedagogie\PedagogieBundle\Entity\Groupe;
use Pedagogie\PedagogieBundle\Entity\Discipline;
use Pedagogie\PedagogieBundle\Entity\Matiere;


class DisciplineController extends Controller
{
    
    private $allfiliere ;
    private $alldepartement ;
    private $allgroupe ;
    private $alldiscipline ;
    private $allmatiere ;
    private $allemploi ;
	private $alldevoir ;
	private $allvoeux ;
                                
   
   
   
   public function GetDepDisciplineAction()
   {
	  // On récupère la requête
		$request = $this->getRequest();
		// On récupère notre paramètre tag
		$tag = $request->request->get('tag');
		
		
		 
			$errors         = array();      // array to hold validation errors
			$data           = array();      // array to pass back data
			$disciplines    = array();    
			$response = new Response();
			
		
						// Request type is check Login
						
						// validate the variables ======================================================
					// if any of these variables don't exist, add an error to our $errors array
					
					if ($request->request->get('tag') !== null && $request->request->get('tag') != '') 
			{
                      
				// check for tag type
				if ($tag == 'getdepdis') 
				{
						$doctrine = $this->getDoctrine();
						$em = $doctrine->getManager();
						$nomdep = htmlspecialchars($request->request->get('nomdep'));
						$departement = $em->getRepository('PedagogiePedagogieBundle:Departement')->findOneById($nomdep);
						$alldis = $em->getRepository('PedagogiePedagogieBundle:Discipline')->findByDepartement($departement);
						$i = 0;
						foreach( $alldis as $dis )
						{
							$disciplines['dis'.$i] = array('discipline' => $dis->getDiscipline(),'disciplineid' => $dis->getId() );
							$i++;
						}
						
						if(empty($disciplines))
						{
							$data['success'] = false;
							$data['message'] = ' Erreur de recuperation des Disciplines - Aucune Discipline trouvé !';
							$errors['tag'] = "  Erreur de recuperation des Disciplines - Aucune Discipline trouvé ";
							$data['errors']  = $errors;
							$data['disciplines'] = $disciplines;
						}
						else
						{
							$data['success'] = true;
							$data['message'] = ' Recuperation des Disciplines Reussie !';
							$data["errors"] = false;
							$data['disciplines'] = $disciplines;
						}
						
						
						
				}
				else
				{
						
						
						$data['success'] = false;
						$data['message'] = ' Erreur de recuperation des Disciplines !';
						$errors['tag'] = " Parametre 'tag' = ".$tag." inconnu .";
						$data['errors']  = $errors;
						$data['disciplines'] = $disciplines;
						
				}
			}
			else
			{
						$data['success'] = false;
						$data['message'] = " Parametre 'tag' = ".$tag." inconnu . ";
						$errors['tag'] = " Parametre 'tag' = ".$tag." inconnu . ";
						$data['errors']  = $errors;
						$data['disciplines'] = $disciplines;
			}
			
			$response = new Response(json_encode($data));
			$response->headers->set('Content-Type', 'application/json');
			return $response;
   }
   
   
   
   public function GetFilDisciplineAction()
   {
	  // On récupère la requête
		$request = $this->getRequest();
		// On récupère notre paramètre tag
		$tag = $request->request->get('tag');
		
		
		 
			$errors         = array();      // array to hold validation errors
			$data           = array();      // array to pass back data
			$disciplines    = array();    
			$response = new Response();
			
		
						// Request type is check Login
						
						// validate the variables ======================================================
					// if any of these variables don't exist, add an error to our $errors array
					
					if ($request->request->get('tag') !== null && $request->request->get('tag') != '') 
			{
                      
				// check for tag type
				if ($tag == 'getfildis') 
				{
						$doctrine = $this->getDoctrine();
						$em = $doctrine->getManager();
						$nomfil = htmlspecialchars($request->request->get('nomfil'));
						$filiere = $em->getRepository('PedagogiePedagogieBundle:Filiere')->findOneById($nomfil);
						$alldis = $em->getRepository('PedagogiePedagogieBundle:Discipline')->findByFiliere($filiere);
						$i = 0;
						foreach( $alldis as $dis )
						{
							$disciplines['dis'.$i] = array('discipline' => $dis->getDiscipline(),'disciplineid' => $dis->getId() );
							$i++;
						}
						
						if($disciplines == null || empty($disciplines))
						{
							$data['success'] = false;
							$data['message'] = ' Erreur de recuperation des Disciplines - Aucune Discipline trouvé !';
							$errors['tag'] = "  Erreur de recuperation des Disciplines - Aucune Discipline trouvé ";
							$data['errors']  = $errors;
							$data['disciplines'] = $disciplines;
						}
						else
						{
							$data['success'] = true;
							$data['message'] = ' Recuperation des Disciplines Reussie !';
							$data["errors"] = false;
							$data['disciplines'] = $disciplines;
						}
						
						
						
				}
				else
				{
						
						
						$data['success'] = false;
						$data['message'] = ' Erreur de recuperation des Disciplines !';
						$errors['tag'] = " Parametre 'tag' = ".$tag." inconnu .";
						$data['errors']  = $errors;
						$data['disciplines'] = $disciplines;
						
				}
			}
			else
			{
						$data['success'] = false;
						$data['message'] = " Parametre 'tag' = ".$tag." inconnu . ";
						$errors['tag'] = " Parametre 'tag' = ".$tag." inconnu . ";
						$data['errors']  = $errors;
						$data['disciplines'] = $disciplines;
			}
			
			$response = new Response(json_encode($data));
			$response->headers->set('Content-Type', 'application/json');
			return $response;
   }
   
   public function GetGrpDisciplineAction()
   {
	  // On récupère la requête
		$request = $this->getRequest();
		// On récupère notre paramètre tag
		$tag = $request->request->get('tag');
		
		
		 
			$errors         = array();      // array to hold validation errors
			$data           = array();      // array to pass back data
			$disciplines    = array();    
			$response = new Response();
			
		
						// Request type is check Login
						
						// validate the variables ======================================================
					// if any of these variables don't exist, add an error to our $errors array
					
					if ($request->request->get('tag') !== null && $request->request->get('tag') != '') 
			{
                      
				// check for tag type
				if ($tag == 'getgrpdis') 
				{
						$doctrine = $this->getDoctrine();
						$em = $doctrine->getManager();
						$nomgrp = htmlspecialchars($request->request->get('nomgrp'));
						$groupe = $em->getRepository('PedagogiePedagogieBundle:Groupe')->findOneById($nomgrp);
						$alldis = $em->getRepository('PedagogiePedagogieBundle:Discipline')->findByGroupe($groupe);
						$i = 0;
						foreach( $alldis as $dis )
						{
							$disciplines['dis'.$i] = array('discipline' => $dis->getDiscipline(),'disciplineid' => $dis->getId() );
							$i++;
						}
						
						if(empty($disciplines))
						{
							$data['success'] = false;
							$data['message'] = ' Erreur de recuperation des Disciplines - Aucune Discipline trouvé !';
							$errors['tag'] = "  Erreur de recuperation des Disciplines - Aucune Discipline trouvé ";
							$data['errors']  = $errors;
							$data['disciplines'] = $disciplines;
						}
						else
						{
							$data['success'] = true;
							$data['message'] = ' Recuperation des Disciplines Reussie !';
							$data["errors"] = false;
							$data['disciplines'] = $disciplines;
						}
						
						
						
				}
				else
				{
						
						
						$data['success'] = false;
						$data['message'] = ' Erreur de recuperation des Disciplines !';
						$errors['tag'] = " Parametre 'tag' = ".$tag." inconnu .";
						$data['errors']  = $errors;
						$data['disciplines'] = $disciplines;
						
				}
			}
			else
			{
						$data['success'] = false;
						$data['message'] = " Parametre 'tag' = ".$tag." inconnu . ";
						$errors['tag'] = " Parametre 'tag' = ".$tag." inconnu . ";
						$data['errors']  = $errors;
						$data['disciplines'] = $disciplines;
			}
			
			$response = new Response(json_encode($data));
			$response->headers->set('Content-Type', 'application/json');
			return $response;
   }
   
   public function deletedisciplineAction()
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

					if (empty($request->request->get('nomdis')))
					{
						$errors['nomdis'] = "L'ID de la discipline est requis ";

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
						
						$nomdis = htmlspecialchars($request->request->get('nomdis'));
						$doctrine = $this->getDoctrine();
						$em = $doctrine->getManager();
						$repository_discipline = $em->getRepository('PedagogiePedagogieBundle:Discipline');
        
        
						$discipline = $repository_discipline->findOneById($nomdis);
						
						// Fonction Remove de EntityManager
						
						$em->remove($discipline); // Supprime l'entité de la base de données
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
    
  
    
    
    public function updatedisciplineAction()
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

					if (empty($request->request->get('iddis')))
					{
						$errors['iddis'] = "L'ID de la discipline est requis ";

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
						
						
                        $iddis = htmlspecialchars($request->request->get('iddis'));
                        $disname = htmlspecialchars($request->request->get('disname'));
						$olddisname = htmlspecialchars($request->request->get('olddisname'));
						
                        
						$doctrine = $this->getDoctrine();
						$em = $doctrine->getManager();
						
						$discipline = $em->getRepository('PedagogiePedagogieBundle:Discipline')->findOneById($iddis);
						$discipline->setDiscipline($disname);
						
						$em->persist($discipline);
						$em->flush(); // Exécute un UPDATE sur $discipline
                                                
                                                $data['success'] = true;
						$data['message'] = ' Modification Reussie !';
						$data["errors"] = false;
						$data['is_successful_login'] = true;
						
					}
					
			$response = new Response(json_encode($data));
			$response->headers->set('Content-Type', 'application/json');
			return $response;
                        
    }
    
    
    public function adddisciplineAction()
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

					if (empty($request->request->get('nomdis')))
					{
						$errors['username'] = "Le nom d'utilisateur l' enseignant est requis ";

					}
					
					if (empty($request->request->get('depdis')))
					{
						$errors['famname'] = "Le nom de famille de l'enseignant est requis ";

					}
					
					if (empty($request->request->get('fildis')))
					{
						$errors['surname'] = "Le prenom de l'enseignant est requis ";

					}
					
						if ( ! empty($errors)) 
					{

						// if there are items in our errors array, return those errors
						$data['success'] = false;
						$data['message'] = " Echec de l'ajout  !";
						$data['errors']  = $errors;
						
					}
					else
					{
						
						$nomdis = htmlspecialchars($request->request->get('nomdis'));
                        $nomdep = htmlspecialchars($request->request->get('depdis'));
                        $nomfil = htmlspecialchars($request->request->get('fildis'));
                        
                        
						$doctrine = $this->getDoctrine();
						$em = $doctrine->getManager();
						
						$departement = $em->getRepository('PedagogiePedagogieBundle:Departement')->findOneById($nomdep);
						$filiere = $em->getRepository('PedagogiePedagogieBundle:Filiere')->findOneById($nomfil);
						$discipline = $em->getRepository('PedagogiePedagogieBundle:Discipline')->findOneByDiscipline($nomdis);
						
						if($discipline == null || empty($discipline))
						{
						
								$discipline = new Discipline();
								$discipline->setDiscipline($nomdis);
								$discipline->addDepartement($departement);
								$discipline->addFiliere($filiere);
							
								$em->persist($discipline); // Modifie l'entité de la base de données	
								$em->flush(); // Exécute un UPDATE sur $enseignant
							
								$data['success'] = true;
								$data['message'] = ' Ajout Reussi !';
								$data["errors"] = false;
								$data['is_successful_login'] = true;
							
						}
						else
						{
								
							$discipline = $em->getRepository('PedagogiePedagogieBundle:Discipline')->findExistDepartement($nomdis,$departement);
							
							if($discipline == null || empty($discipline))
							{
								$discipline = $em->getRepository('PedagogiePedagogieBundle:Discipline')->findOneByDiscipline($nomdis);
								$discipline->addDepartement($departement);
								$discipline->addFiliere($filiere);
								$em->persist($discipline); // Modifie l'entité de la base de données	
								$em->flush(); // Exécute un UPDATE sur $enseignant
                        
								$data['success'] = true;
								$data['message'] = ' Ajout Reussi !';
								$data["errors"] = false;
								$data['is_successful_login'] = true;
							}
							else
							{
								
								$discipline = $em->getRepository('PedagogiePedagogieBundle:Discipline')->findExistFiliere($nomdis,$filiere);
								if( $discipline == null || empty($discipline) )
								{
									$discipline = $em->getRepository('PedagogiePedagogieBundle:Discipline')->findOneByDiscipline($nomdis);
									$discipline->addFiliere($filiere);
									$em->persist($discipline); // Modifie l'entité de la base de données	
									$em->flush(); // Exécute un UPDATE sur $enseignant
                        
									$data['success'] = true;
									$data['message'] = ' Ajout Reussi !';
									$data["errors"] = false;
									$data['is_successful_login'] = true;								
								}
								else
								{
									$data['success'] = false;
									$data['message'] = ' Cette Discipline existe deja dans ce departement et cette filiere !';
									$data["errors"] = true;
									$data['is_successful_login'] = true;								
								}
							}
							
						}
						
						
					}
					
			$response = new Response(json_encode($data));
			$response->headers->set('Content-Type', 'application/json');
			return $response;

    }
	
   public function DisciplineHandleAction()
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
                        $response = new Response();
			
			
		  if ($request->request->get('tag') !== null && $request->request->get('tag') != '') 
			{
                      
				// check for tag type
				if ($tag == 'deletedis') 
				{
                    $response = $this->deletedisciplineAction();
				}
				else if($tag == 'updatedis')
				{
					$response = $this->updatedisciplineAction();
				}
				else if($tag == 'adddis')
				{
					$response = $this->adddisciplineAction();
				}
				else 
				{
					// The tag is not login or register ==> failure
					
					$data['success'] = false;
					$data['message'] = " Parametre 'tag' = ".$tag." inconnu .";
					$errors['tag'] = " Parametre 'tag' = ".$tag." inconnu  .";
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
