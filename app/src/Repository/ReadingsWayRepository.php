<?php

namespace App\Repository;

use App\Entity\ReadingsWay;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ReadingsWay>
 *
 * @method ReadingsWay|null find($id, $lockMode = null, $lockVersion = null)
 * @method ReadingsWay|null findOneBy(array $criteria, array $orderBy = null)
 * @method ReadingsWay[]    findAll()
 * @method ReadingsWay[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReadingsWayRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ReadingsWay::class);
    }

//    /**
//     * @return ReadingsWay[] Returns an array of ReadingsWay objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('r.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ReadingsWay
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
