<?php
/**
 * Created by PhpStorm.
 * User: foxtech
 * Date: 06/08/18
 * Time: 20:22
 */

namespace App\Actions;


use App\Tasks\UpdateUserTask;

abstract class Actions
{
    private  $updateUserTask;

    public function __construct(UpdateUserTask $updateUserTask)
    {
        $this->updateUserTask = $updateUserTask;
    }


}
