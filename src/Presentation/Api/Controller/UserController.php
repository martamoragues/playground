<?php

namespace App\Presentation\Api\Controller;

use App\Application\UseCase\ShowUsersUseCase;
use Symfony\Component\HttpFoundation\JsonResponse;

class UserController
{

    /**
     * @var ShowUsersUseCase
     */
    private $showUsersUseCase;

    /**
     * UserController constructor.
     *
     * @param ShowUsersUseCase $showUsersUseCase
     */
    public function __construct(ShowUsersUseCase $showUsersUseCase)
    {
        $this->showUsersUseCase = $showUsersUseCase;
    }

    public function getAllUsers()
    {
        var_dump($this->showUsersUseCase->execute());
        return new JsonResponse('esto funciona');
    }
}