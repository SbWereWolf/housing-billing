<?php

namespace App\Repository;

use App\Entity\CashboxReceipt;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<CashboxReceipt>
 *
 * @method CashboxReceipt|null find($id, $lockMode = null, $lockVersion = null)
 * @method CashboxReceipt|null findOneBy(array $criteria, array $orderBy = null)
 * @method CashboxReceipt[]    findAll()
 * @method CashboxReceipt[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CashboxReceiptRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CashboxReceipt::class);
    }

//    /**
//     * @return CashboxReceipt[] Returns an array of CashboxReceipt objects
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

//    public function findOneBySomeField($value): ?CashboxReceipt
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
