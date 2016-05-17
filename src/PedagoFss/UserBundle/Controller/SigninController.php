<?php

namespace PedagoFss\UserBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Cookie;

class SigninController extends Controller
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
                                
   
	public function signinAction()
    {
		//include("common.php");
		// On récupère la requête
		$request = $this->getRequest();
		// On récupère notre paramètre tag
		$tag = $request->request->get('tag');
		
		if($request->isXmlHttpRequest())
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
		
		
      if ($request->request->get('tag')!==null && $request->request->get('tag') != '') 
		{
				if ($tag == 'register') 
				{
					
						if (empty($request->request->get('username')))
					{
						$errors['username'] = "Nom d'utilisateur requis .";
					}
					
					if (empty($request->request->get('email')))
					{
						$errors['email'] = "E-mail requis .";

					}
					
					if (empty($request->request->get('password')))
					{
						$errors['password'] = "Password requis .";
					}
					
						if ( ! empty($errors)) 
					{

						// if there are items in our errors array, return those errors
						$data['success'] = false;
						$data['message'] = "Erreur veuillez ressayez  !";
						$errors['tag'] = " Erreur lors de votre inscription veuillez ressayez ultérieurement.";
						$data['errors']  = $errors;
						
						
					}
					else
					{
								
							// Request type is Register new user
							$famname = htmlspecialchars($request->request->get('famname'));
							$surname = htmlspecialchars($request->request->get('surname'));
							$username = htmlspecialchars($request->request->get('username'));
							$email = htmlspecialchars($request->request->get('email'));
							$password = htmlspecialchars($request->request->get('password'));
				 
							// check if user is already existed
							
						$query=$fssdb->prepare(" SELECT * FROM utilisateur where Email =:email ");
						$query->bindValue(':email', $email, \PDO::PARAM_STR);
						$query->execute();	
						$qdata=$query->fetch();
							
							if ($qdata['Email'] == $email) {
								// user is already existed - error response
								$data['success'] = false;
								$data["message"] = " Cette email d'identification existe deja ! ";
								$errors['tag'] = " Cet email d'identification existe deja ! .";
								$data['errors']  = $errors;
								
								
							} 
							else
							{
								// store user
						
						
						$uuid = uniqid('fss_u', true);
						$encrypted_password = password_hash($password, PASSWORD_DEFAULT); // encrypted password
						$regday = date("Y-m-j");
						$type_user= 'admin';
						
						$query=$fssdb->prepare('INSERT INTO utilisateur (id,Nom,Prenom,Username,Password,Typeuser,Email,Createtime,Userdetails) VALUES (:uuid,:famname,:surname, :username, :encrypted_password, :type_user, :email, :regday,:userdetails) ');
						$query->bindValue(':uuid', $uuid, \PDO::PARAM_STR);
						$query->bindValue(':famname', $famname, \PDO::PARAM_STR);
						$query->bindValue(':surname', $surname, \PDO::PARAM_STR);
						$query->bindValue(':username', $username, \PDO::PARAM_STR);
						$query->bindValue(':email', $email, \PDO::PARAM_STR);
						$query->bindValue(':encrypted_password', $encrypted_password, \PDO::PARAM_STR);
						$query->bindValue(':regday', $regday, \PDO::PARAM_STR);
						$query->bindValue(':userdetails', 0, \PDO::PARAM_INT);
						$query->bindValue(':type_user', $type_user, \PDO::PARAM_STR);
						
								if ($query->execute()) 
								{
									
									$query=$fssdb->prepare(" SELECT * FROM utilisateur where Email =:email ");
									$query->bindValue(':email', $email, \PDO::PARAM_STR);
									$query->execute();	
									$qdata=$query->fetch();
									
									// user stored successfully
									$data["uid"] = $qdata["Iduser"];
									$data["user"]["username"] = $qdata["Username"];
									$data["user"]["email"] = $qdata["Email"];
									$data["user"]["createtime"] = $qdata["Createtime"];
									$data["typeuser"] = $qdata["Typeuser"];
									$data['success'] = true;
									$data['message'] = ' Inscription Reussie !';
									$data["errors"] = false;
									$data['is_successful_login'] = true;
										
									
									
								}
								else 
								{
									
									
									// user failed to store
									$data['success'] = false ;
									$data["message"] = " Erreur lors de votre inscription veuillez ressayez ultérieurement ";
									$errors['tag'] = " Erreur lors de votre inscription veuillez ressayez ultérieurement.";
									$data['errors']  = $errors;
									
									
								}
							}
					}
					
						
				}
				else 
				{
						// The tag is not login or register ==> failure
						
						$data['success'] = false;
						$data['message'] = " Parametre 'tag' = ".$tag." inconnu . Le parametre doit etre 'register' .";
						$errors['tag'] = " Parametre 'tag' = ".$tag." inconnu . Le parametre doit etre 'register' .";
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
				
			return $this->render('PedagoFssUserBundle:Default:signin.html.twig',array('nomuser' => $nomuser,'lang' => $lang,'session_id' => $session_id,'typeuser' => $typeuser,'allfiliere' => $this->allfiliere,'alldepartement' => $this->alldepartement,'allmatiere' => $this->allmatiere,'allgroupe' => $this->allgroupe,'alldiscipline' => $this->alldiscipline,'allemploi' => $this->allemploi,'allvoeux' => $this->allvoeux,'alldevoir' => $this->alldevoir,'allclasse' => $this->allclasse));
		
		}
    }

}
