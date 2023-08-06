<?php

namespace App\Repository;

use App\Entity\AddressLocationOption;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AddressLocationOption>
 *
 * @method AddressLocationOption|null find($id, $lockMode = null, $lockVersion = null)
 * @method AddressLocationOption|null findOneBy(array $criteria, array $orderBy = null)
 * @method AddressLocationOption[]    findAll()
 * @method AddressLocationOption[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AddressLocationOptionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AddressLocationOption::class);
    }

//    /**
//     * @return AddressLocationOption[] Returns an array of AddressLocationOption objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?AddressLocationOption
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
