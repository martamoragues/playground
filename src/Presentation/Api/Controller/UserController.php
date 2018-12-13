<?php

namespace App\Presentation\Api\Controller;

use App\Application\UseCase\ShowUsersUseCase;
use PHPUnit\Runner\Exception;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

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

    /**
     * @return JsonResponse
     */
    public function getAllUsers()
    {
        var_dump($this->showUsersUseCase->execute());
        return new JsonResponse('esto funciona');
    }

    /**
     * @param string $elem1
     * @param string $elem2
     *
     * @return Response
     */
    public function getSum(string $elem1, string $elem2)
    {
        if(!is_numeric($elem1) || !is_numeric($elem2)) {
            return new Response('error non numeric parameter' , 400);
        }
        return new Response($elem1 + $elem2);
    }
}