<?php

namespace Spec\App\Application\UseCase;

use App\Application\UseCase\ShowUsersUseCase;
use App\Domain\User\UserRepository;
use PhpSpec\ObjectBehavior;

class ShowUserUseCaseSpec  extends ObjectBehavior
{

    public function let(
        UserRepository $userRepository
    ) {

        $this->beConstructedWith($userRepository);
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType(ShowUsersUseCase::class);
    }

    public function it_shows_the_users(UserRepository $userRepository)
    {
        $userRepository->getAll()->willReturn(['name' => 'marta']);
        $this->execute();
    }
}