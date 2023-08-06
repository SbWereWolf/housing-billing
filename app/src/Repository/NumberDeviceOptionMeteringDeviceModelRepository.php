<?php

namespace App\Repository;

use App\Entity\NumberDeviceOptionMeteringDeviceModel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<NumberDeviceOptionMeteringDeviceModel>
 *
 * @method NumberDeviceOptionMeteringDeviceModel|null find($id, $lockMode = null, $lockVersion = null)
 * @method NumberDeviceOptionMeteringDeviceModel|null findOneBy(array $criteria, array $orderBy = null)
 * @method NumberDeviceOptionMeteringDeviceModel[]    findAll()
 * @method NumberDeviceOptionMeteringDeviceModel[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NumberDeviceOptionMeteringDeviceModelRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NumberDeviceOptionMeteringDeviceModel::class);
    }

//    /**
//     * @return NumberDeviceOptionMeteringDeviceModel[] Returns an array of NumberDeviceOptionMeteringDeviceModel objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('n')
//            ->andWhere('n.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('n.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?NumberDeviceOptionMeteringDeviceModel
//    {
//        return $this->createQueryBuilder('n')
//            ->andWhere('n.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
