<?php

namespace App\Repository;

use App\Entity\TestingRun;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TestingRun>
 *
 * @method TestingRun|null find($id, $lockMode = null, $lockVersion = null)
 * @method TestingRun|null findOneBy(array $criteria, array $orderBy = null)
 * @method TestingRun[]    findAll()
 * @method TestingRun[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TestingRunRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TestingRun::class);
    }

//    /**
//     * @return TestingRun[] Returns an array of TestingRun objects
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

//    public function findOneBySomeField($value): ?TestingRun
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
