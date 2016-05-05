<?php

namespace PedagoFss\UserBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Cookie;

include('includes/files/config.php');

class LoginController extends Controller
{
	
		
	private $allfiliere ;
    private $alldepartement ;
    private $allgroupe ;
	private $allclasse ;
    private $alldiscipline ;
    private $allmatiere ;
    private $allemploi ;
	private $alldevoir ;
	private $allvoeux ;
                                
   
	
	public function loginAction()
    {
		//include("common.php");
		// On récupère la requête
		$request = $this->getRequest();
		// On récupère notre paramètre tag
		$tag = $request->request->get('tag');
		
		if( $request->isXmlHttpRequest() )
		{
			
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
 
		
		
      if ($request->request->get('tag') !== null && $request->request->get('tag') != '') 
		{
			
		 
	   
	 
			// check for tag type
			if ($tag == 'login') 
			{
					// Request type is check Login
					
					// validate the variables ======================================================
				// if any of these variables don't exist, add an error to our $errors array

				if (empty($request->request->get('email')))
				{
					$errors['email'] = 'E-mail requis .';

				}

				if (empty($request->request->get('password')))
				{
					$errors['password'] = 'Mot de passe requis.';
				}
				
					if ( ! empty($errors)) 
				{

					// if there are items in our errors array, return those errors
					$data['success'] = false;
					$data['message'] = ' Echec de connexion !';
					$data['errors']  = $errors;
					
				}
				else
				{
					$email = htmlspecialchars($request->request->get('email'));
					$password = htmlspecialchars($request->request->get('password'));
					
					
					$query=$fssdb->prepare(" SELECT * FROM utilisateur where Email =:email ");
					$query->bindValue(':email', $email, \PDO::PARAM_STR);
					$query->execute();	
					$qdata=$query->fetch();
					
					// check for user
					
					// password_verify($password,$qdata['password'])
					if (password_verify($password,$qdata['Password'])) 
					{
						// user found
						
						$data["uid"] = $qdata["id"];
						$data["user"]["username"] = $qdata["Username"];
						$data["user"]["email"] = $qdata["Email"];
						$data["user"]["createtime"] = $qdata["Createtime"];
						$data["typeuser"] = $qdata["Typeuser"];
						$data['success'] = true;
						$data['message'] = ' Connexion Reussie !';
						$data["errors"] = false;
						$data['is_successful_login'] = true;
						
					}
					else 
					{
					
						// user not found
						
						$data['success'] = false;
						$data['is_successful_login'] = false;
						$data["message"] = "E-mail ou mot de passe incorrecte veuillez ressayez !" ;
						$errors['tag'] = " E-mail ou mot de passe incorrecte veuillez ressayez ." ;
						$data['errors']  = $errors;
						
						
					}
					
				}
				
				
					
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
			
		$response = new Response(json_encode($data));
		$response->headers->set('Content-Type', 'application/json');
		return $response;
	
		
		}
		else
		{
			include("common.php");
				$request = $this->getRequest();
				$session_id = $request->cookies->get('session_id');
				$typeuser = $request->cookies->get('typeuser');
				$nomuser = $request->cookies->get('nomuser');
		
                $filhandle = $this->get('pedagogie.filierehandle');
                $this->allfiliere = $filhandle->getAllFiliere($this);
                $this->alldepartement = $filhandle->getAllDepartement($this);
                $this->allgroupe = $filhandle->getAllGroupe($this);
                $this->alldiscipline = $filhandle->getAllDiscipline($this);
                $this->allmatiere = $filhandle->getAllMatiere($this);
				$this->allclasse = $filhandle->getAllClasse($this);
				
			return $this->render('PedagoFssUserBundle:Default:login.html.twig',array('nomuser' => $nomuser,'lang' => $lang,'session_id' => $session_id,'typeuser' => $typeuser,'allfiliere' => $this->allfiliere,'alldepartement' => $this->alldepartement,'allmatiere' => $this->allmatiere,'allgroupe' => $this->allgroupe,'alldiscipline' => $this->alldiscipline,'allemploi' => $this->allemploi,'allvoeux' => $this->allvoeux,'alldevoir' => $this->alldevoir,'allclasse' => $this->allclasse));
		}
    }
	
}
