<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Cookie;

class DefaultController extends Controller
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
	
    
    public function indexAction(Request $request)
    {
		/* replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'base_dir' => realpath($this->container->getParameter('kernel.root_dir').'/..'),
        ));
		*/
		
		include("common.php");
		$request = $this->getRequest();
		$session_id = $request->cookies->get('session_id');
		$typeuser = $request->cookies->get('typeuser');
		$logout = $request->query->get('logout');
		
		if($logout === 'true')
		{
			
			session_destroy();
            $session_id = null;
            setcookie('session_remember', FALSE, time()+3600*24*(-100), null, null, false, true);
			setcookie('session_id',NULL, time()+3600*24*(-100), null, null, false, true);
			setcookie('is_successful_login', FALSE, time()+3600*24*(-100), null, null, false, true);
            setcookie('nomuser', FALSE, time()+3600*24*(-100), null, null, false, true);
			setcookie('typeuser','normal', time()+3600*24*(-100), null, null, false, true);
            $session = $this->get('session');
			$session->set('session_id',$session_id);
            $session->set('session_remember',$session_id);
            $session->set('is_successful_login',$session_id);
                       
			
			return $this->render('default/accueil.html.twig',array('lang' => $lang,'session_id' => $session_id,'typeuser' => $typeuser,'allfiliere' => $this->allfiliere,'alldepartement' => $this->alldepartement,'allmatiere' => $this->allmatiere,'allgroupe' => $this->allgroupe,'alldiscipline' => $this->alldiscipline,'allemploi' => $this->allemploi,'allclasse' => $this->allclasse));
			exit;
		}
		else
		{
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
                //$this->allemploi = $filhandle->getAllEmploi($this);
				//$this->alldevoir = $filhandle->getAllDevoir($this);
				//$this->allvoeux = $filhandle->getAllVoeux($this);
			if(!empty($session_id))
			{
					   
									
				if($typeuser === 'admin')
				{
									
					return $this->render('default/accueiladmin.html.twig',array('nomuser' => $nomuser,'lang' => $lang,'session_id' => $session_id,'typeuser' => $typeuser,'allfiliere' => $this->allfiliere,'alldepartement' => $this->alldepartement,'allmatiere' => $this->allmatiere,'allgroupe' => $this->allgroupe,'alldiscipline' => $this->alldiscipline,'allemploi' => $this->allemploi,'allvoeux' => $this->allvoeux,'alldevoir' => $this->alldevoir,'allclasse' => $this->allclasse));
				}
				elseif($typeuser === 'prof')
				{
					return $this->render('default/accueilprof.html.twig',array('nomuser' => $nomuser,'lang' => $lang,'session_id' => $session_id,'typeuser' => $typeuser,'allfiliere' => $this->allfiliere,'alldepartement' => $this->alldepartement,'allmatiere' => $this->allmatiere,'allgroupe' => $this->allgroupe,'alldiscipline' => $this->alldiscipline,'allemploi' => $this->allemploi,'allvoeux' => $this->allvoeux,'alldevoir' => $this->alldevoir,'allclasse' => $this->allclasse));
				}
				elseif($typeuser === 'etudiant')
				{
					return $this->render('default/accueiletudiant.html.twig',array('nomuser' => $nomuser,'lang' => $lang,'session_id' => $session_id,'typeuser' => $typeuser,'allfiliere' => $this->allfiliere,'alldepartement' => $this->alldepartement,'allmatiere' => $this->allmatiere,'allgroupe' => $this->allgroupe,'alldiscipline' => $this->alldiscipline,'allemploi' => $this->allemploi,'alldevoir' => $this->alldevoir,'allclasse' => $this->allclasse));
				}
			}
			else
			{
				return $this->render('default/accueil.html.twig',array('nomuser' => $nomuser,'lang' => $lang,'session_id' => $session_id,'typeuser' => $typeuser,'allfiliere' => $this->allfiliere,'alldepartement' => $this->alldepartement,'allmatiere' => $this->allmatiere,'allgroupe' => $this->allgroupe,'alldiscipline' => $this->alldiscipline,'allemploi' => $this->allemploi,'allvoeux' => $this->allvoeux,'alldevoir' => $this->alldevoir,'allclasse' => $this->allclasse));
			}
		
        }
    }
}
