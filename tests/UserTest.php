<?php

use CodeIgniter\Test\CIUnitTestCase;
use CodeIgniter\Test\ControllerTestTrait;
use CodeIgniter\Test\DatabaseTestTrait;

class UserTest extends CIUnitTestCase
{
    use ControllerTestTrait;
    use DatabaseTestTrait;

    public function testLogin()
    {
        $result = $this->withURI('http://localhost/user/login')
            ->controller(\App\Controllers\User::class)
            ->execute('login');

        $this->assertTrue($result->isOK());
    }
}
