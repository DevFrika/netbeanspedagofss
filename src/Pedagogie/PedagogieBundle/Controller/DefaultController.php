<?php

namespace Pedagogie\PedagogieBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Pedagogie\PedagogieBundle\Entity\Filiere;
use Pedagogie\PedagogieBundle\Entity\Departement;

class DefaultController extends Controller
{
    private $allfiliere ;
    private $alldepartement ;
    private $allgroupe ;
	private $allclasse ;
    private $alldiscipline ;
    private $allenseignant;
    private $allsituation ;
    private $allgrade ;
    private $allmatiere ;
    private $allemploi ;
	private $alldevoir ;
	private $allvoeux ;
	private $allsalle ;
	private $alllieux ;
    private $allnature ;         
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
                $this->allemploi = $filhandle->getAllEmploi($this);
				$this->alldevoir = $filhandle->getAllDevoir($this);
				$this->allvoeux = $filhandle->getAllVoeux($this);
				$this->allenseignant = $filhandle->getAllEnseignant($this);
				$this->allsituation = $filhandle->getAllSituation($this);
				$this->allgrade = $filhandle->getAllGrade($this);
				$this->allsalle = $filhandle->getAllSalle($this);
				$this->alllieux = $filhandle->getAllLieux($this);
				$this->allnature = $filhandle->getAllNature($this);
		if(!empty($session_id))
		{
                   
                                
			if($typeuser === 'admin')
			{
                                
				return $this->render('PedagogiePedagogieBundle:Default:admin.html.twig',array('nomuser' => $nomuser,'lang' => $lang,'session_id' => $session_id,'typeuser' => $typeuser,'allfiliere' => $this->allfiliere,'alldepartement' => $this->alldepartement,'allmatiere' => $this->allmatiere,'allgroupe' => $this->allgroupe,'alldiscipline' => $this->alldiscipline,'allemploi' => $this->allemploi,'allvoeux' => $this->allvoeux,'alldevoir' => $this->alldevoir,'allclasse' => $this->allclasse,'allenseignant' => $this->allenseignant,'allsituation' => $this->allsituation,'allgrade' => $this->allgrade,'allsalle' => $this->allsalle,'alllieux' => $this->alllieux,'allnature' => $this->allnature));
			}
			elseif($typeuser === 'prof')
			{
				return $this->render('PedagogiePedagogieBundle:Default:prof.html.twig',array('nomuser' => $nomuser,'lang' => $lang,'session_id' => $session_id,'typeuser' => $typeuser,'allfiliere' => $this->allfiliere,'alldepartement' => $this->alldepartement,'allmatiere' => $this->allmatiere,'allgroupe' => $this->allgroupe,'alldiscipline' => $this->alldiscipline,'allemploi' => $this->allemploi,'allvoeux' => $this->allvoeux,'alldevoir' => $this->alldevoir,'allclasse' => $this->allclasse,'allenseignant' => $this->allenseignant,'allsituation' => $this->allsituation,'allgrade' => $this->allgrade,'allsalle' => $this->allsalle,'alllieux' => $this->alllieux,'allnature' => $this->allnature));
			}
			elseif($typeuser === 'etudiant')
			{
				return $this->render('PedagogiePedagogieBundle:Default:etudiant.html.twig',array('nomuser' => $nomuser,'lang' => $lang,'session_id' => $session_id,'typeuser' => $typeuser,'allfiliere' => $this->allfiliere,'alldepartement' => $this->alldepartement,'allmatiere' => $this->allmatiere,'allgroupe' => $this->allgroupe,'alldiscipline' => $this->alldiscipline,'allemploi' => $this->allemploi,'alldevoir' => $this->alldevoir,'allclasse' => $this->allclasse,'allenseignant' => $this->allenseignant,'allsituation' => $this->allsituation,'allgrade' => $this->allgrade,'allsalle' => $this->allsalle,'alllieux' => $this->alllieux,'allnature' => $this->allnature));
			}
		}
		else
		{
			return $this->render('PedagogiePedagogieBundle:Default:index.html.twig',array('lang' => $lang,'session_id' => $session_id,'typeuser' => $typeuser,'allfiliere' => $this->allfiliere,'alldepartement' => $this->alldepartement,'allmatiere' => $this->allmatiere,'allgroupe' => $this->allgroupe,'alldiscipline' => $this->alldiscipline,'allemploi' => $this->allemploi,'allclasse' => $this->allclasse,'allenseignant' => $this->allenseignant,'allsituation' => $this->allsituation,'allgrade' => $this->allgrade));
        }
    }
	
}
