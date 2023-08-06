<?php

namespace App\Repository;

use App\Entity\ProductDistributor;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ProductDistributor>
 *
 * @method ProductDistributor|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProductDistributor|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProductDistributor[]    findAll()
 * @method ProductDistributor[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductDistributorRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProductDistributor::class);
    }

//    /**
//     * @return ProductDistributor[] Returns an array of ProductDistributor objects
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

//    public function findOneBySomeField($value): ?ProductDistributor
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
