<?php

namespace App\Repository;

use App\Entity\Alacon;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Alacon|null find($id, $lockMode = null, $lockVersion = null)
 * @method Alacon|null findOneBy(array $criteria, array $orderBy = null)
 * @method Alacon[]    findAll()
 * @method Alacon[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AlaconRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Alacon::class);
    }

    // /**
    //  * @return Alacon[] Returns an array of Alacon objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Alacon
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
