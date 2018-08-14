<?php

namespace App\Tasks;

use App\User;

/**
 * Class CreateUserTask
 * @package App\Tasks
 */
class CreateUserTask extends Tasks
{
    /**
     * @var User
     */
    private $user;

    /**
     * CreateUserTask constructor.
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function run(string $name, int $age): void
    {
        $this->user->create([
            'name' => $name,
            'age'  => $age
        ]);
    }
}
