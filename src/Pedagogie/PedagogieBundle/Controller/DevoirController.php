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
use Pedagogie\PedagogieBundle\Entity\Enseignant;
use Pedagogie\PedagogieBundle\Entity\Devoir;


class DevoirController extends Controller
{

private $allfiliere ;
    private $alldepartement ;
    private $allgroupe ;
    private $alldiscipline ;
    private $allmatiere ;
    private $allemploi ;
	private $alldevoir ;
	private $allvoeux ;
                                
   
   
   public function GetEnsDevoirAction()
   {
	  // On récupère la requête
		$request = $this->getRequest();
		// On récupère notre paramètre tag
		$tag = $request->request->get('tag');
		
		
		 
			$errors         = array();      // array to hold validation errors
			$data           = array();      // array to pass back data
			$devoirs        = array();    
			$response = new Response();
			
		
						// Request type is check Login
						
						// validate the variables ======================================================
					// if any of these variables don't exist, add an error to our $errors array
					
					if ($request->request->get('tag') !== null && $request->request->get('tag') != '') 
			{
                      
				// check for tag type
				if ($tag == 'getensdev') 
				{
						$doctrine = $this->getDoctrine();
						$em = $doctrine->getManager();
						$nomens = htmlspecialchars($request->request->get('nomens'));
						$enseignant = $em->getRepository('PedagogiePedagogieBundle:Enseignant')->findOneById($nomens);
						$alldev = $em->getRepository('PedagogiePedagogieBundle:Devoir')->findByEnseignant($enseignant);
						$i = 0;
						foreach( $alldev as $dev )
						{
							$devoirs['dev'.$i] = array('devoir' => $dev->getDevoir() );
							$i++;
						}
						
						if(empty($devoirs))
						{
							$data['success'] = false;
							$data['message'] = ' Erreur de recuperation des Devoirs - Aucun Devoir trouvé !';
							$errors['tag'] = " Parametre 'tag' = ".$tag." inconnu . ";
							$data['errors']  = $errors;
							$data['devoirs'] = $devoirs;
						}
						else
						{
							$data['success'] = true;
							$data['message'] = ' Recuperation des Devoirs Reussie !';
							$data["errors"] = false;
							$data['devoirs'] = $devoirs;
						}
						
						
						
				}
				else
				{
						
						
						$data['success'] = false;
						$data['message'] = ' Erreur de recuperation des Devoirs !';
						$errors['tag'] = " Parametre 'tag' = ".$tag." inconnu . ";
						$data['errors']  = $errors;
						$data['devoirs'] = $devoirs;
						
				}
			}
			else
			{
						$data['success'] = false;
						$data['message'] = " Parametre 'tag' = ".$tag." inconnu . ";
						$errors['tag'] = " Parametre 'tag' = ".$tag." inconnu . ";
						$data['errors']  = $errors;
						$data['devoirs'] = $devoirs;
			}
			
			$response = new Response(json_encode($data));
			$response->headers->set('Content-Type', 'application/json');
			return $response;
   }
   
   public function DevoirHandleAction()
   {
		
   }	
	
	
}
