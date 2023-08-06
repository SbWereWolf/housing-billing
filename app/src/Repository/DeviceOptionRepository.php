<?php

namespace App\Repository;

use App\Entity\DeviceOption;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<DeviceOption>
 *
 * @method DeviceOption|null find($id, $lockMode = null, $lockVersion = null)
 * @method DeviceOption|null findOneBy(array $criteria, array $orderBy = null)
 * @method DeviceOption[]    findAll()
 * @method DeviceOption[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DeviceOptionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DeviceOption::class);
    }

//    /**
//     * @return DeviceOption[] Returns an array of DeviceOption objects
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

//    public function findOneBySomeField($value): ?DeviceOption
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
