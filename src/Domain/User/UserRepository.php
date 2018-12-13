<?php

namespace App\Domain\User;

interface UserRepository
{

    /**
     * Return all the users
     * @return [User]
     */
    public function getAll(): array;
}