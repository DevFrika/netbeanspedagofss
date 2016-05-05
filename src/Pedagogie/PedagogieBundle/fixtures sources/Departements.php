<?php 

	namespace Pedagogie\PedagogieBundle\DataFixtures\ORM;
	
	use Doctrine\Common\DataFixtures\FixtureInterface;
	use Doctrine\Common\Persistence\ObjectManager;
	use Pedagogie\PedagogieBundle\Entity\Departement;

	class Departements implements FixtureInterface
	{
		// Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
		public function load(ObjectManager $manager)
		{
			/*	// Liste des noms de catégorie à ajouter
				$nomdep = array('BIOLOGIE', 'SCIENCES DE LA TERRE', 'CHIMIE', 'INFORMATIQUE','MATHEMATIQUES','PHYSIQUES');
				$numdep = array(1, 2, 3, 4,5,6);
				$depdep = array('', '', '', '','');
			
			for($i=0;$i<5;$i++)
			{
				// On crée les filieres
				
				$liste_departements[$i] = new Departement();
				$liste_departements[$i]->setDepartement($nomdep[$i]);
				$liste_departements[$i]->setN($numdep[$i]);
				
				// On la persiste
				$manager->persist($liste_departements[$i]);
			}
				// On déclenche l'enregistrement
				$manager->flush();
				*/
		}
	}