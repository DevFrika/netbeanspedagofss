<?php

namespace Pedagogie\PedagogieBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Pedagogie\PedagogieBundle\Entity\Filiere;
use Pedagogie\PedagogieBundle\Entity\Departement;
use Pedagogie\PedagogieBundle\Entity\Groupe;
use Pedagogie\PedagogieBundle\Entity\Discipline;
use Pedagogie\PedagogieBundle\Entity\Matiere;
use Pedagogie\PedagogieBundle\Entity\Classe;
use Pedagogie\PedagogieBundle\Entity\Emploi;
use Pedagogie\PedagogieBundle\Entity\Enseignant;


class EmploiController extends Controller
{
    
	public function EmploiFiliereAction()
    {
        // On récupère la requête
		$request = $this->getRequest();
		// On récupère notre paramètre tag
		$tag = $request->request->get('tag');

		$errors         = array();      // array to hold validation errors
		$data           = array();      // array to pass back data
	 	// Request type is check Login
						
						// validate the variables ======================================================
					// if any of these variables don't exist, add an error to our $errors array

					if (empty($request->request->get('nomfil')))
					{
						$errors['nomfil'] = " L'id de la filiere  est requis ";

					}

					
					
						if ( ! empty($errors)) 
					{

						// if there are items in our errors array, return those errors
						$data['success'] = false;
						$data['message'] = ' Echec de Récuperation  !';
						$data['errors']  = $errors;
						
					}
					else
					{
						$nomfil = htmlspecialchars($request->request->get('nomfil'));
						$repository = $this->getDoctrine()->getManager()->getRepository('PedagogiePedagogieBundle:Emploi');
						$listeEmploi = $repository->findBy(array('filieres' => $nomfil),array('jours' => 'asc','heure_debut'=>'asc'),null,null);
						
						$contenu = $this->renderView('PedagogiePedagogieBundle::admin/emploi/grphemploifilieretemplate.html.twig',array('listeemp' => $listeEmploi));
						
                        $data['contenu'] = $contenu;                        
                        $data['success'] = true;
						$data['message'] = ' Récuperation Reussie !';
						$data["errors"] = false;
						
						
					}
					
			$response = new Response(json_encode($data));
			$response->headers->set('Content-Type', 'application/json');
			return $response;
		
		
        
    }
	
	
	public function EmploiGroupeAction()
    {
		
        // On récupère la requête
		$request = $this->getRequest();
		// On récupère notre paramètre tag
		$tag = $request->request->get('tag');
		

		$errors         = array();      // array to hold validation errors
		$data           = array();      // array to pass back data
		$contenu ;
		$filename ;
		$groupe ;
		$printing ;
	 	// Request type is check Login
						
						// validate the variables ======================================================
					// if any of these variables don't exist, add an error to our $errors array

					if (empty($request->request->get('nomgrp')))
					{
						$errors['nomgrp'] = " L'id du groupe est requis ";

					}

					
					
						if ( ! empty($errors)) 
					{

						// if there are items in our errors array, return those errors
						$data['success'] = false;
						$data['message'] = ' Echec de Récuperation !';
						$data['errors']  = $errors;
						
					}
					else
					{
						$nomgrp = htmlspecialchars($request->request->get('nomgrp'));
						$typeEmp = htmlspecialchars($request->request->get('typeemploi'));
						$repository = $this->getDoctrine()->getManager()->getRepository('PedagogiePedagogieBundle:Emploi');
						$groupe = $this->getDoctrine()->getManager()->getRepository('PedagogiePedagogieBundle:Groupe')->findOneById($nomgrp);
						$listeEmploi = $repository->findBy(array('groupes' => $nomgrp),array('jours' => 'asc','heure_debut'=>'asc'),null,null);
						$printing = htmlspecialchars($request->request->get('printing'));
						
						if($typeEmp == 'graphique')
						{
							$contenu = $this->renderView('PedagogiePedagogieBundle::admin/emploi/grphemploigroupetemplate.html.twig',array('listeemp' => $listeEmploi));
							$typeemploi = "graphique";
						}
						else
						{
							$contenu = $this->renderView('PedagogiePedagogieBundle::admin/emploi/listeemploigroupetemplate.html.twig',array('listeemp' => $listeEmploi));
							$typeemploi = "liste";
						}
						
                        $data['contenu'] = $contenu;                        
                        $data['success'] = true;
						$data['message'] = ' Récuperation Reussie !';
						$data["errors"] = false;
						
						$filename = $this->get('kernel')->getRootDir(). "/../web/emploi/".$typeemploi."/".$groupe->getGroupe().".pdf";
					
						
						
						
					}
			
					if (file_exists($filename)) 
					{
						if($printing == true || $printing == 'true')
						{
							$data['pathinfo'] = $filename;
						}
					} 
					else 
					{
						if(!empty($contenu) && $contenu != "")
						{	
							
							$script = "console.log('testing')";
							$printhandle = $this->get('pedagogie.printhandle');
							$printhandle->saveGrpToPdf($contenu,$filename,'F',$script,$this);
							
						}
					}
			
			
			$response = new Response(json_encode($data));
			$response->headers->set('Content-Type', 'application/json');
			return $response;
		
			
			
        
    }
	
