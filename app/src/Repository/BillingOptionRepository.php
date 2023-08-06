<?php

namespace App\Repository;

use App\Entity\BillingOption;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<BillingOption>
 *
 * @method BillingOption|null find($id, $lockMode = null, $lockVersion = null)
 * @method BillingOption|null findOneBy(array $criteria, array $orderBy = null)
 * @method BillingOption[]    findAll()
 * @method BillingOption[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BillingOptionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BillingOption::class);
    }

//    /**
//     * @return BillingOption[] Returns an array of BillingOption objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('b.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?BillingOption
//    {
//        return $this->createQueryBuilder('b')
//            ->andWhere('b.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
