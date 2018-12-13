<?php

namespace App\Infrastructure\User;

use App\Domain\User\User;
use App\Domain\User\UserRepository;

class YmlUserRepository implements UserRepository
{

    private $users = ['id' => 1, 'name' => 'marta', 'email' => 'hola'];

    /**
     * @return array
     */
    public function getAll(): array
    {
        return [new User($this->users['name'], $this->users['email'])];
    }
}