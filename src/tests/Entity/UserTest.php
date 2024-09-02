<?php
use PHPUnit\Framework\TestCase;
use App\Entity\User;

class UserTest extends TestCase {
    public function testUserCreation() {
        $user = new User('Misael Vargas', 'misaeboca@gmail.com', '123');
        $this->assertEquals('Misael Vargas', $user->getName());
        $this->assertEquals('misaeboca@gmail.com', $user->getEmail());
        $this->assertEquals('123', $user->getPassword());
    }
}
