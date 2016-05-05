<?php 

	namespace Pedagogie\PedagogieBundle\DataFixtures\ORM;
	
	use Doctrine\Common\DataFixtures\FixtureInterface;
	use Doctrine\Common\Persistence\ObjectManager;
	use Pedagogie\PedagogieBundle\Entity\Filiere;
	use Pedagogie\PedagogieBundle\Entity\Departement;

	class Filieres implements FixtureInterface
	{
	// Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
	public function load(ObjectManager $manager)
	{
			// Liste des noms de catégorie à ajouter
			$nomfil = array('LFI', 'LARI', 'LFSTU', 'LAMF','LFPC','LFG');
			$numfil = array(1, 2, 3, 4,5,6);
			//$depfil = array(1, 2, 3, 4,5);
			$nomdep = array('BIOLOGIE', 'SCIENCES DE LA TERRE', 'CHIMIE', 'INFORMATIQUE','MATHEMATIQUES','PHYSIQUES');
			$numdep = array(7, 8, 9, 10,11,12);
			$depdep = array('', '', '', '','');
		
		for($i=0;$i<5;$i++)
		{
			
			$liste_departements[$i] = new Departement();
			$liste_departements[$i]->setDepartement($nomdep[$i]);
			$liste_departements[$i]->setN($numdep[$i]);
			$manager->persist($liste_departements[$i]);
			
			// On crée les filieres
			$liste_filieres[$i] = new Filiere();
			$liste_filieres[$i]->setFiliere($nomfil[$i]);
			$liste_filieres[$i]->setN($numfil[$i]);
			$liste_filieres[$i]->setDepartement($liste_departements[$i]);
			// On la persiste
			$manager->persist($liste_filieres[$i]);
			
		}
			// On déclenche l'enregistrement
			$manager->flush();
		}
	}