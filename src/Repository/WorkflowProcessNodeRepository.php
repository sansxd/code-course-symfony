<?php

namespace App\Repository;

use App\Entity\WorkflowProcessNode;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<WorkflowProcessNode>
 *
 * @method WorkflowProcessNode|null find($id, $lockMode = null, $lockVersion = null)
 * @method WorkflowProcessNode|null findOneBy(array $criteria, array $orderBy = null)
 * @method WorkflowProcessNode[]    findAll()
 * @method WorkflowProcessNode[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WorkflowProcessNodeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, WorkflowProcessNode::class);
    }

//    /**
//     * @return WorkflowProcessNode[] Returns an array of WorkflowProcessNode objects
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

//    public function findOneBySomeField($value): ?WorkflowProcessNode
//    {
//        return $this->createQueryBuilder('w')
//            ->andWhere('w.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
