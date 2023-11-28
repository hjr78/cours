<?php

namespace App\Repository;

use App\Entity\Article;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Article>
 *
 * @method Article|null find($id, $lockMode = null, $lockVersion = null)
 * @method Article|null findOneBy(array $criteria, array $orderBy = null)
 * @method Article[]    findAll()
 * @method Article[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ArticleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Article::class);
    }




public function getLastInserted($entity, $amount)
    {
        return $this->getEntityManager()
                    ->createQuery(
                       "SELECT e FROM $entity e ORDER BY e.id DESC"
                    )
                    ->setMaxResults($amount)
                    ->getResult();
    }

// KNP

public function filter(){
    return $this->createQueryBuilder('a')
    ->orderBy('a.id', 'ASC');
}

// KNP


//    /**
//     * @return Article[] Returns an array of Article objects
//     */
   public function findByExampleField()
   {
       return $this->createQueryBuilder('a')
           ->orderBy('a.id', 'ASC')
       ;
   }

//    public function findOneBySomeField($value): ?Article
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
