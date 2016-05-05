<?php

namespace Pedagogie\PedagogieBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * ClasseRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ClasseRepository extends EntityRepository
{
	public function findExist($nomcls,$filiere,$departement)
	{
			$qb = $this->createQueryBuilder('cls');
			$qb->where('cls.classe = :nomcls')->setParameter('nomcls', $nomcls);
			$qb ->join('cls.filiere', 'fil' ,'WITH', 'fil.id = \''.$filiere->getId().'\'' ); // Puis on filtre sur le nom des cat�gories � l'aide d'un IN
			$qb ->join('cls.departement', 'dep' ,'WITH', 'dep.id = \''.$departement->getId().'\'' );
			// Enfin, on retourne le r�sultat
			return $qb->getQuery()->getOneOrNullResult();
	}
}