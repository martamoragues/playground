<?php

namespace App\Test\Application\UseCase;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ShowUserUseCaseTest extends WebTestCase
{
    public function test_it_shows_users()
    {
        $expected = ['name' => 'marta'];

        $repository = $this->getMockBuilder('App\Domain\User\UserRepository')
            ->disableOriginalConstructor()
            ->disableOriginalClone()
            ->disableArgumentCloning()
            ->disallowMockingUnknownTypes()
            ->getMock();

        // Configure the stub.
        $repository->method('getAll')
            ->willReturn(['name' => 'marta']);

        // Calling $stub->doSomething() will now return
        // 'foo'.
        $this->assertEquals($expected, $repository->getAll());

    }
}