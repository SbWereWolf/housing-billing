<?php

namespace App\Repository;

use App\Entity\ContractControlPanel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ContractControlPanel>
 *
 * @method ContractControlPanel|null find($id, $lockMode = null, $lockVersion = null)
 * @method ContractControlPanel|null findOneBy(array $criteria, array $orderBy = null)
 * @method ContractControlPanel[]    findAll()
 * @method ContractControlPanel[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ContractControlPanelRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ContractControlPanel::class);
    }

//    /**
//     * @return ContractControlPanel[] Returns an array of ContractControlPanel objects
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

//    public function findOneBySomeField($value): ?ContractControlPanel
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
