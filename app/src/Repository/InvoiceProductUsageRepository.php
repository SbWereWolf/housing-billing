<?php

namespace App\Repository;

use App\Entity\InvoiceProductUsage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<InvoiceProductUsage>
 *
 * @method InvoiceProductUsage|null find($id, $lockMode = null, $lockVersion = null)
 * @method InvoiceProductUsage|null findOneBy(array $criteria, array $orderBy = null)
 * @method InvoiceProductUsage[]    findAll()
 * @method InvoiceProductUsage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InvoiceProductUsageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, InvoiceProductUsage::class);
    }

//    /**
//     * @return InvoiceProductUsage[] Returns an array of InvoiceProductUsage objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('i.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?InvoiceProductUsage
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
