<?php

namespace App\Repository;

use App\Entity\WorkflowBehavior;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<WorkflowBehavior>
 *
 * @method WorkflowBehavior|null find($id, $lockMode = null, $lockVersion = null)
 * @method WorkflowBehavior|null findOneBy(array $criteria, array $orderBy = null)
 * @method WorkflowBehavior[]    findAll()
 * @method WorkflowBehavior[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WorkflowBehaviorRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, WorkflowBehavior::class);
    }

//    /**
//     * @return WorkflowBehavior[] Returns an array of WorkflowBehavior objects
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

//    public function findOneBySomeField($value): ?WorkflowBehavior
//    {
//        return $this->createQueryBuilder('w')
//            ->andWhere('w.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
