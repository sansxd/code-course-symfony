<?php

namespace App\Repository;

use App\Entity\WorkflowProcessAction;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<WorkflowProcessAction>
 *
 * @method WorkflowProcessAction|null find($id, $lockMode = null, $lockVersion = null)
 * @method WorkflowProcessAction|null findOneBy(array $criteria, array $orderBy = null)
 * @method WorkflowProcessAction[]    findAll()
 * @method WorkflowProcessAction[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WorkflowProcessActionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, WorkflowProcessAction::class);
    }

//    /**
//     * @return WorkflowProcessAction[] Returns an array of WorkflowProcessAction objects
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

//    public function findOneBySomeField($value): ?WorkflowProcessAction
//    {
//        return $this->createQueryBuilder('w')
//            ->andWhere('w.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
