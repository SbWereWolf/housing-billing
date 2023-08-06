<?php

namespace App\Repository;

use App\Entity\NaturalPersonOption;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<NaturalPersonOption>
 *
 * @method NaturalPersonOption|null find($id, $lockMode = null, $lockVersion = null)
 * @method NaturalPersonOption|null findOneBy(array $criteria, array $orderBy = null)
 * @method NaturalPersonOption[]    findAll()
 * @method NaturalPersonOption[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NaturalPersonOptionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NaturalPersonOption::class);
    }

//    /**
//     * @return NaturalPersonOption[] Returns an array of NaturalPersonOption objects
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

//    public function findOneBySomeField($value): ?NaturalPersonOption
//    {
//        return $this->createQueryBuilder('n')
//            ->andWhere('n.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
