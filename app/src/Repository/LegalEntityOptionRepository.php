<?php

namespace App\Repository;

use App\Entity\LegalEntityOption;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<LegalEntityOption>
 *
 * @method LegalEntityOption|null find($id, $lockMode = null, $lockVersion = null)
 * @method LegalEntityOption|null findOneBy(array $criteria, array $orderBy = null)
 * @method LegalEntityOption[]    findAll()
 * @method LegalEntityOption[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LegalEntityOptionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LegalEntityOption::class);
    }

//    /**
//     * @return LegalEntityOption[] Returns an array of LegalEntityOption objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('l')
//            ->andWhere('l.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('l.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?LegalEntityOption
//    {
//        return $this->createQueryBuilder('l')
//            ->andWhere('l.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
