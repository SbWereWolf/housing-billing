<?php

namespace App\Repository;

use App\Entity\ReadingsSenderReadingsWay;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ReadingsSenderReadingsWay>
 *
 * @method ReadingsSenderReadingsWay|null find($id, $lockMode = null, $lockVersion = null)
 * @method ReadingsSenderReadingsWay|null findOneBy(array $criteria, array $orderBy = null)
 * @method ReadingsSenderReadingsWay[]    findAll()
 * @method ReadingsSenderReadingsWay[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReadingsSenderReadingsWayRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ReadingsSenderReadingsWay::class);
    }

//    /**
//     * @return ReadingsSenderReadingsWay[] Returns an array of ReadingsSenderReadingsWay objects
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

//    public function findOneBySomeField($value): ?ReadingsSenderReadingsWay
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
