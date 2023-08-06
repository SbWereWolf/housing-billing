<?php

namespace App\Repository;

use App\Entity\ProductUnitsOfMeasure;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ProductUnitsOfMeasure>
 *
 * @method ProductUnitsOfMeasure|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProductUnitsOfMeasure|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProductUnitsOfMeasure[]    findAll()
 * @method ProductUnitsOfMeasure[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductUnitsOfMeasureRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProductUnitsOfMeasure::class);
    }

//    /**
//     * @return ProductUnitsOfMeasure[] Returns an array of ProductUnitsOfMeasure objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ProductUnitsOfMeasure
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
