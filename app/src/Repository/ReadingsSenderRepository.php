<?php

namespace App\Repository;

use App\Entity\ReadingsSender;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ReadingsSender>
 *
 * @method ReadingsSender|null find($id, $lockMode = null, $lockVersion = null)
 * @method ReadingsSender|null findOneBy(array $criteria, array $orderBy = null)
 * @method ReadingsSender[]    findAll()
 * @method ReadingsSender[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReadingsSenderRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ReadingsSender::class);
    }

//    /**
//     * @return ReadingsSender[] Returns an array of ReadingsSender objects
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

//    public function findOneBySomeField($value): ?ReadingsSender
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
