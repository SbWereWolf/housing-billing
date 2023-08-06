<?php

namespace App\Repository;

use App\Entity\ControlPanelMeteringDevice;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ControlPanelMeteringDevice>
 *
 * @method ControlPanelMeteringDevice|null find($id, $lockMode = null, $lockVersion = null)
 * @method ControlPanelMeteringDevice|null findOneBy(array $criteria, array $orderBy = null)
 * @method ControlPanelMeteringDevice[]    findAll()
 * @method ControlPanelMeteringDevice[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ControlPanelMeteringDeviceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ControlPanelMeteringDevice::class);
    }

//    /**
//     * @return ControlPanelMeteringDevice[] Returns an array of ControlPanelMeteringDevice objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ControlPanelMeteringDevice
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
