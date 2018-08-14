<?php
/**
 * Created by PhpStorm.
 * User: fedor
 * Date: 14.08.18
 * Time: 17:01
 */

namespace App\Modules\Post\Actions;


use App\Modules\Post\Tasks\CreatePostTask;
use App\Platform\Action\Action;

/**
 * Class CreatePostAction
 * @package App\Modules\Post\Actions
 */
class CreatePostAction extends Action
{
    /**
     * @var CreatePostTask
     */
    private $createPostTask;

    /**
     * CreatePostAction constructor.
     * @param CreatePostTask $createPostTask
     */
    public function __construct(CreatePostTask $createPostTask)
    {
        $this->createPostTask = $createPostTask;
    }

    /**
     * @param string $name
     * @param string $post
     */
    public function run(string $name, string $post)
    {
        $this->createPostTask->run($name, $post);
    }
}