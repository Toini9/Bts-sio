<?php

namespace App\Repository;

use App\Entity\Prescrire;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Prescrire|null find($id, $lockMode = null, $lockVersion = null)
 * @method Prescrire|null findOneBy(array $criteria, array $orderBy = null)
 * @method Prescrire[]    findAll()
 * @method Prescrire[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */

class PrescrireRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Prescrire::class);
    }

    // /**

    //  * @return Maladies[] Returns an array of Maladies objects

    //  * @return Test[] Returns an array of Test objects

    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
<<<<<<< HEAD
    public function findOneBySomeField($value): ?Maladies
=======
    public function findOneBySomeField($value): ?Test
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}