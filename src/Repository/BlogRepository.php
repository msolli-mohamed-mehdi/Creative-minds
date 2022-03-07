<?php

namespace App\Repository;

use App\Entity\Blog;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Blog|null find($id, $lockMode = null, $lockVersion = null)
 * @method Blog|null findOneBy(array $criteria, array $orderBy = null)
 * @method Blog[]    findAll()
 * @method Blog[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BlogRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Blog::class);
    }

    public function upvoteBlog($blog)
    {
        return $this
            ->createQueryBuilder('b')
            ->update($this->getEntityName(), 'b')
            ->set('b.blogvotes', $blog->getBlogvotes() + 1)
            ->where('b.id = :id')->setParameter('id', $blog->getId())
            ->getQuery()
            ->execute();
    }

    public function joinVol($id)
    {

        $entityManager=$this->getEntityManager();
        $query=$entityManager
            ->createQuery("Select v.destination FROM APP\Entity\Vol v JOIN APP\Entity\Blog b WHERE b.vol=:id")
            ->setParameter('id',$id);
            return $query->getResult();


    }




    // /**
    //  * @return Blog[] Returns an array of Blog objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Blog
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
