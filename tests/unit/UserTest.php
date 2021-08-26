<?php
require_once 'PHPUnit/Autoload.php';
// Namespace
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testGetTheFirstName()
    {
        $user = new \App\Models\User;

        $$user->setFirstName('Billy');

        $this->assertEquals($user->getFirstName(), 'Billy');
    }
}
