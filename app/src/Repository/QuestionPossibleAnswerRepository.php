<?php

namespace App\Repository;

use App\Entity\QuestionPossibleAnswer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method QuestionPossibleAnswer|null find($id, $lockMode = null, $lockVersion = null)
 * @method QuestionPossibleAnswer|null findOneBy(array $criteria, array $orderBy = null)
 * @method QuestionPossibleAnswer[]    findAll()
 * @method QuestionPossibleAnswer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class QuestionPossibleAnswerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, QuestionPossibleAnswer::class);
    }

    // /**
    //  * @return QuestionPossibleAnswer[] Returns an array of QuestionPossibleAnswer objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('q.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?QuestionPossibleAnswer
    {
        return $this->createQueryBuilder('q')
            ->andWhere('q.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
