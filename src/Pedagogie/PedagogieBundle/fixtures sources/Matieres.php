<?php 

	namespace Pedagogie\PedagogieBundle\DataFixtures\ORM;
	
	use Doctrine\Common\DataFixtures\FixtureInterface;
	use Doctrine\Common\Persistence\ObjectManager;
	use Pedagogie\PedagogieBundle\Entity\Matiere;

	class Matieres implements FixtureInterface
	{
	// Dans l'argument de la méthode load, l'objet $manager est l'EntityManager
	public function load(ObjectManager $manager)
	{
			// Liste des noms de catégorie à ajouter
			$nommat = array('BIOLOGIE ANIMALE', 'GEOLOGIE', 'CRISTALLOGRAPHIE', 'BASE DE DONNEE','ALGEBRE LINEAIRE','PHYSIQUE QUANTIQUE');
			$nummat = array(1, 2, 3, 4,5,6);
			$depmat = array('', '', '', '','');
		
		for($i=0;$i<5;$i++)
		{
			// On crée les filieres
			
			$liste_matieres[$i] = new Matiere();
			$liste_matieres[$i]->setMatiere($nommat[$i]);
			$liste_matieres[$i]->setN($nummat[$i]);
			
			// On la persiste
			$manager->persist($liste_matieres[$i]);
		}
			// On déclenche l'enregistrement
			$manager->flush();
		}
	}