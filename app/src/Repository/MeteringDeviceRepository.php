<?php

namespace App\Repository;

use App\Entity\MeteringDevice;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<MeteringDevice>
 *
 * @method MeteringDevice|null find($id, $lockMode = null, $lockVersion = null)
 * @method MeteringDevice|null findOneBy(array $criteria, array $orderBy = null)
 * @method MeteringDevice[]    findAll()
 * @method MeteringDevice[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MeteringDeviceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MeteringDevice::class);
    }

//    /**
//     * @return MeteringDevice[] Returns an array of MeteringDevice objects
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

//    public function findOneBySomeField($value): ?MeteringDevice
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
