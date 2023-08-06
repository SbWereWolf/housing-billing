<?php

namespace App\Repository;

use App\Entity\AddressDistributionPoint;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AddressDistributionPoint>
 *
 * @method AddressDistributionPoint|null find($id, $lockMode = null, $lockVersion = null)
 * @method AddressDistributionPoint|null findOneBy(array $criteria, array $orderBy = null)
 * @method AddressDistributionPoint[]    findAll()
 * @method AddressDistributionPoint[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AddressDistributionPointRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AddressDistributionPoint::class);
    }

//    /**
//     * @return AddressDistributionPoint[] Returns an array of AddressDistributionPoint objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?AddressDistributionPoint
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
