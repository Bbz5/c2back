<?php

namespace App\Repository;

use App\Entity\OptionsGenerals;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<OptionsGenerals>
 *
 * @method OptionsGenerals|null find($id, $lockMode = null, $lockVersion = null)
 * @method OptionsGenerals|null findOneBy(array $criteria, array $orderBy = null)
 * @method OptionsGenerals[]    findAll()
 * @method OptionsGenerals[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OptionsGeneralsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, OptionsGenerals::class);
    }

    public function save(OptionsGenerals $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(OptionsGenerals $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return OptionsGenerals[] Returns an array of OptionsGenerals objects
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

//    public function findOneBySomeField($value): ?OptionsGenerals
//    {
//        return $this->createQueryBuilder('o')
//            ->andWhere('o.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
