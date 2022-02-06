<?php

namespace App\Repository;

use App\Entity\Cagetorie;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Cagetorie|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cagetorie|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cagetorie[]    findAll()
 * @method Cagetorie[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CagetorieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Cagetorie::class);
    }

    // /**
    //  * @return Cagetorie[] Returns an array of Cagetorie objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Cagetorie
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
