<?php

namespace App\Repository;

use App\Entity\MeterUsage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<MeterUsage>
 *
 * @method MeterUsage|null find($id, $lockMode = null, $lockVersion = null)
 * @method MeterUsage|null findOneBy(array $criteria, array $orderBy = null)
 * @method MeterUsage[]    findAll()
 * @method MeterUsage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MeterUsageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MeterUsage::class);
    }

//    /**
//     * @return MeterUsage[] Returns an array of MeterUsage objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('m.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?MeterUsage
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
