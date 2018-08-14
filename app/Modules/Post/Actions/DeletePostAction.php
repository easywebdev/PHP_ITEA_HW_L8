<?php
/**
 * Created by PhpStorm.
 * User: fedor
 * Date: 14.08.18
 * Time: 19:29
 */

namespace App\Modules\Post\Actions;


use App\Modules\Post\Tasks\DeletePostTask;
use App\Platform\Action\Action;

/**
 * Class DeletePostAction
 * @package App\Modules\Post\Actions
 */
class DeletePostAction extends Action
{
    /**
     * @var DeletePostTask
     */
    private $deletePostTask;

    /**
     * DeletePostAction constructor.
     * @param DeletePostTask $deletePostTask
     */
    public function __construct(DeletePostTask $deletePostTask)
    {
        $this->deletePostTask = $deletePostTask;
    }

    /**
     * @param int $id
     */
    public function run(int $id)
    {
        $this->deletePostTask->run($id);
    }
}