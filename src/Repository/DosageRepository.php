<?php

namespace App\Repository;

use App\Entity\Dosage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Dosage|null find($id, $lockMode = null, $lockVersion = null)
 * @method Dosage|null findOneBy(array $criteria, array $orderBy = null)
 * @method Dosage[]    findAll()
 * @method Dosage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */

class DosageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Dosage::class);
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