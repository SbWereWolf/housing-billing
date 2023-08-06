<?php

namespace App\Repository;

use App\Entity\ProductPersonalAccount;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ProductPersonalAccount>
 *
 * @method ProductPersonalAccount|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProductPersonalAccount|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProductPersonalAccount[]    findAll()
 * @method ProductPersonalAccount[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductPersonalAccountRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProductPersonalAccount::class);
    }

//    /**
//     * @return ProductPersonalAccount[] Returns an array of ProductPersonalAccount objects
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

//    public function findOneBySomeField($value): ?ProductPersonalAccount
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
