<?php

namespace App\Repository;

use App\Entity\ReadingsPurpose;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ReadingsPurpose>
 *
 * @method ReadingsPurpose|null find($id, $lockMode = null, $lockVersion = null)
 * @method ReadingsPurpose|null findOneBy(array $criteria, array $orderBy = null)
 * @method ReadingsPurpose[]    findAll()
 * @method ReadingsPurpose[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReadingsPurposeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ReadingsPurpose::class);
    }

//    /**
//     * @return ReadingsPurpose[] Returns an array of ReadingsPurpose objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('r.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ReadingsPurpose
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
