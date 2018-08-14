<?php
/**
 * Created by PhpStorm.
 * User: fedor
 * Date: 14.08.18
 * Time: 19:26
 */

namespace App\Modules\Post\Tasks;


use App\Modules\Post\Contracts\PostRepositoryInterface;
use App\Platform\Task\Task;

/**
 * Class DeletePostTask
 * @package App\Modules\Post\Tasks
 */
class DeletePostTask extends Task
{
    /**
     * @var PostRepositoryInterface
     */
    private $postRepository;

    /**
     * DeletePostTask constructor.
     * @param PostRepositoryInterface $postRepository
     */
    public function __construct(PostRepositoryInterface $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    /**
     * @param int $id
     */
    public function run(int $id)
    {
        $this->postRepository->delete($id);
    }
}