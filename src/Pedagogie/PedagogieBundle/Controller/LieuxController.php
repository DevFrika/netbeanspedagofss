<?php

namespace Pedagogie\PedagogieBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Pedagogie\PedagogieBundle\Entity\Lieux;


class LieuxController extends Controller
{
    
    private $allfiliere ;
    private $alldepartement ;
    private $allgroupe ;
    private $alldiscipline ;
    private $allmatiere ;
    private $allemploi ;
	private $alldevoir ;
	private $allvoeux ;
                                
   
  
   public function deletelieuxAction()
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

					if (empty($request->request->get('nomlieux')))
					{
						$errors['nomfil'] = "L'id du lieux est requis ";

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
						
						$nomlieux = htmlspecialchars($request->request->get('nomlieux'));
						$doctrine = $this->getDoctrine();
						$em = $doctrine->getManager();
						$lieux = $em->getRepository('PedagogiePedagogieBundle:Lieux')->findOneById($nomlieux);
						
						// Fonction Remove de EntityManager
						$em->remove($lieux); // Supprime l'entité de la base de données
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
    
    
    
    
    public function updatelieuxAction()
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

					if (empty($request->request->get('updnomlieux')))
					{
						$errors['nomfil'] = 'Le nom de la filiere est requis ';

					}
                    if (empty($request->request->get('oldlieuxname')))
					{
						$errors['nomfil'] = 'Le nom de la filiere est requis ';

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
						
						$oldlieuxname = htmlspecialchars($request->request->get('oldlieuxname'));
						$doctrine = $this->getDoctrine();
						$em = $doctrine->getManager();
        
        
						$lieux = $em->getRepository('PedagogiePedagogieBundle:Lieux')->findOneById($oldlieuxname);
						$lieux->setLieux(htmlspecialchars($request->request->get('updnomlieux')));
						$lieux->setCode(htmlspecialchars($request->request->get('updcodelieux')));
						// Fonction Remove de EntityManager
						$em->persist($lieux); // Modifie l'entité de la base de données
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
    
    
    public function addlieuxAction()
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

					if (empty($request->request->get('nomlieux')))
					{
						$errors['nomlieux'] = 'Le nom du lieux requis ';

					}
					if (empty($request->request->get('codelieux')))
					{
						$errors['codelieux'] = 'Le code du lieux est requis ';

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
						
						$nomlieux= htmlspecialchars($request->request->get('nomlieux'));
                        $codelieux = htmlspecialchars($request->request->get('codelieux'));
						$doctrine = $this->getDoctrine();
						$em = $doctrine->getManager();
						
						
						$lieux = new Lieux();
						$lieux->setLieux($nomlieux);
						$lieux->setCode($codelieux);
						$em->persist($lieux); // Modifie l'entité de la base de données
						$em->flush(); // Exécute un UPDATE sur $filiere
                                                
                        $data['success'] = true;
						$data['message'] = ' Ajout Reussi !';
						$data["errors"] = false;
						$data['is_successful_login'] = true;
						
					}
					
			$response = new Response(json_encode($data));
			$response->headers->set('Content-Type', 'application/json');
			return $response;

    }
    
    public function LieuxHandleAction()
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
				if ($tag == 'deletelieux') 
				{
                    $response = $this->deletelieuxAction();
				}
				else if($tag == 'updatelieux')
				{
					$response = $this->updatelieuxAction();
				}
				else if($tag == 'addlieux')
				{
					$response = $this->addlieuxAction();
				}
				else 
				{
					// The tag is not login or register ==> failure
					
					$data['success'] = false;
					$data['message'] = " Parametre 'tag' = ".$tag." inconnu . Le parametre doit etre 'login' .";
					$errors['tag'] = " Parametre 'tag' = ".$tag." inconnu . Le parametre doit etre 'login' .";
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
