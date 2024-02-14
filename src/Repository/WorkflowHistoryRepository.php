<?php

namespace App\Repository;

use App\Entity\WorkflowHistory;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<WorkflowHistory>
 *
 * @method WorkflowHistory|null find($id, $lockMode = null, $lockVersion = null)
 * @method WorkflowHistory|null findOneBy(array $criteria, array $orderBy = null)
 * @method WorkflowHistory[]    findAll()
 * @method WorkflowHistory[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WorkflowHistoryRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, WorkflowHistory::class);
    }

//    /**
//     * @return WorkflowHistory[] Returns an array of WorkflowHistory objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('w')
//            ->andWhere('w.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('w.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?WorkflowHistory
//    {
//        return $this->createQueryBuilder('w')
//            ->andWhere('w.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
