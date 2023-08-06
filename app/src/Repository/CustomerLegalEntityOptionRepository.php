<?php

namespace App\Repository;

use App\Entity\CustomerLegalEntityOption;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CustomerLegalEntityOption>
 *
 * @method CustomerLegalEntityOption|null find($id, $lockMode = null, $lockVersion = null)
 * @method CustomerLegalEntityOption|null findOneBy(array $criteria, array $orderBy = null)
 * @method CustomerLegalEntityOption[]    findAll()
 * @method CustomerLegalEntityOption[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CustomerLegalEntityOptionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CustomerLegalEntityOption::class);
    }

//    /**
//     * @return CustomerLegalEntityOption[] Returns an array of CustomerLegalEntityOption objects
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

//    public function findOneBySomeField($value): ?CustomerLegalEntityOption
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
