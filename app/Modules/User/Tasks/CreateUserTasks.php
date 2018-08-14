<?php
/**
 * Created by PhpStorm.
 * User: fedor
 * Date: 13.08.18
 * Time: 19:33
 */

namespace App\Modules\User\Tasks;


use App\Modules\User\Contracts\UserRepoitoryInterface;
use App\Platform\Task\Task;
use Illuminate\Support\Facades\Hash;

class CreateUserTasks extends Task
{
    private $userRepository;

    public function __construct(UserRepoitoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function run(string $name, string $password, string $email)
    {
        try {
            $this->userRepository->create([
                'name'=> $name,
                'password' => Hash::make($password),
                'email' => $email,
            ]);
        }
        catch (\Exception $e) {

        }
    }
}