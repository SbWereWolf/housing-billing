<?php

namespace App\Repository;

use App\Entity\PersonalAccount;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PersonalAccount>
 *
 * @method PersonalAccount|null find($id, $lockMode = null, $lockVersion = null)
 * @method PersonalAccount|null findOneBy(array $criteria, array $orderBy = null)
 * @method PersonalAccount[]    findAll()
 * @method PersonalAccount[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PersonalAccountRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PersonalAccount::class);
    }

//    /**
//     * @return PersonalAccount[] Returns an array of PersonalAccount objects
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

//    public function findOneBySomeField($value): ?PersonalAccount
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
