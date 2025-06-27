<?php

namespace App\Services;

use App\Repositories\UserRepositoryInterface;

class AuthService {
    protected $userRepo;

    public function __construct(UserRepositoryInterface $userRepo) {
        $this->userRepo = $userRepo;
    }

    public function login(string $email) {

        Log::info('AuthService login called with email: ' . $email);

        $user = $this->userRepo->findByEmail($email);
        if ($user) {
            return ['message' => 'Login successful'];
        }
        return ['message' => 'User not found'];
    }
}
