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
						$discipline = $em->getRepository('PedagogiePedagogieBundle:Discipline')->findOneById($nomdis);
						$allmat = $em->getRepository('PedagogiePedagogieBundle:Matiere')->findByDiscipline($discipline);
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
   
   public function MatiereHandleAction()
   {
		
   }
	
	
}
