<?php
use PHPUnit\Framework\TestCase;
use App\Entity\User;
use App\Repository\UserRepository;
use App\UseCase\SaveUserUseCase;

class SaveUserUseCaseTest extends TestCase {
    public function testSaveUser() {
        $user = new User('Misael Vargas', 'misaeboca@gmail.com', '123');
        $repository = new UserRepository();
        $useCase = new SaveUserUseCase($repository);

        $useCase->execute($user);

        $this->assertTrue(true);
    }
}
