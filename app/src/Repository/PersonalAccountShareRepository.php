<?php

namespace App\Repository;

use App\Entity\PersonalAccountShare;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PersonalAccountShare>
 *
 * @method PersonalAccountShare|null find($id, $lockMode = null, $lockVersion = null)
 * @method PersonalAccountShare|null findOneBy(array $criteria, array $orderBy = null)
 * @method PersonalAccountShare[]    findAll()
 * @method PersonalAccountShare[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PersonalAccountShareRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PersonalAccountShare::class);
    }

//    /**
//     * @return PersonalAccountShare[] Returns an array of PersonalAccountShare objects
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

//    public function findOneBySomeField($value): ?PersonalAccountShare
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
