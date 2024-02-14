<?php

namespace App\Repository;

use App\Entity\WorkflowBehaviorAction;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<WorkflowBehaviorAction>
 *
 * @method WorkflowBehaviorAction|null find($id, $lockMode = null, $lockVersion = null)
 * @method WorkflowBehaviorAction|null findOneBy(array $criteria, array $orderBy = null)
 * @method WorkflowBehaviorAction[]    findAll()
 * @method WorkflowBehaviorAction[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WorkflowBehaviorActionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, WorkflowBehaviorAction::class);
    }

//    /**
//     * @return WorkflowBehaviorAction[] Returns an array of WorkflowBehaviorAction objects
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

//    public function findOneBySomeField($value): ?WorkflowBehaviorAction
//    {
//        return $this->createQueryBuilder('w')
//            ->andWhere('w.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
