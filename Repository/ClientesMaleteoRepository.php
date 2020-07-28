<?php

namespace App\Repository;

use App\Entity\ClientesMaleteo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method ClientesMaleteo|null find($id, $lockMode = null, $lockVersion = null)
 * @method ClientesMaleteo|null findOneBy(array $criteria, array $orderBy = null)
 * @method ClientesMaleteo[]    findAll()
 * @method ClientesMaleteo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ClientesMaleteoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ClientesMaleteo::class);
    }

    // /**
    //  * @return ClientesMaleteo[] Returns an array of ClientesMaleteo objects
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
    public function findOneBySomeField($value): ?ClientesMaleteo
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
