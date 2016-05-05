<?php

namespace Fss\Website\DepartementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

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
                                
    public function indexAction()
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
                //$this->allemploi = $filhandle->getAllEmploi($this);
				//$this->alldevoir = $filhandle->getAllDevoir($this);
				//$this->allvoeux = $filhandle->getAllVoeux($this);
		if(!empty($session_id))
		{
                   
                                
			if($typeuser === 'admin')
			{
                                
				return $this->render('FssWebsiteDepartementBundle:Default:adminindex.html.twig',array('nomuser' => $nomuser,'lang' => $lang,'session_id' => $session_id,'typeuser' => $typeuser,'allfiliere' => $this->allfiliere,'alldepartement' => $this->alldepartement,'allmatiere' => $this->allmatiere,'allgroupe' => $this->allgroupe,'alldiscipline' => $this->alldiscipline,'allemploi' => $this->allemploi,'allvoeux' => $this->allvoeux,'alldevoir' => $this->alldevoir,'allclasse' => $this->allclasse));
			}
			elseif($typeuser === 'prof')
			{
				return $this->render('FssWebsiteDepartementBundle:Default:profindex.html.twig',array('nomuser' => $nomuser,'lang' => $lang,'session_id' => $session_id,'typeuser' => $typeuser,'allfiliere' => $this->allfiliere,'alldepartement' => $this->alldepartement,'allmatiere' => $this->allmatiere,'allgroupe' => $this->allgroupe,'alldiscipline' => $this->alldiscipline,'allemploi' => $this->allemploi,'allvoeux' => $this->allvoeux,'alldevoir' => $this->alldevoir,'allclasse' => $this->allclasse));
			}
			elseif($typeuser === 'etudiant')
			{
				return $this->render('FssWebsiteDepartementBundle:Default:etudiantindex.html.twig',array('nomuser' => $nomuser,'lang' => $lang,'session_id' => $session_id,'typeuser' => $typeuser,'allfiliere' => $this->allfiliere,'alldepartement' => $this->alldepartement,'allmatiere' => $this->allmatiere,'allgroupe' => $this->allgroupe,'alldiscipline' => $this->alldiscipline,'allemploi' => $this->allemploi,'alldevoir' => $this->alldevoir,'allclasse' => $this->allclasse));
			}
		}
		else
		{
			return $this->render('FssWebsiteDepartementBundle:Default:index.html.twig',array('lang' => $lang,'session_id' => $session_id,'typeuser' => $typeuser,'allfiliere' => $this->allfiliere,'alldepartement' => $this->alldepartement,'allmatiere' => $this->allmatiere,'allgroupe' => $this->allgroupe,'alldiscipline' => $this->alldiscipline,'allemploi' => $this->allemploi,'allclasse' => $this->allclasse));
        }
    }
	
	
	public function indexdepAction()
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
                //$this->allemploi = $filhandle->getAllEmploi($this);
				//$this->alldevoir = $filhandle->getAllDevoir($this);
				//$this->allvoeux = $filhandle->getAllVoeux($this);
		if(!empty($session_id))
		{
                   
                                
			if($typeuser === 'admin')
			{
                                
				return $this->render('FssWebsiteDepartementBundle:Default:adminindexdep.html.twig',array('nomuser' => $nomuser,'lang' => $lang,'session_id' => $session_id,'typeuser' => $typeuser,'allfiliere' => $this->allfiliere,'alldepartement' => $this->alldepartement,'allmatiere' => $this->allmatiere,'allgroupe' => $this->allgroupe,'alldiscipline' => $this->alldiscipline,'allemploi' => $this->allemploi,'allvoeux' => $this->allvoeux,'alldevoir' => $this->alldevoir,'allclasse' => $this->allclasse));
			}
			elseif($typeuser === 'prof')
			{
				return $this->render('FssWebsiteDepartementBundle:Default:profindexdep.html.twig',array('nomuser' => $nomuser,'lang' => $lang,'session_id' => $session_id,'typeuser' => $typeuser,'allfiliere' => $this->allfiliere,'alldepartement' => $this->alldepartement,'allmatiere' => $this->allmatiere,'allgroupe' => $this->allgroupe,'alldiscipline' => $this->alldiscipline,'allemploi' => $this->allemploi,'allvoeux' => $this->allvoeux,'alldevoir' => $this->alldevoir,'allclasse' => $this->allclasse));
			}
			elseif($typeuser === 'etudiant')
			{
				return $this->render('FssWebsiteDepartementBundle:Default:etudiantindexdep.html.twig',array('nomuser' => $nomuser,'lang' => $lang,'session_id' => $session_id,'typeuser' => $typeuser,'allfiliere' => $this->allfiliere,'alldepartement' => $this->alldepartement,'allmatiere' => $this->allmatiere,'allgroupe' => $this->allgroupe,'alldiscipline' => $this->alldiscipline,'allemploi' => $this->allemploi,'alldevoir' => $this->alldevoir,'allclasse' => $this->allclasse));
			}
		}
		else
		{
			return $this->render('FssWebsiteDepartementBundle:Default:indexdep.html.twig',array('lang' => $lang,'session_id' => $session_id,'typeuser' => $typeuser,'allfiliere' => $this->allfiliere,'alldepartement' => $this->alldepartement,'allmatiere' => $this->allmatiere,'allgroupe' => $this->allgroupe,'alldiscipline' => $this->alldiscipline,'allemploi' => $this->allemploi,'allclasse' => $this->allclasse));
        }
    }
	
}
