<?php

namespace App\Repository;

use App\Entity\NombreCouchage;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<NombreCouchage>
 *
 * @method NombreCouchage|null find($id, $lockMode = null, $lockVersion = null)
 * @method NombreCouchage|null findOneBy(array $criteria, array $orderBy = null)
 * @method NombreCouchage[]    findAll()
 * @method NombreCouchage[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NombreCouchageRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NombreCouchage::class);
    }

    public function save(NombreCouchage $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(NombreCouchage $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return NombreCouchage[] Returns an array of NombreCouchage objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('n')
//            ->andWhere('n.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('n.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?NombreCouchage
//    {
//        return $this->createQueryBuilder('n')
//            ->andWhere('n.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
