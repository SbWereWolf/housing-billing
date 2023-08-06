<?php

namespace App\Repository;

use App\Entity\TransitMeteringPoint;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<TransitMeteringPoint>
 *
 * @method TransitMeteringPoint|null find($id, $lockMode = null, $lockVersion = null)
 * @method TransitMeteringPoint|null findOneBy(array $criteria, array $orderBy = null)
 * @method TransitMeteringPoint[]    findAll()
 * @method TransitMeteringPoint[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TransitMeteringPointRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TransitMeteringPoint::class);
    }

//    /**
//     * @return TransitMeteringPoint[] Returns an array of TransitMeteringPoint objects
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

//    public function findOneBySomeField($value): ?TransitMeteringPoint
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
