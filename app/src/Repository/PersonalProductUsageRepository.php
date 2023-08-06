<?php

namespace App\Repository;

use App\Entity\PersonalProductUsage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PersonalProductUsage>
 *
 * @method PersonalProductUsage|null find($id, $lockMode = null, $lockVersion = null)
 * @method PersonalProductUsage|null findOneBy(array $criteria, array $orderBy = null)
 * @method PersonalProductUsage[]    findAll()
 * @method PersonalProductUsage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PersonalProductUsageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PersonalProductUsage::class);
    }

//    /**
//     * @return PersonalProductUsage[] Returns an array of PersonalProductUsage objects
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

//    public function findOneBySomeField($value): ?PersonalProductUsage
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
