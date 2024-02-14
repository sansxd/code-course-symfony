<?php

namespace App\Repository;

use App\Entity\WorkflowRoleUser;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<WorkflowRoleUser>
 *
 * @method WorkflowRoleUser|null find($id, $lockMode = null, $lockVersion = null)
 * @method WorkflowRoleUser|null findOneBy(array $criteria, array $orderBy = null)
 * @method WorkflowRoleUser[]    findAll()
 * @method WorkflowRoleUser[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WorkflowRoleUserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, WorkflowRoleUser::class);
    }

//    /**
//     * @return WorkflowRoleUser[] Returns an array of WorkflowRoleUser objects
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

//    public function findOneBySomeField($value): ?WorkflowRoleUser
//    {
//        return $this->createQueryBuilder('w')
//            ->andWhere('w.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
