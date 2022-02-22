<?php

namespace App\Repository;

use App\Entity\Resoffre;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Resoffre|null find($id, $lockMode = null, $lockVersion = null)
 * @method Resoffre|null findOneBy(array $criteria, array $orderBy = null)
 * @method Resoffre[]    findAll()
 * @method Resoffre[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ResoffreRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Resoffre::class);
    }

    // /**
    //  * @return Resoffre[] Returns an array of Resoffre objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Resoffre
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
