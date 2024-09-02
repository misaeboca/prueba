<?php
namespace App\Repository;

use App\Entity\User;

class UserRepository implements UserRepositoryInterface {

    private array $users = [];

    public function save(User $user): void {
        $this->users[$user->getEmail()] = $user;
    }

    public function update(User $user): void {
        if (isset($this->users[$user->getEmail()])) {
            $this->users[$user->getEmail()] = $user;
        }
    }

    public function delete(User $user): void {
        unset($this->users[$user->getEmail()]);
    }
}
