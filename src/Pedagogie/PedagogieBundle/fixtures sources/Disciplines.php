<?php 

	namespace Pedagogie\PedagogieBundle\DataFixtures\ORM;
	
	use Doctrine\Common\DataFixtures\FixtureInterface;
	use Doctrine\Common\Persistence\ObjectManager;
	use Pedagogie\PedagogieBundle\Entity\Discipline;

	class Disciplines implements FixtureInterface
	{
	// Dans l'argument de la m�thode load, l'objet $manager est l'EntityManager
	public function load(ObjectManager $manager)
	{
			// Liste des noms de cat�gorie � ajouter
			$nomdisc = array('LFSNA', 'PHYSIQUE', 'GEOLOGIE', 'LFI2','LAMF','LFPC');
			$numdisc = array(1, 2, 3, 4,5,6);
			$depdisc = array('', '', '', '','');
		
		for($i=0;$i<5;$i++)
		{
			// On cr�e les filieres
			
			$liste_discipline[$i] = new Discipline();
			$liste_discipline[$i]->setDiscipline($nomdisc[$i]);
			$liste_discipline[$i]->setN($numdisc[$i]);
			
			// On la persiste
			$manager->persist($liste_discipline[$i]);
		}
			// On d�clenche l'enregistrement
			$manager->flush();
		}
	}