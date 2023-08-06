<?php

namespace App\Repository;

use App\Entity\RawReadings;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<RawReadings>
 *
 * @method RawReadings|null find($id, $lockMode = null, $lockVersion = null)
 * @method RawReadings|null findOneBy(array $criteria, array $orderBy = null)
 * @method RawReadings[]    findAll()
 * @method RawReadings[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RawReadingsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RawReadings::class);
    }

//    /**
//     * @return RawReadings[] Returns an array of RawReadings objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('r.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?RawReadings
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
