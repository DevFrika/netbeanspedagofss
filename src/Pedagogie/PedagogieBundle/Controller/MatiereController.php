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


class MatiereController extends Controller
{
  private $allfiliere ;
    private $alldepartement ;
    private $allgroupe ;
    private $alldiscipline ;
    private $allmatiere ;
    private $allemploi ;
	private $alldevoir ;
	private $allvoeux ;
                                
   
   
   public function GetDisMatiereAction()
   {
	  // On récupère la requête
		$request = $this->getRequest();
		// On récupère notre paramètre tag
		$tag = $request->request->get('tag');
		
		
		 
			$errors         = array();      // array to hold validation errors
			$data           = array();      // array to pass back data
			$matieres       = array();    
			$response = new Response();
			
		
						// Request type is check Login
						
						// validate the variables ======================================================
					// if any of these variables don't exist, add an error to our $errors array
					
					if ($request->request->get('tag') !== null && $request->request->get('tag') != '') 
			{
                      
				// check for tag type
				if ($tag == 'getdismat') 
				{
						$doctrine = $this->getDoctrine();
						$em = $doctrine->getManager();
						$nomdis = htmlspecialchars($request->request->get('nomdis'));
						$nomgrp = htmlspecialchars($request->request->get('nomgrp'));
						$discipline = $em->getRepository('PedagogiePedagogieBundle:Discipline')->findOneById($nomdis);
						$groupe = $em->getRepository('PedagogiePedagogieBundle:Groupe')->findOneById($nomgrp);
						$allmat = $em->getRepository('PedagogiePedagogieBundle:Matiere')->findByDisciplineGroupe($discipline,$groupe);
						$i = 0;
						foreach( $allmat as $mat )
						{
							$matieres['mat'.$i] = array('matiere' => $mat->getMatiere(),'matiereid' => $mat->getId() );
							$i++;
						}
						
						
						if(empty($matieres))
						{
							$data['success'] = false;
							$data['message'] = ' Erreur de recuperation des Matieres - Aucune Matiere trouvée  !';
							$errors['tag'] = " Parametre 'tag' = ".$tag." inconnu .";
							$data['errors']  = $errors;
							$data['matieres'] = $matieres;
						}
						else
						{
							$data['success'] = true;
							$data['message'] = ' Recuperation des Matieres Reussie !';
							$data["errors"] = false;
							$data['matieres'] = $matieres;
						}
						
				}
				else
				{
						
						
						$data['success'] = false;
						$data['message'] = ' Erreur de recuperation des Matieres !';
						$errors['tag'] = " Parametre 'tag' = ".$tag." inconnu  .";
						$data['errors']  = $errors;
						$data['matieres'] = $matieres;
						
				}
			}
			else
			{
						$data['success'] = false;
						$data['message'] = " Parametre 'tag' = ".$tag." inconnu . ";
						$errors['tag'] = " Parametre 'tag' = ".$tag." inconnu . ";
						$data['errors']  = $errors;
						$data['matieres'] = $matieres;
			}
			
			$response = new Response(json_encode($data));
			$response->headers->set('Content-Type', 'application/json');
			return $response;
   }
   
   public function GetMatNatureAction()
   {
	  // On récupère la requête
		$request = $this->getRequest();
		// On récupère notre paramètre tag
		$tag = $request->request->get('tag');
		
		
		 
			$errors         = array();      // array to hold validation errors
			$data           = array();      // array to pass back data
			$natures       = array();    
			$response = new Response();
			
		
						// Request type is check Login
						
						// validate the variables ======================================================
					// if any of these variables don't exist, add an error to our $errors array
					
					if ($request->request->get('tag') !== null && $request->request->get('tag') != '') 
			{
                      
				// check for tag type
				if ($tag == 'getmatnat') 
				{
						$doctrine = $this->getDoctrine();
						$em = $doctrine->getManager();
						$nommat = htmlspecialchars($request->request->get('nommat'));
						$matiere = $em->getRepository('PedagogiePedagogieBundle:Matiere')->findOneById($nommat);
						//$allnat = $em->getRepository('PedagogiePedagogieBundle:Nature')->findByMatiere($matiere);
						$i = 0;
						foreach( $matiere->getNatures() as $nat )
						{
							$natures['nat'.$i] = array('nature' => $nat->getNature() );
							$i++;
						}
						
						
						if(empty($natures))
						{
							$data['success'] = false;
							$data['message'] = ' Erreur de recuperation des Natures - Aucune Nature trouvée  !';
							$errors['tag'] = " Parametre 'tag' = ".$tag." inconnu .";
							$data['errors']  = $errors;
							$data['matieres'] = $natures;
						}
						else
						{
							$data['success'] = true;
							$data['message'] = ' Recuperation des Natures Reussie !';
							$data["errors"] = false;
							$data['matieres'] = $natures;
						}
						
				}
				else
				{
						
						
						$data['success'] = false;
						$data['message'] = ' Erreur de recuperation des Matieres !';
						$errors['tag'] = " Parametre 'tag' = ".$tag." inconnu  .";
						$data['errors']  = $errors;
						$data['matieres'] = $natures;
						
				}
			}
			else
			{
						$data['success'] = false;
						$data['message'] = " Parametre 'tag' = ".$tag." inconnu . ";
						$errors['tag'] = " Parametre 'tag' = ".$tag." inconnu . ";
						$data['errors']  = $errors;
						$data['matieres'] = $natures;
			}
			
			$response = new Response(json_encode($data));
			$response->headers->set('Content-Type', 'application/json');
			return $response;
   }
   
