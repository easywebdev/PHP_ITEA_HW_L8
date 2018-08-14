<?php
/**
 * Created by PhpStorm.
 * User: fedor
 * Date: 14.08.18
 * Time: 19:09
 */

namespace App\Modules\Post\Actions;


use App\Modules\Post\Tasks\UpdatePostTask;
use App\Platform\Action\Action;

/**
 * Class UpdatePostAction
 * @package App\Modules\Post\Actions
 */
class UpdatePostAction extends Action
{
    /**
     * @var UpdatePostTask
     */
    private $updatePostTask;

    /**
     * UpdatePostAction constructor.
     * @param UpdatePostTask $updatePostTask
     */
    public function __construct(UpdatePostTask $updatePostTask)
    {
        $this->updatePostTask = $updatePostTask;
    }

    /**
     * @param string $name
     * @param string $post
     * @param int $id
     */
    public function run(string $name, string $post, int $id)
    {
        $this->updatePostTask->run($name, $post, $id);
    }
}