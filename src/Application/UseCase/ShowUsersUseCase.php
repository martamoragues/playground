<?php

namespace App\Application\UseCase;

use App\Domain\User\UserRepository;

class ShowUsersUseCase
{
    /**
     * @var UserRepository
     */
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function execute()
    {
        return $this->userRepository->getAll();
    }
}