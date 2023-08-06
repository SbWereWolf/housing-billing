<?php

namespace App\Repository;

use App\Entity\ConversionRatio;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ConversionRatio>
 *
 * @method ConversionRatio|null find($id, $lockMode = null, $lockVersion = null)
 * @method ConversionRatio|null findOneBy(array $criteria, array $orderBy = null)
 * @method ConversionRatio[]    findAll()
 * @method ConversionRatio[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ConversionRatioRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ConversionRatio::class);
    }

//    /**
//     * @return ConversionRatio[] Returns an array of ConversionRatio objects
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

//    public function findOneBySomeField($value): ?ConversionRatio
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
