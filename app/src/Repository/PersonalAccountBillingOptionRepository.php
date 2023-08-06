<?php

namespace App\Repository;

use App\Entity\PersonalAccountBillingOption;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PersonalAccountBillingOption>
 *
 * @method PersonalAccountBillingOption|null find($id, $lockMode = null, $lockVersion = null)
 * @method PersonalAccountBillingOption|null findOneBy(array $criteria, array $orderBy = null)
 * @method PersonalAccountBillingOption[]    findAll()
 * @method PersonalAccountBillingOption[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PersonalAccountBillingOptionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PersonalAccountBillingOption::class);
    }

//    /**
//     * @return PersonalAccountBillingOption[] Returns an array of PersonalAccountBillingOption objects
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

//    public function findOneBySomeField($value): ?PersonalAccountBillingOption
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
