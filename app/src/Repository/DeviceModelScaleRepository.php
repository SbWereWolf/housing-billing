<?php

namespace App\Repository;

use App\Entity\DeviceModelScale;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<DeviceModelScale>
 *
 * @method DeviceModelScale|null find($id, $lockMode = null, $lockVersion = null)
 * @method DeviceModelScale|null findOneBy(array $criteria, array $orderBy = null)
 * @method DeviceModelScale[]    findAll()
 * @method DeviceModelScale[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DeviceModelScaleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DeviceModelScale::class);
    }

//    /**
//     * @return DeviceModelScale[] Returns an array of DeviceModelScale objects
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

//    public function findOneBySomeField($value): ?DeviceModelScale
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
