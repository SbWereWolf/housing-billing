<?php

namespace App\Repository;

use App\Entity\TestingSet;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TestingSet>
 *
 * @method TestingSet|null find($id, $lockMode = null, $lockVersion = null)
 * @method TestingSet|null findOneBy(array $criteria, array $orderBy = null)
 * @method TestingSet[]    findAll()
 * @method TestingSet[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TestingSetRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TestingSet::class);
    }

//    /**
//     * @return TestingSet[] Returns an array of TestingSet objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?TestingSet
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