    public function deletematiereAction()
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
						$data['message'] = ' Echec de suppression !';
						$data['errors']  = $errors;
						
					}
					else
					{
						
						$nomdis = htmlspecialchars($request->request->get('iddis'));
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
    
  
    
    
    public function updatematiereAction()
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
    
    
    public function addmatiereAction()
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

					if (empty($request->request->get('nommat')))
					{
						$errors['nommat'] = "Le nom de la matiere est requis ";

					}
					
					if (empty($request->request->get('matdep')))
					{
						$errors['matdep'] = "Le nom du departement est requis ";

					}
					
					if (empty($request->request->get('matfil')))
					{
						$errors['matfil'] = "Le nom de la filiere est requis ";

					}
					
					if (empty($request->request->get('matdis')))
					{
						$errors['matdis'] = "Le nom de la discipline est requis ";

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
						$nommat = htmlspecialchars($request->request->get('nommat'));
						$nomdis = htmlspecialchars($request->request->get('matdis'));
                        $nomdep = htmlspecialchars($request->request->get('matdep'));
                        $nomfil = htmlspecialchars($request->request->get('matfil'));
						$nomunt = htmlspecialchars($request->request->get('matunt'));
                        
                        
						$doctrine = $this->getDoctrine();
						$em = $doctrine->getManager();
						
						$departement = $em->getRepository('PedagogiePedagogieBundle:Departement')->findOneById($nomdep);
						$filiere = $em->getRepository('PedagogiePedagogieBundle:Filiere')->findOneById($nomfil);
						$discipline = $em->getRepository('PedagogiePedagogieBundle:Discipline')->findOneById($nomdis);
						$unite = $em->getRepository('PedagogiePedagogieBundle:Unite')->findOneById($nomunt);
						$matiere = $em->getRepository('PedagogiePedagogieBundle:Matiere')->findExist($nommat,$discipline);
						
						if($matiere == null || empty($matiere))
						{
							$matiere = new Matiere();
							$matiere->setMatiere($nommat);
							$matiere->setDiscipline($discipline);
							$matiere->setUnite($unite);
							$matiere->addDepartement($departement);
							$matiere->addFiliere($filiere);
							$em->persist($matiere); // Modifie l'entité de la base de données	
							$em->flush(); // Exécute un UPDATE sur $enseignant
							$data['success'] = true;
							$data['message'] = ' Ajout Reussi !';
							$data["errors"] = false;
							$data['is_successful_login'] = true;
						}
						else
						{
							$matiere = $em->getRepository('PedagogiePedagogieBundle:Matiere')->findExistDepartement($nommat,$departement);
							if($matiere == null || empty($matiere))
							{
								$matiere = $em->getRepository('PedagogiePedagogieBundle:Matiere')->findExist($nommat,$discipline);
								$matiere->addDepartement($departement);
								$matiere->addFiliere($filiere);
								$em->persist($matiere); // Modifie l'entité de la base de données	
								$em->flush(); // Exécute un UPDATE sur $enseignant
								$data['success'] = true;
								$data['message'] = ' Ajout Reussi !';
								$data["errors"] = false;
								$data['is_successful_login'] = true;
							}
							else
							{
								$matiere = $em->getRepository('PedagogiePedagogieBundle:Matiere')->findExistFiliere($nommat,$filiere);
								if($matiere == null || empty($matiere))
								{
									$matiere = $em->getRepository('PedagogiePedagogieBundle:Matiere')->findExist($nommat,$discipline);
									$matiere->addFiliere($filiere);
									$em->persist($matiere); // Modifie l'entité de la base de données	
									$em->flush(); // Exécute un UPDATE sur $enseignant
							
									$data['success'] = true;
									$data['message'] = ' Ajout Reussi !';
									$data["errors"] = false;
									$data['is_successful_login'] = true;
								}
								else
								{
									$data['success'] = false;
									$data['message'] = ' Cette Matiere existe deja dans la filiere et dans le departement !';
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
	
   
   public function MatiereHandleAction()
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
				if ($tag == 'deletemat') 
				{
                    $response = $this->deletematiereAction();
				}
				else if($tag == 'updatemat')
				{
					$response = $this->updatematiereAction();
				}
				else if($tag == 'addmat')
				{
					$response = $this->addmatiereAction();
				}
				else 
				{
					// The tag is not login or register ==> failure
					
					$data['success'] = false;
					$data['message'] = " Parametre 'tag' = ".$tag." inconnu .";
					$errors['tag'] = " Parametre 'tag' = ".$tag." inconnu  .";
			
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
