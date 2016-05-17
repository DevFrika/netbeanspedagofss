<?php

namespace Pedagogie\PedagogieBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Pedagogie\PedagogieBundle\Entity\Departement;
use Pedagogie\PedagogieBundle\Entity\Filiere;
use Pedagogie\PedagogieBundle\Entity\Classe;
use Pedagogie\PedagogieBundle\Entity\Groupe;
use Pedagogie\PedagogieBundle\Entity\Discipline;
use Pedagogie\PedagogieBundle\Entity\Matiere;
use Pedagogie\PedagogieBundle\Entity\Enseignant;

/**
 * DisciplineRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class DisciplineRepository extends EntityRepository
{
	public function findByDepartement($departement)
	{
			$qb = $this->createQueryBuilder('dis');
			$qb ->join('dis.departements', 'dep' ,'WITH', 'dep.id = \''.$departement->getId().'\'' ); // Puis on filtre sur le nom des catégories à l'aide d'un IN
			// Enfin, on retourne le résultat
			return $qb->getQuery()->getResult();
	}
	
	public function findByFiliere($filiere)
	{
			$qb = $this->createQueryBuilder('dis');
			$qb ->join('dis.filieres', 'fil' ,'WITH', 'fil.id = \''.$filiere->getId().'\'' ); // Puis on filtre sur le nom des catégories à l'aide d'un IN
			// Enfin, on retourne le résultat
			return $qb->getQuery()->getResult();
	}
	
	public function findByClasse($classes)
	{
			$qb = $this->createQueryBuilder('dis');
			$qb ->join('dis.classes', 'cls' ,'WITH', 'cls.id = \''.$classes->getId().'\'' ); // Puis on filtre sur le nom des catégories à l'aide d'un IN
			// Enfin, on retourne le résultat
			return $qb->getQuery()->getResult();
	}
	
		public function findByGroupe($groupe)
	{
			$qb = $this->createQueryBuilder('dis');
			$qb ->join('dis.groupes', 'g' ,'WITH', 'g.id = \''.$groupe->getId().'\'' ); // Puis on filtre sur le nom des catégories à l'aide d'un IN
			// Enfin, on retourne le résultat
			return $qb->getQuery()->getResult();
	}
	
	public function findExistDepartement($nomdis,$departement)
	{
			$qb = $this->createQueryBuilder('dis');
			$qb->where('dis.discipline = :disp')->setParameter('disp', $nomdis);
			$qb ->join('dis.departements', 'dep' ,'WITH', 'dep.id = \''.$departement->getId().'\'' ); // Puis on filtre sur le nom des catégories à l'aide d'un IN
			// Enfin, on retourne le résultat
			return $qb->getQuery()->getOneOrNullResult();
	}
	
	public function findExistFiliere($nomdis,$filiere)
	{
			$qb = $this->createQueryBuilder('dis');
			$qb->where('dis.discipline = :disp')->setParameter('disp', $nomdis);
			$qb ->join('dis.filieres', 'fil' ,'WITH', 'fil.id = \''.$filiere->getId().'\'' ); // Puis on filtre sur le nom des catégories à l'aide d'un IN
			// Enfin, on retourne le résultat
			return $qb->getQuery()->getOneOrNullResult();
	}
	
	
}
