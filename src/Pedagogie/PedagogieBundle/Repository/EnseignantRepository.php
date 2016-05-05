<?php

namespace Pedagogie\PedagogieBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * EnseignantRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class EnseignantRepository extends EntityRepository
{
		public function findByMatiere($matiere,$departement)
	{
			$qb = $this->createQueryBuilder('e');
			$qb ->join('e.matieres', 'm' ,'WITH', 'm.id= \''.$matiere->getId().'\''  );
			//$qb->where('e.departement = :departement')->setParameter('departement', $departement->getDepartement());
			// Enfin, on retourne le résultat
			return $qb->getQuery()->getResult();
	}
}
