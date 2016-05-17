<?php

namespace Pedagogie\PedagogieBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Pedagogie\PedagogieBundle\Entity\Filiere;
use Pedagogie\PedagogieBundle\Entity\Departement;

class FiliereController extends Controller
{
    
    private $allfiliere ;
    private $alldepartement ;
    private $allgroupe ;
    private $alldiscipline ;
    private $allmatiere ;
    private $allemploi ;
	private $alldevoir ;
	private $allvoeux ;
                                
   
   
   public function GetDepFiliereAction()
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
				if ($tag == 'getdepfil') 
				{
						$doctrine = $this->getDoctrine();
						$em = $doctrine->getManager();
						$nomdep = htmlspecialchars($request->request->get('nomdep'));
						$departement = $em->getRepository('PedagogiePedagogieBundle:Departement')->findOneById($nomdep);
						$allfil = $em->getRepository('PedagogiePedagogieBundle:Filiere')->findByDepartement($departement);
						$i = 0;
						foreach( $allfil as $fil )
						{
							$filiere['fil'.$i] = array('filiere' => $fil->getFiliere(),'filiereid' => $fil->getId() );
							$i++;
						}
						
						if(empty($filiere) || $filiere == null )
						{
							$data['success'] = false;
							$data['message'] = ' Erreur de recuperation des filieres - Aucune filiere trouvée !';
							$errors['tag'] = " Erreur de recuperation des filieres - Aucune filiere trouvée.";
							$data['errors']  = $errors;
							$data['filiere'] = $filiere;
						}
						else
						{
							$data['success'] = true;
							$data['message'] = ' Recuperation des filieres Reussie !';
							$data["errors"] = false;
							$data['filiere'] = $filiere;
						}
						
						
						
				}
				else
				{
						
						
						$data['success'] = false;
						$data['message'] = ' Erreur de recuperation des filieres !';
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
   
   public function deletefiliereAction()
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
        
        
						$filiere = $repository_filiere->findOneById($nomfil);
						
						// Fonction Remove de EntityManager
						$em->remove($filiere); // Supprime l'entité de la base de données
						$em->flush(); // Exécute un DELETE sur $article
                                                
                        $savehandle = $this->get('pedagogie.filierehandle');
						$savehandle->saveAction($this,$request->cookies->get('session_id'),'type:Suppression','Suppression de filiere par '.$request->cookies->get('nomuser')) ;
		
						$data['success'] = true;
						$data['message'] = ' Suppression Reussie !';
						$data["errors"] = false;
						$data['is_successful_login'] = true;
						
					}
					
			$response = new Response(json_encode($data));
			$response->headers->set('Content-Type', 'application/json');
			return $response;
		
		
        
    }
    
  
    
    
    public function updatefiliereAction()
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
        
        
						$filiere = $repository_filiere->findOneById($nomfil);
						$filiere->setFiliere(htmlspecialchars($request->request->get('nomfil')));
						$filiere->setDescription(htmlspecialchars($request->request->get('descfil')));
						// Fonction Remove de EntityManager
						$em->persist($filiere); // Modifie l'entité de la base de données
						$em->flush(); // Exécute un UPDATE sur $filiere
                        
						$savehandle = $this->get('pedagogie.filierehandle');
						$savehandle->saveAction($this,$request->cookies->get('session_id'),'Modification','Modification de filiere par '.$request->cookies->get('nomuser')) ;
		
                        $data['success'] = true;
						$data['message'] = ' Modification Reussie !';
						$data["errors"] = false;
						$data['is_successful_login'] = true;
						
					}
					
			$response = new Response(json_encode($data));
			$response->headers->set('Content-Type', 'application/json');
			return $response;
                        
    }
    
    
    public function addfiliereAction()
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
						$descfil = htmlspecialchars($request->request->get('descfil'));
                        $nomdep = htmlspecialchars($request->request->get('depfil'));
						$doctrine = $this->getDoctrine();
						$em = $doctrine->getManager();
						
						$departement = $em->getRepository('PedagogiePedagogieBundle:Departement')->findOneById($nomdep);
						$filiere = $em->getRepository('PedagogiePedagogieBundle:Filiere')->findExist($nomfil);
						if($filiere== null || empty($filiere))
						{
							$filiere = new Filiere();
							$filiere->setFiliere($nomdfil);
							$filiere->setDescription($descfil); //htmlspecialchars($request->request->get('descfil'))
							$filiere->setDepartement($departement);
							$em->persist($filiere); // Modifie l'entité de la base de données
							$em->flush(); // Exécute un UPDATE sur $filiere
							
							$savehandle = $this->get('pedagogie.filierehandle');
						$savehandle->saveAction($this,$request->cookies->get('session_id'),'Ajout','Ajout de filiere par '.$request->cookies->get('nomuser')) ;
		
							$data['success'] = true;
							$data['message'] = ' Ajout Reussi !';
							$data["errors"] = false;
							$data['is_successful_login'] = true;
						}
						else
						{
							$data['success'] = false;
							$data['message'] = " Echec de l'ajout - La Filiere existe deja  !";
							$data['errors']  = $errors;
						}
						
						
					}
					
			$response = new Response(json_encode($data));
			$response->headers->set('Content-Type', 'application/json');
			return $response;

    }
    
    public function FiliereHandleAction()
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
