<?php

namespace Pedagogie\PedagogieBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Pedagogie\PedagogieBundle\Entity\Departement;
use Pedagogie\PedagogieBundle\Entity\Classe;
use Pedagogie\PedagogieBundle\Entity\Groupe;
use Pedagogie\PedagogieBundle\Entity\Discipline;
use Pedagogie\PedagogieBundle\Entity\Matiere;
use Pedagogie\PedagogieBundle\Entity\Utilisateur;
use Pedagogie\PedagogieBundle\Entity\Enseignant;


class EnseignantController extends Controller
{
   
    private $allenseignant ;
    private $alldepartement ;
    private $allgroupe ;
    private $alldiscipline ;
    private $allmatiere ;
    private $allemploi ;
	private $alldevoir ;
	private $allvoeux ;
                                
   
   
   public function GetMatEnseignantAction()
   {
	  // On récupère la requête
		$request = $this->getRequest();
		// On récupère notre paramètre tag
		$tag = $request->request->get('tag');
		
		
		 
			$errors         = array();      // array to hold validation errors
			$data           = array();      // array to pass back data
			$enseignants    = array();    
			$response = new Response();
			
		
						// Request type is check Login
						
						// validate the variables ======================================================
					// if any of these variables don't exist, add an error to our $errors array
					
					if ($request->request->get('tag') !== null && $request->request->get('tag') != '') 
			{
                      
				// check for tag type
				if ($tag == 'getmatens') 
				{
						$doctrine = $this->getDoctrine();
						$em = $doctrine->getManager();
						$nommat = htmlspecialchars($request->request->get('nommat'));
						$depens = htmlspecialchars($request->request->get('depens'));
						$matiere = $em->getRepository('PedagogiePedagogieBundle:Matiere')->findOneById($nommat);
						$departement = $em->getRepository('PedagogiePedagogieBundle:Departement')->findOneById($depens);
						$allens = $em->getRepository('PedagogiePedagogieBundle:Enseignant')->findByMatiere($matiere,$departement);
						$i = 0;
						foreach( $allens as $ens )
						{
							$enseignants['ens'.$i] = array('enseignant' => $ens->getEnseignant(),'enseignantid' => $ens->getId() );
							$i++;
						}
						
						if(empty($enseignants))
						{
							$data['success'] = false;
							$data['message'] = ' Erreur de recuperation des Enseignants - Aucun Enseignant trouvé !';
							$errors['tag'] = " Erreur de recuperation des Enseignants - Aucun Enseignant trouvé ! ";
							$data['errors']  = $errors;
							$data['enseignants'] = $enseignants;
						}
						else
						{
							$data['success'] = true;
							$data['message'] = ' Recuperation des Enseignants Reussie !';
							$data["errors"] = false;
							$data['enseignants'] = $enseignants;
						}
						
						
						
				}
				else
				{
						
						
						$data['success'] = false;
						$data['message'] = ' Erreur de recuperation des Enseignants !';
						$errors['tag'] = " Parametre 'tag' = ".$tag." inconnu . ";
						$data['errors']  = $errors;
						$data['enseignants'] = $enseignants;
						
				}
			}
			else
			{
						$data['success'] = false;
						$data['message'] = " Parametre 'tag' = ".$tag." inconnu . ";
						$errors['tag'] = " Parametre 'tag' = ".$tag." inconnu . ";
						$data['errors']  = $errors;
						$data['enseignants'] = $enseignants;
			}
			
			$response = new Response(json_encode($data));
			$response->headers->set('Content-Type', 'application/json');
			return $response;
   }
   
   public function deleteenseignantAction()
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

					if (empty($request->request->get('idens')))
					{
						$errors['idens'] = "L'ID de l'enseignant est requis ";

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
						
						$nomens = htmlspecialchars($request->request->get('idens'));
						$doctrine = $this->getDoctrine();
						$em = $doctrine->getManager();
						$repository_enseignant = $em->getRepository('PedagogiePedagogieBundle:Enseignant');
        
        
						$enseignant = $repository_enseignant->findOneByEnseignant($nomens);
						$user = $em->getRepository('PedagogiePedagogieBundle:Utilisateur')->findOneById($enseignant->getUtilisateur());
						// Fonction Remove de EntityManager
						
						
						$em->remove($enseignant); // Supprime l'entité de la base de données
						$em->remove($user); // Supprime l'entité de la base de données
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
    
  
    
    
    public function updateenseignantAction()
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

					if (empty($request->request->get('famname')))
					{
						$errors['famname'] = "Le nom de famille de l'enseignant est requis ";

					}
					if (empty($request->request->get('surname')))
					{
						$errors['surname'] = "Le prénom de l'enseignant est requis ";

					}
					if (empty($request->request->get('username')))
					{
						$errors['username'] = "Le nom d'utilisateur de l'enseignant est requis ";

					}
					if (empty($request->request->get('email')))
					{
						$errors['email'] = "L'email de l'enseignant est requis ";

					}
                    if (empty($request->request->get('oldensname')))
					{
						$errors['oldensname'] = "L'id de l'enseignant est requis ";

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
						
						$username = htmlspecialchars($request->request->get('username'));
                        $famname = htmlspecialchars($request->request->get('famname'));
                        $surname = htmlspecialchars($request->request->get('surname'));
                        $email = htmlspecialchars($request->request->get('email'));
						$oldensname = htmlspecialchars($request->request->get('oldensname'));
						$nomdep = htmlspecialchars($request->request->get('depens'));
						$nomsit = htmlspecialchars($request->request->get('sitens'));
                        $nomgrd = htmlspecialchars($request->request->get('grdens'));
                        
						$doctrine = $this->getDoctrine();
						$em = $doctrine->getManager();
						
						$departement = $em->getRepository('PedagogiePedagogieBundle:Departement')->findOneByDepartement($nomdep);
						$situation = $em->getRepository('PedagogiePedagogieBundle:Situations')->findOneBySituations($nomsit);
						$grade = $em->getRepository('PedagogiePedagogieBundle:Grades')->findOneByCode($nomgrd);
						
					
						
						
					
						$enseignant = $em->getRepository('PedagogiePedagogieBundle:Enseignant')->findOneById($oldensname);
						$enseignant->setEnseignant($famname." ".$surname);
						$enseignant->setDepartement($departement);
						$enseignant->setGrade($grade);
						$enseignant->setSituation($situation);
						
						$em->persist($enseignant); // Modifie l'entité de la base de données
						
						$newuser = $em->getRepository('PedagogiePedagogieBundle:Utilisateur')->findOneById($enseignant->getUtilisateur());;
						$newuser->setNom($famname);
						$newuser->setPrenom($surname);
						$newuser->setUsername($username);
						$newuser->setEmail($email);
				
						$em->persist($newuser);
						
						$em->flush(); // Exécute un UPDATE sur $enseignant
                                                
                                                $data['success'] = true;
						$data['message'] = ' Modification Reussie !';
						$data["errors"] = false;
						$data['is_successful_login'] = true;
						
					}
					
			$response = new Response(json_encode($data));
			$response->headers->set('Content-Type', 'application/json');
			return $response;
                        
    }
    
    
    public function addenseignantAction()
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

