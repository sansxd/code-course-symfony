<?php

namespace App\Repository;

use App\Entity\WorkflowOuRole;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<WorkflowOuRole>
 *
 * @method WorkflowOuRole|null find($id, $lockMode = null, $lockVersion = null)
 * @method WorkflowOuRole|null findOneBy(array $criteria, array $orderBy = null)
 * @method WorkflowOuRole[]    findAll()
 * @method WorkflowOuRole[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WorkflowOuRoleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, WorkflowOuRole::class);
    }

//    /**
//     * @return WorkflowOuRole[] Returns an array of WorkflowOuRole objects
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

//    public function findOneBySomeField($value): ?WorkflowOuRole
//    {
//        return $this->createQueryBuilder('w')
//            ->andWhere('w.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
