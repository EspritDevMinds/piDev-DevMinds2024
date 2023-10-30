<?php

namespace App\Repository;

use App\Entity\Author;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Author>
 *
 * @method Author|null find($id, $lockMode = null, $lockVersion = null)
 * @method Author|null findOneBy(array $criteria, array $orderBy = null)
 * @method Author[]    findAll()
 * @method Author[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AuthorRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Author::class);
    }
    public function listAuthorByEmail($email)
    {
        return $this->createQueryBuilder('a')
            ->orderBy('a.email', 'ASC')
            ->getQuery()
            ->getResult();
    }
    /*function SearchAuthorDQL($min,$max){
        $em=$this->getEntityManager();
        return $em->createQuery(
            'select a from App\Entity\Author a WHERE 
        a.nb_books BETWEEN ?1 AND ?2')
            ->setParameter(1,$min)
            ->setParameter(2,$max)
            ->getResult();
    }
    function SearchAuthorDQLByFirstCaracterName(){
        $em=$this->getEntityManager();
        return $em->createQuery(
            'select COUNT(a) from App\Entity\Author a WHERE 
        a.nb_books > 0')
            ->getSingleScalarResult();
    }*/

   public function MinMaxBook($minBooks, $maxBooks)
   {
       $entityManager = $this->getEntityManager();

       $query = $entityManager->createQuery("
       SELECT a
       FROM App\Entity\Author a
       LEFT JOIN a.books b
       HAVING COUNT(b) BETWEEN :min_books AND :max_books OR COUNT(b) = 0
   ");

       $query->setParameter('min_books', $minBooks);
       $query->setParameter('max_books', $maxBooks);

       return $query->getResult();
   }
   public function ZeroBooks() {
       $entityManager = $this->getEntityManager();
       $query = $entityManager->createQuery("
       DELETE FROM App\Entity\Author a
       WHERE (
           SELECT COUNT(b.ref)
           FROM App\Entity\Book b
           WHERE b.author = a
       ) = 0
   ");

       return $query->execute();
   }
//    /**
//     * @return Author[] Returns an array of Author objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Author
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
