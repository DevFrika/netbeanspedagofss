<?php

namespace Pedagogie\PedagogieBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * MatiereRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class MatiereRepository extends EntityRepository
{
	public function findByDepartement($departement)
	{
			$qb = $this->createQueryBuilder('mat');
			$qb ->join('mat.departements', 'dep' ,'WITH', 'dep.id = \''.$departement->getId().'\'' ); // Puis on filtre sur le nom des catégories à l'aide d'un IN
			// Enfin, on retourne le résultat
			return $qb->getQuery()->getResult();
	}
	
	public function findByFiliere($filiere)
	{
			$qb = $this->createQueryBuilder('mat');
			$qb ->join('mat.filieres', 'fil' ,'WITH', 'fil.id = \''.$filiere->getId().'\'' ); // Puis on filtre sur le nom des catégories à l'aide d'un IN
			// Enfin, on retourne le résultat
			return $qb->getQuery()->getResult();
	}
	
	public function findByClasse($classes)
	{
			$qb = $this->createQueryBuilder('mat');
			$qb ->join('mat.classes', 'cls' ,'WITH', 'cls.id = \''.$classes->getId().'\'' ); // Puis on filtre sur le nom des catégories à l'aide d'un IN
			// Enfin, on retourne le résultat
			return $qb->getQuery()->getResult();
	}
	
	public function findByGroupe($groupe)
	{
			$qb = $this->createQueryBuilder('mat');
			$qb ->join('mat.groupes', 'grp' ,'WITH', 'grp.id = \''.$groupe->getId().'\'' ); // Puis on filtre sur le nom des catégories à l'aide d'un IN
			// Enfin, on retourne le résultat
			return $qb->getQuery()->getResult();
	}
	
	}
