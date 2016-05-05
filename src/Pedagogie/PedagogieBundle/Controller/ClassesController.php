<?php

namespace Pedagogie\PedagogieBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Pedagogie\PedagogieBundle\Entity\Classe;



class ClassesController extends Controller
{
    
    private $allfiliere ;
    private $alldepartement ;
    private $allgroupe ;
    private $alldiscipline ;
    private $allmatiere ;
    private $allemploi ;
	private $alldevoir ;
	private $allvoeux ;
                                
   
   
   public function GetFilClassesAction()
   {
	  // On récupère la requête
		$request = $this->getRequest();
		// On récupère notre paramètre tag
		$tag = $request->request->get('tag');
		
		
		 
			$errors         = array();      // array to hold validation errors
			$data           = array();      // array to pass back data
			$classes        = array();    
			$response = new Response();
			
		
						// Request type is check Login
						
						// validate the variables ======================================================
					// if any of these variables don't exist, add an error to our $errors array
					
					if ($request->request->get('tag') !== null && $request->request->get('tag') != '') 
			{
                      
				// check for tag type
				if ($tag == 'getfilcls') 
				{
						$doctrine = $this->getDoctrine();
						$em = $doctrine->getManager();
						$nomfil = htmlspecialchars($request->request->get('nomfil'));
						$filiere = $em->getRepository('PedagogiePedagogieBundle:Filiere')->findOneById($nomfil);
						$allcls = $em->getRepository('PedagogiePedagogieBundle:Classe')->findByFiliere($filiere);
						$i = 0;
						foreach( $allcls as $cls )
						{
							$classes['cls'.$i] = array('classe' => $cls->getClasse(),'classeid' => $cls->getId() );
							$i++;
						}
						
						if(empty($classes))
						{
							$data['success'] = false;
							$data['message'] = ' Erreur de recuperation des classes - Aucune Classe trouvé !';
							$errors['tag'] = "  Erreur de recuperation des classes - Aucune Classe trouvé !";
							$data['errors']  = $errors;
							$data['classes'] = $classes;
						}
						else
						{
							$data['success'] = true;
							$data['message'] = ' Recuperation des classes Reussie !';
							$data["errors"] = false;
							$data['classes'] = $classes;
						}
						
						
						
				}
				else
				{
						
						
						$data['success'] = false;
						$data['message'] = ' Erreur de recuperation des classes !';
						$errors['tag'] = " Parametre 'tag' = ".$tag." inconnu .";
						$data['errors']  = $errors;
						$data['classes'] = $classes;
						
				}
			}
			else
			{
						$data['success'] = false;
						$data['message'] = " Parametre 'tag' = ".$tag." inconnu . ";
						$errors['tag'] = " Parametre 'tag' = ".$tag." inconnu . ";
						$data['errors']  = $errors;
						$data['classes'] = $classes;
			}
			
			$response = new Response(json_encode($data));
			$response->headers->set('Content-Type', 'application/json');
			return $response;
   }
   
   
   public function deleteclasseAction()
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

					if (empty($request->request->get('nomcls')))
					{
						$errors['nomcls'] = 'Le nom de la classe est requis ';

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
						
						$nomcls = htmlspecialchars($request->request->get('nomcls'));
						$doctrine = $this->getDoctrine();
						$em = $doctrine->getManager();
						$repository_classe = $em->getRepository('PedagogiePedagogieBundle:Classe');
        
        
						$classes = $repository_classe->findOneById($nomcls);
						
						// Fonction Remove de EntityManager
						$em->remove($classes); // Supprime l'entité de la base de données
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

					if (empty($request->request->get('nomcls')))
					{
						$errors['nomfil'] = 'Le nom de la classe est requis ';

					}
                    
					if (empty($request->request->get('oldclsname')))
					{
						$errors['nomfil'] = 'L\'ancien nom de la classe est requis ';
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
						
						$nomcls = htmlspecialchars($request->request->get('oldclsname'));
						$doctrine = $this->getDoctrine();
						$em = $doctrine->getManager();
						$repository_classe = $em->getRepository('PedagogiePedagogieBundle:Classe');
						$departement = $em->getRepository('PedagogiePedagogieBundle:Departement')->findOneById(htmlspecialchars($request->request->get('depcls'))) ;
						$filiere = $em->getRepository('PedagogiePedagogieBundle:Filiere')->findOneById(htmlspecialchars($request->request->get('filcls')));
						
						$classes = $repository_classe->findOneById($nomcls);
						$classes->setClasse(htmlspecialchars($request->request->get('nomcls')));
						$classes->setFiliere($filiere); 
						$classes->setDepartement($departement);
						$classes->setAnnee(htmlspecialchars($request->request->get('ancls')));
						
						// Fonction Remove de EntityManager
						$em->persist($classes); // Modifie l'entité de la base de données
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

					if (empty($request->request->get('nomcls')))
					{
						$errors['nomcls'] = 'Le nom de la classe est requis ';

					}
					if (empty($request->request->get('ancls')))
					{
						$errors['nomcls'] = 'L\'année de la classe est requis ';

					}
					if (empty($request->request->get('filcls')))
					{
						$errors['nomcls'] = 'La filiere de la classe est requis ';

					}
					if (empty($request->request->get('depcls')))
					{
						$errors['nomcls'] = 'Le departement de la classe est requis ';

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
						
						$nomfil = htmlspecialchars($request->request->get('filcls'));
                        $nomdep = htmlspecialchars($request->request->get('depcls'));
						$nomcls = htmlspecialchars($request->request->get('nomcls'));
						$ancls = htmlspecialchars($request->request->get('ancls'));
						$doctrine = $this->getDoctrine();
						$em = $doctrine->getManager();
						
						$departement = $em->getRepository('PedagogiePedagogieBundle:Departement')->findOneById($nomdep);
						$filiere = $em->getRepository('PedagogiePedagogieBundle:Filiere')->findOneById($nomfil);
						$classes = $em->getRepository('PedagogiePedagogieBundle:Classe')->findExist($nomcls,$filiere,$departement);
						if($classes == null || empty($classes))
						{
							$classes = new Classe();
							$classes->setClasse($nomcls);
							$classes->setAnnee($ancls);
							$classes->setFiliere($filiere);
							$classes->setDepartement($departement);
							$em->persist($classes); // Modifie l'entité de la base de données
							$em->flush(); // Exécute un UPDATE sur $classes
													
							$data['success'] = true;
							$data['message'] = ' Ajout Reussi !';
							$data["errors"] = false;
							$data['is_successful_login'] = true;
						}
						else
						{
							$data['success'] = false;
							$data['message'] = " Echec de l'ajout - La Classe existe deja  !";
							$data['errors']  = $errors;
						}
						
						
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
				if ($tag == 'deletecls') 
				{
                    $response = $this->deleteclasseAction();
				}
				else if($tag == 'updatecls')
				{
					$response = $this->updateclasseAction();
				}
				else if($tag == 'addcls')
				{
					$response = $this->addclasseAction();
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
