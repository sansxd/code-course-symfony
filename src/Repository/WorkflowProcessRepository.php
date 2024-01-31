<?php

namespace App\Repository;

use App\Entity\WorkflowProcess;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<WorkflowProcess>
 *
 * @method WorkflowProcess|null find($id, $lockMode = null, $lockVersion = null)
 * @method WorkflowProcess|null findOneBy(array $criteria, array $orderBy = null)
 * @method WorkflowProcess[]    findAll()
 * @method WorkflowProcess[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WorkflowProcessRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, WorkflowProcess::class);
    }

//    /**
//     * @return WorkflowProcess[] Returns an array of WorkflowProcess objects
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

//    public function findOneBySomeField($value): ?WorkflowProcess
//    {
//        return $this->createQueryBuilder('w')
//            ->andWhere('w.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
