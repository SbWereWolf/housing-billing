<?php

namespace App\Repository;

use App\Entity\TestingRuleSet;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TestingRuleSet>
 *
 * @method TestingRuleSet|null find($id, $lockMode = null, $lockVersion = null)
 * @method TestingRuleSet|null findOneBy(array $criteria, array $orderBy = null)
 * @method TestingRuleSet[]    findAll()
 * @method TestingRuleSet[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TestingRuleSetRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TestingRuleSet::class);
    }

//    /**
//     * @return TestingRuleSet[] Returns an array of TestingRuleSet objects
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

//    public function findOneBySomeField($value): ?TestingRuleSet
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
