<?php

namespace App\Repository;

use App\Entity\ReasonOfWeededOut;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ReasonOfWeededOut>
 *
 * @method ReasonOfWeededOut|null find($id, $lockMode = null, $lockVersion = null)
 * @method ReasonOfWeededOut|null findOneBy(array $criteria, array $orderBy = null)
 * @method ReasonOfWeededOut[]    findAll()
 * @method ReasonOfWeededOut[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReasonOfWeededOutRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ReasonOfWeededOut::class);
    }

//    /**
//     * @return ReasonOfWeededOut[] Returns an array of ReasonOfWeededOut objects
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

//    public function findOneBySomeField($value): ?ReasonOfWeededOut
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