	public function EmploiSalleAction()
    {
        // On récupère la requête
		$request = $this->getRequest();
		// On récupère notre paramètre tag
		$tag = $request->request->get('tag');

		$errors         = array();      // array to hold validation errors
		$data           = array();      // array to pass back data
	 	// Request type is check Login
						
						// validate the variables ======================================================
					// if any of these variables don't exist, add an error to our $errors array

					if (empty($request->request->get('nomsal')))
					{
						$errors['nomsal'] = " L'id de la salle est requise ";

					}

					
					
						if ( ! empty($errors)) 
					{

						// if there are items in our errors array, return those errors
						$data['success'] = false;
						$data['message'] = ' Echec de Récuperation !';
						$data['errors']  = $errors;
						
					}
					else
					{
						$nomsal = htmlspecialchars($request->request->get('nomsal'));
						$repository = $this->getDoctrine()->getManager()->getRepository('PedagogiePedagogieBundle:Emploi');
						$listeEmploi = $repository->findBy(array('salles' => $nomsal),array('jours' => 'asc','heure_debut'=>'asc'),null,null);
						
						$contenu = $this->renderView('PedagogiePedagogieBundle::admin/emploi/grphemploisalletemplate.html.twig',array('listeemp' => $listeEmploi));
						
                        $data['contenu'] = $contenu;                        
                        $data['success'] = true;
						$data['message'] = ' Récuperation Reussie !';
						$data["errors"] = false;
						
						
					}
					
			$response = new Response(json_encode($data));
			$response->headers->set('Content-Type', 'application/json');
			return $response;
		
		
        
    }
    
	public function EmploiEnseignantAction()
    {
        // On récupère la requête
		$request = $this->getRequest();
		// On récupère notre paramètre tag
		$tag = $request->request->get('tag');

		$errors         = array();      // array to hold validation errors
		$data           = array();      // array to pass back data
	 	// Request type is check Login
						
						// validate the variables ======================================================
					// if any of these variables don't exist, add an error to our $errors array

					if (empty($request->request->get('nomens')))
					{
						$errors['nomens'] = " L'id de l'enseignant est requis ";

					}

					
					
						if ( ! empty($errors)) 
					{

						// if there are items in our errors array, return those errors
						$data['success'] = false;
						$data['message'] = ' Echec de Récuperation !';
						$data['errors']  = $errors;
						
					}
					else
					{
						$nomens = htmlspecialchars($request->request->get('nomens'));
						$repository = $this->getDoctrine()->getManager()->getRepository('PedagogiePedagogieBundle:Emploi');
						$listeEmploi = $repository->findBy(array('enseignants' => $nomens),array('jours' => 'asc','heure_debut'=>'asc'),null,null);
						
						$contenu = $this->renderView('PedagogiePedagogieBundle::admin/emploi/grphemploienseignanttemplate.html.twig',array('listeemp' => $listeEmploi));
						
                        $data['contenu'] = $contenu;                        
                        $data['success'] = true;
						$data['message'] = ' Récuperation Reussie !';
						$data["errors"] = false;
						
						
					}
					
			$response = new Response(json_encode($data));
			$response->headers->set('Content-Type', 'application/json');
			return $response;
		
		
        
    }
	
