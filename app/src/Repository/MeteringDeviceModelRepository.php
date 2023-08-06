<?php

namespace App\Repository;

use App\Entity\MeteringDeviceModel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<MeteringDeviceModel>
 *
 * @method MeteringDeviceModel|null find($id, $lockMode = null, $lockVersion = null)
 * @method MeteringDeviceModel|null findOneBy(array $criteria, array $orderBy = null)
 * @method MeteringDeviceModel[]    findAll()
 * @method MeteringDeviceModel[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MeteringDeviceModelRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MeteringDeviceModel::class);
    }

//    /**
//     * @return MeteringDeviceModel[] Returns an array of MeteringDeviceModel objects
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

//    public function findOneBySomeField($value): ?MeteringDeviceModel
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