					if (empty($request->request->get('username')))
					{
						$errors['username'] = "Le nom d'utilisateur l'enseignant est requis ";

					}
					
					if (empty($request->request->get('famname')))
					{
						$errors['famname'] = "Le nom de famille de l'enseignant est requis ";

					}
					
					if (empty($request->request->get('surname')))
					{
						$errors['surname'] = "Le prenom de l'enseignant est requis ";

					}
					
					if (empty($request->request->get('codeens')))
					{
						$errors['famname'] = "Le code de l'enseignant est requis ";

					}
					if (empty($request->request->get('telens')))
					{
						$errors['famname'] = "Le telephone l'enseignant est requis ";
					}
					
					if (empty($request->request->get('email')))
					{
						$errors['famname'] = "L'e-mail de l'enseignant est requis ";

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
						
						$username = htmlspecialchars($request->request->get('username'));
                        $famname = htmlspecialchars($request->request->get('famname'));
                        $surname = htmlspecialchars($request->request->get('surname'));
                        $email = htmlspecialchars($request->request->get('email'));
						$codeens = htmlspecialchars($request->request->get('codeens'));
						$telens = htmlspecialchars($request->request->get('telens'));
						$nomdep = htmlspecialchars($request->request->get('depens'));
						$nomsit = htmlspecialchars($request->request->get('sitens'));
                        $nomgrd = htmlspecialchars($request->request->get('grdens'));
                        $nommat = htmlspecialchars($request->request->get('matens'));
						
						$doctrine = $this->getDoctrine();
						$em = $doctrine->getManager();
						
						$departement = $em->getRepository('PedagogiePedagogieBundle:Departement')->findOneById($nomdep);
						$situation = $em->getRepository('PedagogiePedagogieBundle:Situations')->findOneById($nomsit);
						$grade = $em->getRepository('PedagogiePedagogieBundle:Grades')->findOneByCode($nomgrd);
						$matiere = $em->getRepository('PedagogiePedagogieBundle:Matiere')->findOneById($nommat);
						
						$uuid = uniqid('fss_u', true);
						$password = 'fss'.$famname; // encrypted password
						$type_user= 'prof';
						
						$newuser = new Utilisateur();
						$newuser->setId($uuid);
						$newuser->setNom($famname);
						$newuser->setPrenom($surname);
						$newuser->setUsername($username);
						$newuser->setEmail($email);
						$newuser->setPassword($password);
						$newuser->setTypeuser($type_user);
						$newuser->setCreatetime();
						$newuser->setUserdetails(-1);
						
						$enseignant = new Enseignant();
						$enseignant->setEnseignant($famname." ".$surname);
						$enseignant->setCode($codeens);
						$enseignant->setTelephone($telens);
						$enseignant->setDepartement($departement);
						$enseignant->setGrade($grade);
						$enseignant->setSituation($situation);
						$enseignant->setUtilisateur($newuser);
						$enseignant->addMatiere($matiere);
						
						$em->persist($enseignant); // Modifie l'entité de la base de données	
						$newuser->setUserdetails($enseignant->getId());
						$em->persist($newuser);
						
						$em->flush(); // Exécute un UPDATE sur $enseignant
                        
						$data['success'] = true;
						$data['message'] = ' Ajout Reussi !';
						$data["errors"] = false;
						$data['is_successful_login'] = true;
						
					}
					
			$response = new Response(json_encode($data));
			$response->headers->set('Content-Type', 'application/json');
			return $response;

    }
    
    public function EnseignantHandleAction()
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
				if ($tag == 'deleteens') 
				{
                    $response = $this->deleteenseignantAction();
				}
				else if($tag == 'updateens')
				{
					$response = $this->updateenseignantAction();
				}
				else if($tag == 'addens')
				{
					$response = $this->addenseignantAction();
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