   public function deleteemploiAction()
    {
        // On récupère la requête
		$request = $this->getRequest();
		// On récupère notre paramètre tag
		$tag = $request->request->get('tag');

		$errors         = array();      // array to hold validation errors
		$data           = array();      // array to pass back data
	 	// Request type is check Login
						
						// validate the variables ======================================================
					// if any of these variables don't exist, add an error to our $errors array

					if (empty($request->request->get('nomemp')))
					{
						$errors['nomemp'] = 'L\'id de l\'emplois est requis ';

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
						
						$nomemp = htmlspecialchars($request->request->get('nomemp'));
						$doctrine = $this->getDoctrine();
						$em = $doctrine->getManager();
						$repository_emploi= $em->getRepository('PedagogiePedagogieBundle:Emploi');
        
        
						$emploi = $repository_emploi->findOneById($nomemp);
						
						// Fonction Remove de EntityManager
						$em->remove($emploi); // Supprime l'entité de la base de données
						$em->flush(); // Exécute un DELETE sur $article
                        
						$savehandle = $this->get('pedagogie.filierehandle');
						$savehandle->saveAction($this,$request->cookies->get('session_id'),'Suppression','Suppression d\emploi du temps par '.$request->cookies->get('nomuser')) ;
		
                        $data['success'] = true;
						$data['message'] = ' Suppression Reussie !';
						$data["errors"] = false;
						
						
					}
					
			$response = new Response(json_encode($data));
			$response->headers->set('Content-Type', 'application/json');
			return $response;
		
		
        
    }
    
    public function updateemploiAction()
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
						
        
						$emploi = $em->getRepository('PedagogiePedagogieBundle:Filiere')->findOneByFiliere($nomfil);
						$emploi->setFiliere(htmlspecialchars($request->request->get('nomfil')));
						$emploi->setDateMaj(); 
						// Fonction Remove de EntityManager
						$em->persist($filiere); // Modifie l'entité de la base de données
						$em->flush(); // Exécute un UPDATE sur $filiere
                                                
                        $savehandle = $this->get('pedagogie.filierehandle');
						$savehandle->saveAction($this,$request->cookies->get('session_id'),'Modification','Modification d\emploi du temps par '.$request->cookies->get('nomuser')) ;
		
