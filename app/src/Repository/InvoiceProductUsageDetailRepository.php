<?php

namespace App\Repository;

use App\Entity\InvoiceProductUsageDetail;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<InvoiceProductUsageDetail>
 *
 * @method InvoiceProductUsageDetail|null find($id, $lockMode = null, $lockVersion = null)
 * @method InvoiceProductUsageDetail|null findOneBy(array $criteria, array $orderBy = null)
 * @method InvoiceProductUsageDetail[]    findAll()
 * @method InvoiceProductUsageDetail[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InvoiceProductUsageDetailRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, InvoiceProductUsageDetail::class);
    }

//    /**
//     * @return InvoiceProductUsageDetail[] Returns an array of InvoiceProductUsageDetail objects
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

//    public function findOneBySomeField($value): ?InvoiceProductUsageDetail
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
