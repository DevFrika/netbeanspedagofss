<?php

namespace Pedagogie\PedagogieBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Pedagogie\PedagogieBundle\Entity\Classe;
use Pedagogie\PedagogieBundle\Entity\Filiere;


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

					if (empty($request->request->get('nomfil')))
					{
						$errors['nomfil'] = 'Le nom de la filiere est requis ';

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
						
						$nomfil = htmlspecialchars($request->request->get('nomfil'));
						$doctrine = $this->getDoctrine();
						$em = $doctrine->getManager();
						$repository_filiere = $em->getRepository('PedagogiePedagogieBundle:Filiere');
        
        
						$filiere = $repository_filiere->findOneByFiliere($nomfil);
						
						// Fonction Remove de EntityManager
						$em->remove($filiere); // Supprime l'entité de la base de données
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
    
    
    
    
    public function updateclasseAction()
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

					if (empty($request->request->get('nomfil')))
					{
						$errors['nomfil'] = 'Le nom de la filiere est requis ';

					}
                                        if (empty($request->request->get('oldfilname')))
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
						
						$nomfil = htmlspecialchars($request->request->get('oldfilname'));
						$doctrine = $this->getDoctrine();
						$em = $doctrine->getManager();
						$repository_filiere = $em->getRepository('PedagogiePedagogieBundle:Filiere');
        
        
						$filiere = $repository_filiere->findOneByFiliere($nomfil);
						$filiere->setFiliere(htmlspecialchars($request->request->get('nomfil')));
						// Fonction Remove de EntityManager
						$em->persist($filiere); // Modifie l'entité de la base de données
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
    
    
    public function addclasseAction()
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

					if (empty($request->request->get('nomfil')))
					{
						$errors['nomfil'] = 'Le nom de la filiere est requis ';

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
						
						$nomfil = htmlspecialchars($request->request->get('nomfil'));
                        $nomdep = htmlspecialchars($request->request->get('depfil'));
						$doctrine = $this->getDoctrine();
						$em = $doctrine->getManager();
						
						$departement = $em->getRepository('PedagogiePedagogieBundle:Departement')->findOneByDepartement($nomdep);
						$allfil = $em->getRepository('PedagogiePedagogieBundle:Filiere')->findAll();
						$numfil = sizeof($allfil)+1;
						$filiere = new Filiere();
						$filiere->setFiliere(htmlspecialchars($request->request->get('nomfil')));
						$filiere->setDepartement($departement);
						$em->persist($filiere); // Modifie l'entité de la base de données
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
    
    public function ClassesHandleAction()
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
				if ($tag == 'deletefil') 
				{
                                    $response = $this->deletefiliereAction();
				}
                                else if($tag == 'updatefil')
                                {
                                    $response = $this->updatefiliereAction();
                                }
                                else if($tag == 'addfil')
                                {
                                    $response = $this->addfiliereAction();
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
