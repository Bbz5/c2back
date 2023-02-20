<?php

namespace App\Repository;

use App\Entity\OptionsPorteur;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<OptionsPorteur>
 *
 * @method OptionsPorteur|null find($id, $lockMode = null, $lockVersion = null)
 * @method OptionsPorteur|null findOneBy(array $criteria, array $orderBy = null)
 * @method OptionsPorteur[]    findAll()
 * @method OptionsPorteur[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OptionsPorteurRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OptionsPorteur::class);
    }

    public function save(OptionsPorteur $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(OptionsPorteur $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return OptionsPorteur[] Returns an array of OptionsPorteur objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('o.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?OptionsPorteur
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
