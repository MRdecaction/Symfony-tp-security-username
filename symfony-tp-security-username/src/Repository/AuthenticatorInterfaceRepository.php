<?php

namespace App\Repository;

use App\Entity\AuthenticatorInterface;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AuthenticatorInterface|null find($id, $lockMode = null, $lockVersion = null)
 * @method AuthenticatorInterface|null findOneBy(array $criteria, array $orderBy = null)
 * @method AuthenticatorInterface[]    findAll()
 * @method AuthenticatorInterface[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AuthenticatorInterfaceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AuthenticatorInterface::class);
    }

    // /**
    //  * @return AuthenticatorInterface[] Returns an array of AuthenticatorInterface objects
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
    public function findOneBySomeField($value): ?AuthenticatorInterface
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