						$data['success'] = true;
						$data['message'] = ' Modification Reussie !';
						$data["errors"] = false;
						$data['is_successful_login'] = true;
						
					}
					
			$response = new Response(json_encode($data));
			$response->headers->set('Content-Type', 'application/json');
			return $response;
                        
    }
    
    
    public function addemploiAction()
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
					
					if (empty($request->request->get('nomdep')))
					{
						$errors['nomdep'] = 'Le nom du departement est requis ';

					}
					
					if (empty($request->request->get('nomcls')))
					{
						$errors['nomcls'] = 'Le nom de la classe est requis ';

					}
					
					if (empty($request->request->get('nomgrp')))
					{
						$errors['nomgrp'] = 'Le nom du groupe est requis ';

					}
					
					if (empty($request->request->get('nomdis')))
					{
						$errors['nomdis'] = 'Le nom de la discipline est requis ';

					}
					
					if (empty($request->request->get('nommat')))
					{
						$errors['nommat'] = 'Le nom de la matiere est requis ';

					}
					
					if (empty($request->request->get('nomens')))
					{
						$errors['nomens'] = "Le nom de l'enseignant est requis ";

					}
					
					if (empty($request->request->get('nomnat')))
					{
						$errors['nomnat'] = "La est requise ";

					}
					if (empty($request->request->get('periode')))
					{
						$errors['periode'] = 'La periode est requise ';

					}
					if (empty($request->request->get('semestre')))
					{
						$errors['semestre'] = 'Le semestre est requis ';

					}
					if (empty($request->request->get('nomlieux')))
					{
						$errors['nomlieux'] = "Le lieux est requis ";

					}
					if (empty($request->request->get('nomsal')))
					{
						$errors['nomsal'] = "La salle est requise ";

					}
					if (empty($request->request->get('nomjour')))
					{
						$errors['nomjour'] = "Le jour est requis ";

					}
					
					if (empty($request->request->get('hdeb')))
					{
						$errors['hdeb'] = 'L\'heure de debut  est requis ';

					}
					
					if (empty($request->request->get('hfin')))
					{
						$errors['hfin'] = 'L\'heure de fin  est requis ';

					}
					
					if (empty($request->request->get('mindeb')))
					{
						$errors['mindeb'] = 'La minute de debut  est requis ';

					}
					
					if (empty($request->request->get('minfin')))
					{
						$errors['minfin'] = 'La minute de fin est requis ';

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
                        $nomdep = htmlspecialchars($request->request->get('nomdep'));
						$nomcls = htmlspecialchars($request->request->get('nomcls'));
						$nomgrp = htmlspecialchars($request->request->get('nomgrp'));
						$nomdis = htmlspecialchars($request->request->get('nomdis'));
						$nommat = htmlspecialchars($request->request->get('nommat'));
						$nomens = htmlspecialchars($request->request->get('nomens'));
						$nomnat = htmlspecialchars($request->request->get('nomnat'));
						$nomsal = htmlspecialchars($request->request->get('nomsal'));
						$nomjour = htmlspecialchars($request->request->get('nomjour'));
						$semestre = htmlspecialchars($request->request->get('semestre'));
						$periode = htmlspecialchars($request->request->get('periode'));
						$anneedebut = htmlspecialchars($request->request->get('yearval'));
						$hdeb = htmlspecialchars($request->request->get('hdeb'));
						$mindeb = htmlspecialchars($request->request->get('mindeb'));
						$hfin = htmlspecialchars($request->request->get('hfin'));
						$minfin = htmlspecialchars($request->request->get('minfin'));
						$doctrine = $this->getDoctrine();
						$em = $doctrine->getManager();
						
						$departement = $em->getRepository('PedagogiePedagogieBundle:Departement')->findOneById($nomdep);
						$filiere = $em->getRepository('PedagogiePedagogieBundle:Filiere')->findOneById($nomfil);
						$classe = $em->getRepository('PedagogiePedagogieBundle:Classe')->findOneById($nomcls);
						$groupe = $em->getRepository('PedagogiePedagogieBundle:Groupe')->findOneById($nomgrp);
						$discipline = $em->getRepository('PedagogiePedagogieBundle:Discipline')->findOneById($nomdis);
						$matiere = $em->getRepository('PedagogiePedagogieBundle:Matiere')->findOneById($nommat);
						$nature = $em->getRepository('PedagogiePedagogieBundle:Nature')->findOneById($nomnat);
						$enseignant = $em->getRepository('PedagogiePedagogieBundle:Enseignant')->findOneById($nomens);
						$salle = $em->getRepository('PedagogiePedagogieBundle:Salle')->findOneById($nomsal);
						$jour = $em->getRepository('PedagogiePedagogieBundle:Jour')->findOneById($nomjour);
						$prdes = $em->getRepository('PedagogiePedagogieBundle:Periode')->findOneById($periode) ;
						$smtre = $em->getRepository('PedagogiePedagogieBundle:Semestre')->findOneByCode($semestre);
						
						$heureDebut =  new \DateTime($anneedebut.'-09-01');
						$heureDebut->setTime($hdeb,$mindeb);
						$heureFin =  new \DateTime(1+$anneedebut.'-06-10');
						$heureFin->setTime($hfin,$minfin);
						
						$emploi = $em->getRepository('PedagogiePedagogieBundle:Emploi')->findExist($salle,$jour,$heureDebut);
						
						if($emploi== null || empty($emploi))
						{
							$emploi = $em->getRepository('PedagogiePedagogieBundle:Emploi')->findExistEnseignant($jour,$heureDebut,$enseignant);
							
							if($emploi== null || empty($emploi))
							{
								$emploi = new Emploi();
								$emploi->setDepartements($departement);
								$emploi->setFilieres($filiere);
								$emploi->setClasses($classe);
								$emploi->setGroupes($groupe);
								$emploi->setDiscipline($discipline);
								$emploi->setMatiere($matiere);
								$emploi->setEnseignants($enseignant);
								$emploi->setNatures($nature);
								$emploi->setJours($jour);
								$emploi->setSalles($salle);
								$emploi->setDateMaj();
								$emploi->setHeureDebut($heureDebut); 
								$emploi->setHeureFin($heureFin);
								$emploi->setPeriode($prdes);
								$emploi->setSemestre($smtre);
														
								$em->persist($emploi); // Modifie l'entité de la base de données
								$em->flush(); // Exécute un INSERT sur $emploi
												
								$savehandle = $this->get('pedagogie.filierehandle');
								$savehandle->saveAction($this,$request->cookies->get('session_id'),'Ajout','Ajout d\'emploi du temps  par '.$request->cookies->get('nomuser')) ;
		
								$data['success'] = true;
								$data['message'] = ' Ajout Reussi !';
								$data["errors"] = false;
								$data['is_successful_login'] = true;
								
							}
							else
							{
								// if there are items in our errors array, return those errors
								$data['success'] = false;
								$data['message'] = " Echec de l'ajout - L'enseignant est occupé ce jour à cet heure !";
								$errors['nomens']  = " L'enseignant est occupé !";
								$data['errors']  = $errors;
							}
						}
						else
						{
							$perd = $emploi->getPeriode() ; 
							if($perd->getId() == 2 && $perd->getId() == $prdes->getId())
							{
								$emploi = new Emploi();
								$emploi->setDepartements($departement);
								$emploi->setFilieres($filiere);
								$emploi->setClasses($classe);
								$emploi->setGroupes($groupe);
								$emploi->setDiscipline($discipline);
								$emploi->setMatiere($matiere);
								$emploi->setEnseignants($enseignant);
								$emploi->setNatures($nature);
								$emploi->setJours($jour);
								$emploi->setSalles($salle);
								$emploi->setHeureDebut($heureDebut); 
								$emploi->setHeureFin($heureFin);
								$emploi->setPeriode($prdes);
								$emploi->setSemestre($smtre);
														
								$em->persist($emploi); // Modifie l'entité de la base de données
								$em->flush(); // Exécute un INSERT sur $emploi
														
								$data['success'] = true;
								$data['message'] = ' Ajout Reussi !';
								$data["errors"] = false;
								$data['is_successful_login'] = true;
							}
							else
							{
								// if there are items in our errors array, return those errors
								$data['success'] = false;
								$data['message'] = " Echec de l'ajout - Le jour , l'heure et salle sont deja pris  !";
								$data['errors']  = $errors;
							}
							
						}
					}
					
			$response = new Response(json_encode($data));
			$response->headers->set('Content-Type', 'application/json');
			return $response;

    }
    
    public function EmploiHandleAction()
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
            $response       = new Response();
			
			
		  if ($request->request->get('tag') !== null && $request->request->get('tag') != '') 
			{
                      
				// check for tag type
				if ($tag == 'deleteemp') 
				{
                    $response = $this->deleteemploiAction();
				}
				else if($tag == 'updateemp')
				{
					$response = $this->updateemploiAction();
				}
				else if($tag == 'addemp')
				{
					$response = $this->addemploiAction();
				}
				else if($tag == 'getfilemp')
				{
					$response = $this->EmploiFiliereAction();
				}
				else if($tag == 'getgrpemp')
				{
					$response = $this->EmploiGroupeAction();
				}
				else if($tag == 'getsalemp')
				{
					$response = $this->EmploiSalleAction();
				}
				else if($tag == 'getensemp')
				{
					$response = $this->EmploiEnseignantAction();
				}
				else 
				{
					// The tag is not deleteemp or updateemp or addemp ==> failure
					
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
