<?php

namespace Pedagogie\PedagogieBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Pedagogie\PedagogieBundle\Entity\Mutex;

class MutexController extends Controller
{
    
    private $allfiliere ;
    private $alldepartement ;
    private $allgroupe ;
    private $alldiscipline ;
    private $allmatiere ;
    private $allemploi ;
	private $alldevoir ;
	private $allvoeux ;
                                
   
   
   public function GetMutexAction()
   {
	  // On récupère la requête
		$request = $this->getRequest();
		// On récupère notre paramètre tag
		$tag = $request->request->get('tag');
		
		
		 
			$errors         = array();      // array to hold validation errors
			$data           = array();      // array to pass back data
			$filiere        = array();    
			$response = new Response();
			
		
						// Request type is check Login
						
						// validate the variables ======================================================
					// if any of these variables don't exist, add an error to our $errors array
					
					if ($request->request->get('tag') !== null && $request->request->get('tag') != '') 
			{
                      
				// check for tag type
				if ($tag == 'getmutex') 
				{
						$doctrine = $this->getDoctrine();
						$em = $doctrine->getManager();
						$typemutex = htmlspecialchars($request->request->get('typemutex'));
						
						$allmutex = $em->getRepository('PedagogiePedagogieBundle:Mutex')->findOneBy(array('typemutex' =>$typemutex,'etat' => 1));
						
						
						if(empty($allmutex) || $allmutex == null )
						{
							$data['success'] = true;
							$data['message'] = ' Recuperation du mutex reussie !';
							$data["errors"] = false;
							$data['username'] = false;
							
							
						}
						else
						{
							
							$utilisateur = $em->getRepository('PedagogiePedagogieBundle:Utilisateur')->findOneById($allmutex->getUtilisateur());
							$nomuser = $utilisateur->getPrenom().' '.$utilisateur->getNom();
							$data['success'] = false;
							$data['message'] = "Erreur d'assignation du mutex ";
							$errors['mutex'] = "Erreur d'assignation du mutex ";
							$data['errors']  = $errors;
							$data['username'] = $nomuser;
						}
						
						
						
				}
				else
				{
						
						
						$data['success'] = false;
						$data['message'] = ' Erreur de recuperation des mutex !';
						$errors['tag'] = " Parametre 'tag' = ".$tag." inconnu .";
						$data['errors']  = $errors;
						$data['filiere'] = $filiere;
						
				}
			}
			else
			{
						$data['success'] = false;
						$data['message'] = " Parametre 'tag' = ".$tag." inconnu . ";
						$errors['tag'] = " Parametre 'tag' = ".$tag." inconnu . ";
						$data['errors']  = $errors;
						$data['filiere'] = $filiere;
			}
			
			$response = new Response(json_encode($data));
			$response->headers->set('Content-Type', 'application/json');
			return $response;
   }
   
    public function deletemutAction()
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

					if (empty($request->request->get('iduser')))
					{
						$errors['iduser'] = "L'id de l'utilisateur est requis ";

					}

						if ( ! empty($errors)) 
					{

						// if there are items in our errors array, return those errors
						$data['success'] = false;
						$data['message'] = ' Echec de suppression du mutex !';
						$data['errors']  = $errors;
						
					}
					else
					{
						
						$iduser = htmlspecialchars($request->request->get('iduser'));
						$doctrine = $this->getDoctrine();
						$em = $doctrine->getManager();
						$utilisateur = $em->getRepository('PedagogiePedagogieBundle:Utilisateur')->findOneById($iduser);
						$mutex = $em->getRepository('PedagogiePedagogieBundle:Mutex')->findOneByUtilisateur($utilisateur);
						
						// Fonction Remove de EntityManager
						$em->remove($mutex); // Supprime l'entité de la base de données
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
	
    public function addmutAction()
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
					
					if (empty($request->request->get('iduser')))
					{
						$errors['typemut'] = "L'id de l'utilisateur est requis ";

					}
					if (empty($request->request->get('typemutex')))
					{
						$errors['typemut'] = "Le type du mutex est requis ";

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
						
						$iduser = htmlspecialchars($request->request->get('iduser'));
						$typemutex = htmlspecialchars($request->request->get('typemutex'));
                        
						$doctrine = $this->getDoctrine();
						$em = $doctrine->getManager();
						$utilisateur = $em->getRepository('PedagogiePedagogieBundle:Utilisateur')->findOneById($iduser);
						
						$allmutex = $em->getRepository('PedagogiePedagogieBundle:Mutex')->findBy(array('typemutex' =>$typemutex,'etat' => 1));
						
						if(empty($allmutex) || $allmutex == null )
						{
							$mutex = new Mutex();
							$mutex->setUtilisateur($utilisateur);
							$mutex->setTypemutex($typemutex);
							$mutex->setEtat(1);
							$em->persist($mutex); // Modifie l'entité de la base de données
							$em->flush(); // Exécute un UPDATE sur $filiere						
							$data['success'] = true;
							$data['message'] = ' Ajout du mutex Reussi !';
							$data["errors"] = false;
							$data['is_successful_login'] = true;
							
							
						}
						else
						{
							$utilisateur = $em->getRepository('PedagogiePedagogieBundle:Utilisateur')->findOneById($allmutex->getUtilisateur());
							$nomuser = $utilisateur->getPrenom().' '.$utilisateur->getNom();
							$data['success'] = false;
							$data['message'] = "Erreur d'assignation du mutex ";
							$errors['mutex'] = "Erreur d'assignation du mutex ";
							$data['errors']  = $errors;
							$data['username'] = $nomuser;
						}
						
					
				
						
						
					}
					
			$response = new Response(json_encode($data));
			$response->headers->set('Content-Type', 'application/json');
			return $response;

    }
    
    public function MutexHandleAction()
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
				if ($tag == 'deletemutex') 
				{
					$response = $this->deletemutAction();
				}             
				else if($tag == 'addmutex')
				{
					$response = $this->addmutAction();
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
