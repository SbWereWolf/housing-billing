<?php

namespace App\Repository;

use App\Entity\LegalEntityBillingOption;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<LegalEntityBillingOption>
 *
 * @method LegalEntityBillingOption|null find($id, $lockMode = null, $lockVersion = null)
 * @method LegalEntityBillingOption|null findOneBy(array $criteria, array $orderBy = null)
 * @method LegalEntityBillingOption[]    findAll()
 * @method LegalEntityBillingOption[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LegalEntityBillingOptionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, LegalEntityBillingOption::class);
    }

//    /**
//     * @return LegalEntityBillingOption[] Returns an array of LegalEntityBillingOption objects
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

//    public function findOneBySomeField($value): ?LegalEntityBillingOption
//    {
//        return $this->createQueryBuilder('l')
//            ->andWhere('l.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
