<?php

namespace App\Repository;

use App\Entity\ContractPersonalAccountOption;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ContractPersonalAccountOption>
 *
 * @method ContractPersonalAccountOption|null find($id, $lockMode = null, $lockVersion = null)
 * @method ContractPersonalAccountOption|null findOneBy(array $criteria, array $orderBy = null)
 * @method ContractPersonalAccountOption[]    findAll()
 * @method ContractPersonalAccountOption[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ContractPersonalAccountOptionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ContractPersonalAccountOption::class);
    }

//    /**
//     * @return ContractPersonalAccountOption[] Returns an array of ContractPersonalAccountOption objects
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

//    public function findOneBySomeField($value): ?ContractPersonalAccountOption
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
