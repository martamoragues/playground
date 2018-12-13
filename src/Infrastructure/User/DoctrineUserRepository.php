<?php

namespace App\Infrastructure\User;

use App\Domain\User\User;
use App\Domain\User\UserRepository;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

class DoctrineUserRepository extends ServiceEntityRepository implements UserRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, User::class);
    }

    /**
     * @return array
     */
    public function getAll(): array
    {
        return $this->_em->getRepository(User::class)->findAll();
    }
}