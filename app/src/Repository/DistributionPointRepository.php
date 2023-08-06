<?php

namespace App\Repository;

use App\Entity\DistributionPoint;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<DistributionPoint>
 *
 * @method DistributionPoint|null find($id, $lockMode = null, $lockVersion = null)
 * @method DistributionPoint|null findOneBy(array $criteria, array $orderBy = null)
 * @method DistributionPoint[]    findAll()
 * @method DistributionPoint[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DistributionPointRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DistributionPoint::class);
    }

//    /**
//     * @return DistributionPoint[] Returns an array of DistributionPoint objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('d.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?DistributionPoint
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
