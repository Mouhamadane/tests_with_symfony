<?php

namespace App\Tests\Repository;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class UserRepositoryTest extends KernelTestCase
{
    
    public function testCount()
    {
        self::bootKernel();
        $users = self::$container->get(UserRepository::class)->count([]);
        $this->assertEquals(10,$users);

    }
}