<?php 

	namespace Pedagogie\PedagogieBundle\DataFixtures\ORM;
	
	use Doctrine\Common\DataFixtures\FixtureInterface;
	use Doctrine\Common\Persistence\ObjectManager;
	use Pedagogie\PedagogieBundle\Entity\Filiere;
	use Pedagogie\PedagogieBundle\Entity\Departement;
	use Pedagogie\PedagogieBundle\Entity\Discipline;
	use Pedagogie\PedagogieBundle\Entity\Matiere;
	use Pedagogie\PedagogieBundle\Entity\Classe;
	use Pedagogie\PedagogieBundle\Entity\Groupe;
	use Pedagogie\PedagogieBundle\Entity\Grades;
	use Pedagogie\PedagogieBundle\Entity\Enseignant;
	use Pedagogie\PedagogieBundle\Entity\Situations;
	use Pedagogie\PedagogieBundle\Entity\Nature;
	use Pedagogie\PedagogieBundle\Entity\Jour;
	use Pedagogie\PedagogieBundle\Entity\Lieux;
	use Pedagogie\PedagogieBundle\Entity\Salle;
	use Pedagogie\PedagogieBundle\Entity\Periode;
	use Pedagogie\PedagogieBundle\Entity\Semestre;
	
	class Filieres implements FixtureInterface
	{
	// Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
	public function load(ObjectManager $manager)
	{
			// Liste des noms des departements à ajouter
			$nomdep = array('SCIENCES DE LA TERRE', 'BIOLOGIE', 'CHIMIE', 'INFORMATIQUE','MATH','PHYSIQUE','PREPARATOIRES');
			$numdep = array(1, 2, 3, 4, 5, 6,7);
			
			
			// Liste des noms des filieres à ajouter
			$nomfil = array('LAC', 'LAEEA', 'LAGE', 'LAGGT','LAIAA','LAMF','LAPI','LARI','LATE','LFC','LFI','LFM','LFMA','LFMF','LFP','LFPC','LFSNA','LFSTU','LFSV','LFSVE-BMC','MPC','MPGP','MPI','MPIAA','MPOTMGG','MPP','MPQAPA','MRBDE','MRC','MRI','MRM','MRP','MRST','MRSV','PREPARATOIRE BIOLOGIE GEOLOGIE (BG) ','PREPARATOIRE MATHEMATIQUES (MP) ','PREPARATOIRE PHYSIQUE CHIMIE (PC) ');
			$descfil = array('Licence Appliqué en Chimie', 'Licence Appliqué en EEA','Licence Appliqué en GE','Licence Appliqué en GGT','Licence Appliqué en IAA','Licence Appliqué en MF','Licence Appliqué en PI','Licence Appliqué en Réseaux Informatique','Licence Appliqué en TE','Licence Fondamentale en Chimie','Licence Fondamentale en Informatique','Licence Fondamentale en Mathematiques','Licence Fondamentale en MA','Licence Fondamentale en MF','Licence Fondamentale en Physique','Licence Fondamentale en Physique Chimie','Licence Fondamentale en SNA','Licence Fondamentale en STU','Licence Fondamentale en SV','Licence Fondamentale en SVE-BMC','Mastere Professionelle en Chimie','Mastere Professionelle en GP','Mastere Professionelle en Informatique','Mastere Professionelle en IAA','Mastere Professionelle en OTMGG','Mastere Professionelle en PP','Mastere Professionelle en  QAPA','Mastere de Recherche en BDE','Mastere de Recherche en Chimie','Mastere de Recherche en Informatique','Mastere de Recherche en Mathematiques','Mastere de Recherche en Physique','Mastere de Recherche en ST','Mastere de Recherche en SV','Classes Preparatoirs en Biologie et Geologie','Classes Preparatoires en Mathematiques','Classes Preparatoires en Physique et Chimie');
			$depfil = array(3, 1, 1, 1, 1, 1,1,4,1,3,4,5,5,5,6,6,1,1,1,1,3,1,4,4,1,6,6,2,3,4,5,6,1,1,7,7,7); 
			
			
			// Liste des noms des classes à ajouter
			$nomcls = array('LFSTU1', 'LFSV2', 'LFC3', 'LFI1','LFM1','LFP1');
			$ancls = array(1, 2, 3, 1, 1, 1); 
			
			
			// Liste des noms des groupes à ajouter
			$nomgrp = array('LFSTU1A', 'LFSV2A', 'LFC3A', 'LFI1A','LFM1A','LFP1A');
			
			
			// Liste des noms des disciplines à ajouter
			$nomdisc = array('ANGLAIS', 'FRANCAIS', 'INFORMATIQUE','MATH','PHYSIQUE');
			
			
			// Liste des noms des matieres à ajouter
			$nommat = array('ANGLAIS', 'Techniques d\'expression ', 'BASE DE DONNEE','ALGEBRE LINEAIRE','CRISTALLOGRAPHIE');
			
			
			// Liste des noms des natures à ajouter
			$codenat 	= array('C','CI','CI/TP','TD','TP','TD/TP');
			$cnat 		= array(1, 0.667, 0.667, 0, 0, 0);
			$tdnat 		= array(0, 0, 0, 1, 0, 0.5);
			$tpnat 		= array(0, 0.334, 0.334, 0, 1, 0.5);
			$desnat 	= array('Cours', 'Cours Intégré', 'Cours Intégré/TP', 'Travaux Dirigés','Travaux Pratiques','Travaux Dirigés/Travaux Pratiques');
			
			
			// Liste des noms des situations à ajouter
			$nomsit = array('Permanant', 'Complément Charges', 'Vacataire', 'Contractuel','Contrat Expert','Contrat Etudiant','Contrat Assistant');
			
			
			// Liste des noms des grades à ajouter
			$nomgrd 	= array('Assistant', 'Assistant Contractuel','Chargé de Recherche Agricole','Etudiant','Etudiant avec DEA','Ingénieur des Travaux','Ingénieur Principal','Maître de Recherche','Maître de Conférence','Maître Assistant', 'Professeur Agrégé de l\'enseignement secondaire', 'Professeur de l\'enseignement secondaire','Professeur Principal de l\'enseignement secondaire','Professeur de l\'enseignement supérieure','Professeur de l\'enseignement technique','Professeur Principal de l\'enseignement technique','','Technologue');
			$cgrd 		= array(0,0,0,0,0,0,0,0,5.5,0,12,0,0,5.5,0,0,0);
			$tdgrd		= array(11,11,0,12,12,12,12,0,0,9.5,0,12,12,0,12,12,0);
			$tpgrd 		= array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);
			$codegrd 	= array('A', 'AC', 'CRA', 'ETU','ETU/DEA','INGT','INGP','MR','MC','MA','AGR','PES','PPES','PROF','PET','PPET','TECHNO');
			
			// Liste des noms des enseignants à ajouter
			$nomens = array('Bachir Diop', 'Maimouna Ndiaye', 'Nizar Baccari', 'Foulen ben Foulen','Haithem Masmoudi','Mohamed Hammami');
			//$numens = array(1, 2, 3, 4, 5, 6);
			
			// Liste des noms des jours à ajouter
			$nomjour = array('LUNDI', 'MARDI', 'MERCREDI', 'JEUDI','VENDREDI','SAMEDI','DIMANCHE');
			
			// Liste des noms des lieux à ajouter
			$nomlieux = array('*', 'Amphi-Theatres', 'Laboratoires', 'Salles');
			$codelieux = array('*', 'A', 'Lab', 'S');
			
			// Liste des noms des periodes à ajouter
			$nomprd = array('Normal','Quinzaine');
			
			
			// Liste des noms des semestres à ajouter
			$nomsemestre = array('Semestre 1', 'Semestre 2');
			$codesemestre = array('S1','S2');
			
	
			
			$liste_departements;
			$liste_filieres;
			$liste_classes;
			$liste_groupes;
			$liste_disciplines;
			$liste_matieres;
			$liste_situations;
			$liste_grades;
			$liste_lieux;
			$liste_salles;
			$liste_periodes;
			$liste_semestres;
			
			for($i=0;$i<2;$i++)
			{
				// On crée les Periodes
				$liste_periodes[$i] = new Periode();
				$liste_periodes[$i]->setPeriode($nomprd[$i]);

				// On la persiste
				$manager->persist($liste_periodes[$i]);
			}
			
			for($i=0;$i<2;$i++)
			{
				// On crée les Semestres
				$liste_semestres[$i] = new Semestre();
				$liste_semestres[$i]->setSemestre($nomsemestre[$i]);
				$liste_semestres[$i]->setCode($codesemestre[$i]);
				// On la persiste
				$manager->persist($liste_semestres[$i]);
			}
			
			for($i=0;$i<6;$i++)
			{
				// On crée les natures
				$liste_natures[$i] = new Nature();
				$liste_natures[$i]->setNature($codenat[$i]);
				$liste_natures[$i]->setC($cnat[$i]);
				$liste_natures[$i]->setTd($tdnat[$i]);
				$liste_natures[$i]->setTp($tpnat[$i]);
				$liste_natures[$i]->setDescription($desnat[$i]);
				// On la persiste
				$manager->persist($liste_natures[$i]);
			}
			
			for($i=0;$i<4;$i++)
			{
				// On crée les Lieux
				$liste_lieux[$i] = new Lieux();
				$liste_lieux[$i]->setLieux($nomlieux[$i]);
				$liste_lieux[$i]->setCode($codelieux[$i]);
				// On la persiste
				$manager->persist($liste_lieux[$i]);
			}
			
			for($i=1;$i<11;$i++)
			{
				// On crée les Salles
				$liste_salles[$i] = new Salle();
				$liste_salles[$i]->setSalle($codelieux[1].$i);
				$liste_salles[$i]->setLieux($liste_lieux[1]);
				$liste_salles[$i]->setCapacite(140);
				// On la persiste
				$manager->persist($liste_salles[$i]);
			}
			
			for($i=0;$i<17;$i++)
			{
				// On crée les Grades
				$liste_grades[$i] = new Grades();
				$liste_grades[$i]->setGrades($nomgrd[$i]);
				$liste_grades[$i]->setC($cgrd[$i]);
				$liste_grades[$i]->setTd($tdgrd[$i]);
				$liste_grades[$i]->setTp($tpgrd[$i]);
				$liste_grades[$i]->setCode($codegrd[$i]);
				// On la persiste
				$manager->persist($liste_grades[$i]);
			}
			
			for($i=0;$i<7;$i++)
			{
				// On crée les Jours
				$liste_jours[$i] = new Jour();
				$liste_jours[$i]->setJour($nomjour[$i]);
				// On la persiste
				$manager->persist($liste_jours[$i]);
				
				// On crée les Situations
				$liste_situations[$i] = new Situations();
				$liste_situations[$i]->setSituations($nomsit[$i]);
				// On la persiste
				$manager->persist($liste_situations[$i]);
				
			}
			
				for($i=0;$i<7;$i++)
			{
				// On crée les departements
				$liste_departements[$i] = new Departement();
				$liste_departements[$i]->setDepartement($nomdep[$i]);
				
				// On la persiste
				$manager->persist($liste_departements[$i]);
			}
			
			for($i=0;$i<37;$i++)
			{
			
				// On crée les filieres
				$liste_filieres[$i] = new Filiere();
				$liste_filieres[$i]->setFiliere($nomfil[$i]);
				$liste_filieres[$i]->setDescription($descfil[$i]);
				$liste_filieres[$i]->setDepartement($liste_departements[$depfil[$i]-1]);
				// On la persiste
				$manager->persist($liste_filieres[$i]);
				
			}
			
			$z=0;
			for($i=0;$i<37;$i++)
			{
				
			
				if(substr($nomfil[$i], 0,1) == 'L')
				{
					for($j=1;$j<4;$j++)
					{
						/// On crée les classes
						$liste_classes[$z] = new Classe();
						$liste_classes[$z]->setClasse($nomfil[$i].$j);
						$liste_classes[$z]->setAnnee($j);
						$liste_classes[$z]->setFiliere($liste_filieres[$i]);
						$liste_classes[$z]->setDepartement($liste_departements[$depfil[$i]-1]);
						// On la persiste
						$manager->persist($liste_classes[$z]);
						$z++;
					}
					
				}
				else if(substr($nomfil[$i], 0,1) == 'M')
				{
						for($j=1;$j<3;$j++)
					{
						/// On crée les classes
						$liste_classes[$z] = new Classe();
						$liste_classes[$z]->setClasse($nomfil[$i].$j);
						$liste_classes[$z]->setAnnee($j);
						$liste_classes[$z]->setFiliere($liste_filieres[$i]);
						$liste_classes[$z]->setDepartement($liste_departements[$depfil[$i]-1]);
						// On la persiste
						$manager->persist($liste_classes[$z]);
						$z++;
					
					}
					
				}
				else if(substr($nomfil[$i], 0,1) == 'P')
				{
						for($j=1;$j<3;$j++)
					{
						/// On crée les classes
						$liste_classes[$z] = new Classe();
						$liste_classes[$z]->setClasse($nomfil[$i].$j);
						$liste_classes[$z]->setAnnee($j);
						$liste_classes[$z]->setFiliere($liste_filieres[$i]);
						$liste_classes[$z]->setDepartement($liste_departements[$depfil[$i]-1]);
						// On la persiste
						$manager->persist($liste_classes[$z]);
						$z++;
					
					}
					
				}
				
			}
			
			//echo "il y a : ".$z." classes ";
			
			for($i=0;$i<$z;$i++)
			{
				for($y=1;$y<3;$y++)
				{
					// On crée les groupes
					$groupes1 = new Groupe();
					$groupes1->setGroupe($liste_classes[$i]->getClasse().'A'.$y);
					$groupes1->setClasse($liste_classes[$i]);
					$groupes1->setFiliere($liste_classes[$i]->getFiliere());
					$groupes1->setDepartement($liste_classes[$i]->getDepartement());				
					// On la persiste
					$manager->persist($groupes1);
				}
				
				for($y=1;$y<3;$y++)
				{
					// On crée les groupes
					$groupes1 = new Groupe();
					$groupes1->setGroupe($liste_classes[$i]->getClasse().'B'.$y);
					$groupes1->setClasse($liste_classes[$i]);
					$groupes1->setFiliere($liste_classes[$i]->getFiliere());
					$groupes1->setDepartement($liste_classes[$i]->getDepartement());				
					// On la persiste
					$manager->persist($groupes1);
				}
				
				/*
				
				$groupes2 = new Groupe();
				$groupes2->setGroupe($liste_classes[$i]->getClasse().'A2');
				$groupes2->setClasse($liste_classes[$i]);
				$groupes2->setFiliere($liste_classes[$i]->getFiliere());
				$groupes2->setDepartement($liste_classes[$i]->getDepartement());
				
				$groupes3 = new Groupe();
				$groupes3->setGroupe($liste_classes[$i]->getClasse().'B1');
				$groupes3->setClasse($liste_classes[$i]);
				$groupes3->setFiliere($liste_classes[$i]->getFiliere());
				$groupes3->setDepartement($liste_classes[$i]->getDepartement());
				
				$groupes4 = new Groupe();
				$groupes4->setGroupe($liste_classes[$i]->getClasse().'B2');
				$groupes4->setClasse($liste_classes[$i]);
				$groupes4->setFiliere($liste_classes[$i]->getFiliere());
				$groupes4->setDepartement($liste_classes[$i]->getDepartement());
				
				$manager->persist($groupes2);
				$manager->persist($groupes3);
				$manager->persist($groupes4);
			
				*/
				
				}
			
			
			
			for($i=0;$i<5;$i++)
			{
					// On crée les disciplines
				$liste_disciplines[$i] = new Discipline();
				$liste_disciplines[$i]->setDiscipline($nomdisc[$i]);
				
				for($j=0;$j<37;$j++)
				{
				
				//$liste_disciplines[$i]->addGroupe($liste_groupes[$i]);
				//$liste_disciplines[$i]->addClasse($liste_classes[$i]);
				$liste_disciplines[$i]->addFiliere($liste_filieres[$j]);
				
				}
				for($z=0;$z<7;$z++)
				{
					$liste_disciplines[$i]->addDepartement($liste_departements[$z]);			
				
				}
				// On la persiste
				$manager->persist($liste_disciplines[$i]);
			
			}
			
			for($i=0;$i<5;$i++)
			{
				// On crée les matieres
				$liste_matieres[$i] = new Matiere();
				$liste_matieres[$i]->setMatiere($nommat[$i]);
				$liste_matieres[$i]->addNature($liste_natures[$i]);
				$liste_matieres[$i]->setDiscipline($liste_disciplines[$i]);
				
				for($j=0;$j<37;$j++)
				{
				//$liste_matieres[$i]->addGroupe($liste_groupes[$i]);
				//$liste_matieres[$i]->addClass($liste_classes[$i]);
				$liste_matieres[$i]->addFiliere($liste_filieres[$j]);
				}
				
				for($z=0;$z<7;$z++)
				{
					$liste_matieres[$i]->addDepartement($liste_departements[$z]);
				}
				
				// On la persiste
				$manager->persist($liste_matieres[$i]);
			}
			
			/*
			
			for($i=0;$i<6;$i++)
			{
				
				// On crée les Enseignant
				$liste_enseignants[$i] = new Enseignant();
				$liste_enseignants[$i]->setEnseignant($nomens[$i]);
				$liste_enseignants[$i]->setDepartement($liste_departements[$i]);
				$liste_enseignants[$i]->addMatiere($liste_matieres[$i]);
				$liste_enseignants[$i]->setSituation($liste_situations[$i]);
				$liste_enseignants[$i]->setGrade($liste_grades[$i]);
				// On la persiste
				$manager->persist($liste_enseignants[$i]);
				
				
			}
			
			*/
		
			
		
			// On déclenche l'enregistrement
			$manager->flush();
		}
	}