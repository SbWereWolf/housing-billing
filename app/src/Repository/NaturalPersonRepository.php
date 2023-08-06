<?php

namespace App\Repository;

use App\Entity\NaturalPerson;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<NaturalPerson>
 *
 * @method NaturalPerson|null find($id, $lockMode = null, $lockVersion = null)
 * @method NaturalPerson|null findOneBy(array $criteria, array $orderBy = null)
 * @method NaturalPerson[]    findAll()
 * @method NaturalPerson[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NaturalPersonRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NaturalPerson::class);
    }

//    /**
//     * @return NaturalPerson[] Returns an array of NaturalPerson objects
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

//    public function findOneBySomeField($value): ?NaturalPerson
//    {
//        return $this->createQueryBuilder('n')
//            ->andWhere('n.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
