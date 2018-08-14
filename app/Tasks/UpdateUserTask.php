<?php

namespace App\Tasks;
use App\User;

/**
 * Class UpdateUserTask
 * @package App\Tasks
 */
class UpdateUserTask extends Tasks
{
    private $user;
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function run(int $id, ?string $name, ?int $age): void
    {
        $attributes = [];

        if ($name) {
            $attributes['name'] = $name;
        }

        if ($age) {
            $attributes['age'] = $age;
        }

        $this->user
            ->where('id', $id)
            ->update($attributes);
    }
}
