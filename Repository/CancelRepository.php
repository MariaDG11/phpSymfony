<?php

namespace App\Repository;

use App\Entity\Cancel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Cancel|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cancel|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cancel[]    findAll()
 * @method Cancel[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CancelRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Cancel::class);
    }

    // /**
    //  * @return Cancel[] Returns an array of Cancel objects
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
    public function findOneBySomeField($value): ?Cancel
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
