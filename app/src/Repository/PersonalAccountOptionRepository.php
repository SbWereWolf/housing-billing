<?php

namespace App\Repository;

use App\Entity\PersonalAccountOption;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PersonalAccountOption>
 *
 * @method PersonalAccountOption|null find($id, $lockMode = null, $lockVersion = null)
 * @method PersonalAccountOption|null findOneBy(array $criteria, array $orderBy = null)
 * @method PersonalAccountOption[]    findAll()
 * @method PersonalAccountOption[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PersonalAccountOptionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PersonalAccountOption::class);
    }

//    /**
//     * @return PersonalAccountOption[] Returns an array of PersonalAccountOption objects
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

//    public function findOneBySomeField($value): ?PersonalAccountOption
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
