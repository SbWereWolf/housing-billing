<?php

namespace App\Repository;

use App\Entity\TestingRule;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TestingRule>
 *
 * @method TestingRule|null find($id, $lockMode = null, $lockVersion = null)
 * @method TestingRule|null findOneBy(array $criteria, array $orderBy = null)
 * @method TestingRule[]    findAll()
 * @method TestingRule[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TestingRuleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TestingRule::class);
    }

//    /**
//     * @return TestingRule[] Returns an array of TestingRule objects
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

//    public function findOneBySomeField($value): ?TestingRule
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
