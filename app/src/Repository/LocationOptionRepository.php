<?php

namespace App\Repository;

use App\Entity\LocationOption;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<LocationOption>
 *
 * @method LocationOption|null find($id, $lockMode = null, $lockVersion = null)
 * @method LocationOption|null findOneBy(array $criteria, array $orderBy = null)
 * @method LocationOption[]    findAll()
 * @method LocationOption[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LocationOptionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LocationOption::class);
    }

//    /**
//     * @return LocationOption[] Returns an array of LocationOption objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('l')
//            ->andWhere('l.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('l.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?LocationOption
//    {
//        return $this->createQueryBuilder('l')
//            ->andWhere('l.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
