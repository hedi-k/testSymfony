<?php

namespace App\Repository;

use App\Entity\Tempmin;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Tempmin>
 *
 * @method Tempmin|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tempmin|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tempmin[]    findAll()
 * @method Tempmin[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TempminRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Tempmin::class);
    }

//    /**
//     * @return Tempmin[] Returns an array of Tempmin objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('t.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Tempmin
//    {
//        return $this->createQueryBuilder('t')
//            ->andWhere('t.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
