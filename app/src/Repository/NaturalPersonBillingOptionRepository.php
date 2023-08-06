<?php

namespace App\Repository;

use App\Entity\NaturalPersonBillingOption;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<NaturalPersonBillingOption>
 *
 * @method NaturalPersonBillingOption|null find($id, $lockMode = null, $lockVersion = null)
 * @method NaturalPersonBillingOption|null findOneBy(array $criteria, array $orderBy = null)
 * @method NaturalPersonBillingOption[]    findAll()
 * @method NaturalPersonBillingOption[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NaturalPersonBillingOptionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NaturalPersonBillingOption::class);
    }

//    /**
//     * @return NaturalPersonBillingOption[] Returns an array of NaturalPersonBillingOption objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('n')
//            ->andWhere('n.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('n.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?NaturalPersonBillingOption
//    {
//        return $this->createQueryBuilder('n')
//            ->andWhere('n.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
