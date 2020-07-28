<?php

namespace App\Repository;

use App\Entity\ComentariosMaleteo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method ComentariosMaleteo|null find($id, $lockMode = null, $lockVersion = null)
 * @method ComentariosMaleteo|null findOneBy(array $criteria, array $orderBy = null)
 * @method ComentariosMaleteo[]    findAll()
 * @method ComentariosMaleteo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ComentariosMaleteoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ComentariosMaleteo::class);
    }

    // /**
    //  * @return ComentariosMaleteo[] Returns an array of ComentariosMaleteo objects
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
    public function findOneBySomeField($value): ?ComentariosMaleteo
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
