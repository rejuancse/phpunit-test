<?php
require_once 'PHPUnit/Autoload.php';
// Namespace
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testGetTheFirstName()
    {
        $user = new \App\Models\User;

        $user->setFirstName('Alex');

        $this->assertEquals($user->getFirstName(), 'Alex');
    }

    public function testGetTheLatName()
    {
        $user = new \App\Models\User;

        $user->setLastName('Carry');

        $this->assertEquals($user->getLastname(), 'Carry');
    }

    public function testGetTheFullNameReturn()
    {
        $user = new \App\Models\User;
        $user->setFirstName('Alex');
        $user->setLastName('Carry');

        $this->assertEquals($user->getFullname(), 'Alex Carry');
    }

    public function testFirstAndLastNameAreTrimmed()
    {
        $user = new \App\Models\User;
        $user->setFirstName(' Alex    ');
        $user->setLastName('       Carry');

        $this->assertEquals($user->getFirstName(), 'Alex');
        $this->assertEquals($user->getLastName(), 'Carry');
    }

    public function testEmailAddressCanBeSet()
    {
        $user = new \App\Models\User;
        $user->setEmail('email@gmail.com');

        $this->assertEquals($user->getEmail(), 'email@gmail.com');
    }

    public function testEmailVariablesContainCorrectValues()
    {
        $user = new \App\Models\User;
        $user->setFirstName('Alex');
        $user->setLastName('Carry');
        $user->setEmail('email@gmail.com');

        $emailVariables = $user->getEmailVariables();

        $this->assertArrayHasKey('full_name', $emailVariables);
        $this->assertArrayHasKey('email', $emailVariables);

        $this->assertEquals($emailVariables['full_name'], 'Alex Carry');
        $this->assertEquals($emailVariables['email'], 'email@gmail.com');
    }
}
